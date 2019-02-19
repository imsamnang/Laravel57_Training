<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Backend\Category;
use App\Model\Backend\Image;
use Illuminate\Http\Request;

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
    }

    public function destroy($id)
    {
        //
    }
}
