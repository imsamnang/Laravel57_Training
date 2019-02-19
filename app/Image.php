<?php

namespace App;

use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
	public static function imageUpload($filename,$images)
  {
  	if(request()->hasfile($filename))
  	{
      $dir = 'uploads/';
  		$file = request()->file($filename);
  		$extension = $file->getClientOriginalExtension();
  		$filename = time().'.'.$extension;
  		$file->move($dir,$filename);
  		$images->image = $filename;
  	}
  }

	public static function imageUpdate($filename,$images)
  {
    $dir = 'uploads/';
  	if(request()->hasfile($filename))
  	{
			if ($images->image != '' && File::exists($dir . $images->image))
        File::delete($dir . $images->image);
	      $file = request()->file($filename);
	  		$extension = $file->getClientOriginalExtension();
	  		$filename = time().'.'.$extension;
	  		$file->move($dir,$filename);
	  		$images->image = $filename;
	  	} elseif (request()->remove == 1 && File::exists('uploads/' . $images->image)){
	  		  File::delete($dir . $images->image);
	      $images->image = null;
	  	}
  }

}
