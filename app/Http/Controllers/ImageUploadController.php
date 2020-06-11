<?php

namespace App\Http\Controllers;

use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\File;

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
  public function __construct()
  {
    $this->middleware('auth');
  }

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

    //     $image = $request->file('image');
    //     $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
    //     $destinationPath = public_path('/thumbnail');
    //     $img = Image::make($image->getRealPath());
    //     $img->resize(100, 100, function ($constraint) {
    //     $constraint->aspectRatio();
    // })->save($destinationPath.'/'.$input['imagename']);
    //     $destinationPath = public_path('/images');
    //     $image->move($destinationPath, $input['imagename']);
    //     $this->postImage->add($input);

    foreach(request()->images as $image) {
      $uniqueId = uniqid();
      $imageName = $uniqueId.'.'.$image->getClientOriginalExtension();
      $thumbImageName = "thumb_" . $uniqueId.'.'.$image->getClientOriginalExtension();

      $img = Image::make($image->getRealPath());
      $img->resize(1024, null, function ($constraint) {
        $constraint->aspectRatio();
      })->encode('jpg', 100);

      $thumbImg = Image::make($image->getRealPath());
      $thumbImg->resize(300, null, function ($constraint) {
        $constraint->aspectRatio();
      })->encode('jpg', 100);

      $award = new Award();
      $award->img_url = $imageName;
      $award->thumb_url = $thumbImageName;
      $award->is_visioned = "false";
      $award->unique_id = $uniqueId;
      $award->save();

      $bool = Storage::disk('public')->put($imageName, $img->__toString());
      $bool = Storage::disk('public')->put($thumbImageName, $thumbImg->__toString());
    }

    return back()
      ->with('success','图片上传成功！')
      ->with('image',$imageName);
  }
}