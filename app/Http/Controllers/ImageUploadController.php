<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Award;

use \Storage;

class ImageUploadController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */

  public function imageUpload()
  {
    return view('imageupload.imageupload');
  }

  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */

  public function imageUploadPost()
  {
    request()->validate([
      'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
    $uniqueId = uniqid();
    $imageName = $uniqueId.'.'.request()->image->getClientOriginalExtension();

    $award = new Award();
    $award->img_url = $imageName;
    $award->is_visioned = "false";
    $award->unique_id = $uniqueId;
    $award->save();

    $bool = Storage::disk('public')->put($imageName, file_get_contents(request()->image));
    
    // y';pullyb lpnl->move(public_path('images'), $imageName);

    return back()
      ->with('success','图片上传成功！')
      ->with('image',$imageName);
  }
}