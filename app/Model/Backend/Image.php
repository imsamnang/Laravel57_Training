<?php

namespace App\Model\Backend;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
	public static function imageUpload($filename,$ObjController, $path = null)
  {
  	if(request()->hasfile($filename))
  	{
      $dir = 'uploads/' . $path .'/';
  		$file = request()->file($filename);
  		$extension = $file->getClientOriginalExtension();
  		$filename = time().'.'.$extension;
  		$file->move($dir,$filename);
  		$ObjController->image = $filename;
  	}
  }

  public static function imageUpdate($filename,$ObjController, $path = null)
  {
    $dir = 'uploads/'. $path .'/';
    if(request()->hasfile($filename))
    {
      if ($ObjController->image != '' && File::exists($dir . $ObjController->image))
        File::delete($dir . $ObjController->image);
        $file = request()->file($filename);
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $file->move($dir,$filename);
        $ObjController->image = $filename;
      } elseif (request()->remove == 1 && File::exists('uploads/' . $path .'/'. $ObjController->image)){
          File::delete($dir . $ObjController->image);
        $ObjController->image = null;
      }
  }
    
}