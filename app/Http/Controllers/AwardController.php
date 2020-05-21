<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google\Cloud\Vision\VisionClient;
use App\Models\Award;
use URL;

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

  $select = $annotation->fullText(); 
    file_put_contents(public_path('gstest.json'), json_encode($pages));
    $jsonfilename = $uniqid . ".json";
    $txtfilename = $uniqid . ".txt";
    // $bool = Storage::disk('reports')->put($jsonfilename, json_encode($pages));
    // $bool = Storage::disk('reports')->put($txtfilename, $text);
return $select;
    // $this->readTextFromJsonData($jsonfilename, $txtfilename);

  } 
}
