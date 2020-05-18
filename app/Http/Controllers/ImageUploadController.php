<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Award;

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

    $imageName = time().'.'.request()->image->getClientOriginalExtension();

    $award = new Award();
    $award->img_url = $imageName;
    $award->is_visioned = "false";
    $award->save();

    request()->image->move(public_path('images'), $imageName);

    return back()
      ->with('success','You have successfully upload image.')
      ->with('image',$imageName);
  }
}