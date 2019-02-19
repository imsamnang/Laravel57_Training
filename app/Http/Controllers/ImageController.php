<?php
namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
// use Illuminate\Support\Facades\File;

class ImageController extends Controller
{
    public function index(Request $request)
    {
        $images = Image::orderBy('created_at', 'desc')->paginate(8);
        return view('image_crud.index', compact('images'));
    }

    public function create(Request $request)
    {
        if ($request->isMethod('get'))
            return view('image_crud.form');
        else {
          $rules = [
              'description' => 'required',
          ];
          $this->validate($request, $rules);
          $image = new Image();
          // if ($request->hasFile('image')) {
          //     $dir = 'uploads/';
          //     $extension = strtolower($request->file('image')->getClientOriginalExtension()); // get image extension
          //     $fileName = str_random() . '.' . $extension; // rename image
          //     $request->file('image')->move($dir, $fileName);
          //     $image->image = $fileName;
          // }
 					$image->imageUpload('image',$image);
          $image->description = $request->description;
          $image->save();
          return redirect('/laravel-crud-image-gallery');
        }
    }

    public function update(Request $request, $id)
    {
        if ($request->isMethod('get'))
            return view('image_crud.form', ['image' => Image::find($id)]);
        else {
            $rules = [
                'description' => 'required',
            ];
            $this->validate($request, $rules);
            $image = Image::find($id);
            $image->imageUpdate('image',$image);
            $image->description = $request->description;
            $image->save();
            // return redirect('/laravel-crud-image-gallery');
            // if ($request->hasFile('image')) {
            //     $dir = 'uploads/';
            //     if ($image->image != '' && File::exists($dir . $image->image))
            //         File::delete($dir . $image->image);
            //     $extension = strtolower($request->file('image')->getClientOriginalExtension());
            //     $fileName = str_random() . '.' . $extension;
            //     $request->file('image')->move($dir, $fileName);
            //     $image->image = $fileName;
            // } elseif ($request->remove == 1 && File::exists('uploads/' . $image->image)) {
            //     File::delete('uploads/' . $image->post_image);
            //     $image->image = null;
            // }
           	$image->save();
            return redirect('/laravel-crud-image-gallery');
        }
    }

    public function delete($id)
    {
        $image = Image::find($id);
        $dir = 'uploads/';
	        if ($image->image != '' && File::exists($dir . $image->image))
	          File::delete($dir . $image->image);
        		Image::destroy($id);
        return redirect('/laravel-crud-image-gallery');
    }

}