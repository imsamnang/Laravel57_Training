<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Backend\Category;
use App\Model\Backend\Image;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{

  public function index()
  {
    $categories = Category::orderBy('created_at','desc')->get();
    return view('backend.categories.index',compact('categories'));
  }

  public function create()
  {
    return view('backend.categories.create');
  }

  public function store(Request $request)
  {
     $categories = new Category();
     $image = new Image();
     $categories->name = $request->name;
     $categories->slug = str_slug($request->name,'-');
     $categories->is_active = $request->is_active;
     $image->imageUpload('image',$categories,'categories');
     $categories->save();
     Toastr::success('Category Save Successfully', 'Success');
     return redirect()->route('category.index');
  }

  public function show($id)
  {
      //
  }

  public function edit($id)
  {
    $category = Category::findOrFail($id);
    return view('backend.categories.edit',compact('category'));
  }

  public function update(Request $request, $id)
  {
     $categories = Category::findOrFail($id);
     $image = new Image();
     $categories->name = $request->name;
     $categories->slug = str_slug($request->name,'-');
     $categories->is_active = $request->is_active;
     $image->imageUpload('image',$categories,'categories');
     $categories->save();
     Toastr::success('Category Update Successfully', 'Success');
     return redirect()->route('category.index');
  }

  public function destroy($id)
  {
    $category = Category::findOrFail($id);
    $dir = 'uploads/categories/';
    if ($category->image != '' && File::exists($dir . $category->image))
      File::delete($dir . $category->image);
    $category->destroy($id);
    Toastr::success('Category Delete Successfully', 'Success');
    return redirect()->back();
  }
  
}
