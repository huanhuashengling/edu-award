<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google\Cloud\Vision\VisionClient;
use App\Models\Award;
use URL;
use \Storage;

class AwardController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    return view('award.index');
  }

  public function list()
  {
    $awards = Award::all();
    return view('award.list', compact('awards'));
  }

  public function create()
  {
    return view('award.create');
  }

  public function detail(Request $request)
  {
    $rewardsId = $request->route('id');
    $award = Award::find($rewardsId);
    return view('award.detail', compact('award'));
  }

  public function edit(Request $request)
  {
    $rewardsId = $request->route('id');
    $award = Award::find($rewardsId);
    return view('award.edit', compact('award'));
  }

  public function vision(Request $request)
  {
    $rewardsId = $request->route('id');
    $award = Award::find($rewardsId);
    // dd(public_path("images/" . $award->img_url));
    return $this->requestToGoogleAPI(time(), public_path("images/" . $award->img_url));
    // return $this->requestToGoogleAPI(time(), "https://ss0.bdstatic.com/70cFvHSh_Q1YnxGkpoWK1HF6hhy/it/u=1484249087,538554565&fm=15&gp=0.jpg");
  }

  public function dashboard()
  {
    return view('award.dashboard');
  }

  public function requestToGoogleAPI($uniqid, $filePath)
  {
  // get pages data from googleapis

    $vision = new VisionClient(['keyFile' => json_decode(file_get_contents(env('GOOGLE_APPLICATION_CREDENTIALS')), true)]); 

    $image = $vision->image(
      fopen($filePath, 'r'),
      ['TEXT_DETECTION']
    );

    $annotation = $vision->annotate($image);
    $earlyText = $annotation->text()[0]->description();
    $document = $annotation->fullText();
    $pages = $document->pages();
    $info = $document->info();
    $text = $document->text();

  // $select = $annotation->fullText(); 
    $bool = Storage::disk('reports')->put($uniqid . '_info.json', json_encode($info));
    // file_put_contents(public_path($uniqid . '_info.json'), json_encode($info));
    $jsonfilename = $uniqid . "_pages.json";
    $txtfilename = $uniqid . ".txt";
    $bool = Storage::disk('reports')->put($jsonfilename, json_encode($pages));
    $bool = Storage::disk('reports')->put($txtfilename, $text);

    $this->readTextFromJsonData($uniqid);
  }

public function readTextFromJsonData($uniqid)
  {
    $txt_string = (Storage::disk('reports')->get($uniqid . ".txt"));
    // $json_string = (Storage::disk('reports')->get($uniqid . ".text"));
    // $pages = json_decode($json_string, true);
    dd($txt_string);
    $resultLocations = $this->find_words_location($pages, "结果");

    // find barcode
    $barCodeLocation = $this->find_word_location($pages, "条形码")["vertices"];
    $barCodeWidth = 3 * ($barCodeLocation[2]["x"] - $barCodeLocation[0]["x"]);
    $barCode = $this->text_within($pages, 
                        $barCodeLocation[2]["x"] + 10, 
                        $barCodeLocation[0]["y"] - 5,
                        $barCodeLocation[2]["x"] + 10 + $barCodeWidth,
                        $barCodeLocation[2]["y"] + 5);
// echo $barCode;
    $laboratoryItems = LaboratoryItem::where(["laboratory_type" => "血常规"])->get();

    $laboratoryCommonItems = LaboratoryCommonItem::all();
    $earlyText = (Storage::disk('reports')->get($txtfilename));
    // echo $earlyText;
    // dd($pages);
    //find laboratoryReport by barcode makesure it's unique
    $laboratoryReport = LaboratoryReport::where(["bar_code" => $barCode])->first();

    if (isset($laboratoryReport)) {
      echo "There is an report with the same bar code!";
      return Redirect::to('report-list');
      return;
    }

 
    $laboratoryReport = new LaboratoryReport();
    foreach ($laboratoryCommonItems as $key => $item) {
      $preg= '/' . $item->find_by_label . '[\s\S]*?\\n/i';
      preg_match_all($preg, $earlyText, $res);
      if (isset($res[0][0])) {
        $explodeResult = explode(":", $res[0][0], 2);
        if (!isset($explodeResult[1])) {
          $laboratoryReport[$item->bind_report_item_label] = "";
        } else if("" == trim($explodeResult[1])) {
          if (strpos($item->bind_report_item_label, "_time")) {
            $laboratoryReport[$item->bind_report_item_label] = "2001-01-01";
          } else {
            $laboratoryReport[$item->bind_report_item_label] = "";
          }
        } else {
          $laboratoryReport[$item->bind_report_item_label] = trim($explodeResult[1]);
        }
      }
    }
    $laboratoryReport->bar_code = $barCode;
    $laboratoryReport->report_title = "中南大学湘雅二医院检验科检验报告单";
    // dd($laboratoryReport);
    $result = $laboratoryReport->save();
    $laboratoryReportId = LaboratoryReport::latest()->first()->id;
// dd($laboratoryReportId);

    foreach ($laboratoryItems as $key => $laboratoryItem) {
      $laboratory_item_abb = $laboratoryItem->laboratory_item_abb;
      $abbLocation = $this->find_word_location($pages, $laboratory_item_abb)["vertices"];
      $resultLocation = $resultLocations[$laboratoryItem->column_num]["vertices"];
      // var_dump($abbLocation);
      $resultText = $this->text_within($pages, 
                        $resultLocation[0]["x"] - 5, 
                        $abbLocation[0]["y"] - 5,
                        $resultLocation[2]["x"] + 5,
                        $abbLocation[2]["y"] + 5);
      $resultValue = floatval($resultText);
      $towards = $this->valueTowards($resultValue, $laboratoryItem->refer_value_start, $laboratoryItem->refer_value_end);
      // echo($laboratoryItem->laboratory_item_label . $laboratory_item_abb . ": " . $resultText . "    " . $towards);
      $laboratoryLog = new LaboratoryLog();
      $laboratoryLog->laboratory_reports_id = $laboratoryReportId;
      $laboratoryLog->laboratory_items_id = $laboratoryItem->id;
      $laboratoryLog->result_value = $resultValue;
      $laboratoryLog->towards = $towards;
      $laboratoryLog->save();
    }


    // dd($resultDatas);
      // die();

    return Redirect::to('report-list');
  }

}
