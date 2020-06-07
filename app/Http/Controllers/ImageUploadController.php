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
      'images' => 'required',
      'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    foreach(request()->images as $image) {
      $uniqueId = uniqid();
      $imageName = $uniqueId.'.'.$image->getClientOriginalExtension();

      $award = new Award();
      $award->img_url = $imageName;
      $award->is_visioned = "false";
      $award->unique_id = $uniqueId;
      $award->save();

      $bool = Storage::disk('public')->put($imageName, file_get_contents($image));
    }

    return back()
      ->with('success','图片上传成功！')
      ->with('image',$imageName);
  }
}