<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Backend\Tag;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class TagController extends Controller
{

    public function __construct()
  {
      $this->middleware('auth');
  }
  
  public function index()
  {
     $tags = Tag::orderBy('created_at','desc')->get();
     return view('backend.tags.index',compact('tags'));
  }

  public function create()
  {
    return view('backend.tags.create');
  }

  public function store(Request $request)
  {
     $tags = new Tag();
     $tags->name = $request->name;
     $tags->slug = str_slug($request->name,'-');
     $tags->is_active = $request->is_active;
     $tags->save();
     Toastr::success('Tag Save Successfully', 'Success');
     return redirect()->route('tag.index');
  }

  public function show($id)
  {
      //
  }

  public function edit($id)
  {
    $tag = Tag::findOrFail($id);
    return view('backend.tags.edit',compact('tag'));
  }

  public function update(Request $request, $id)
  {
     $tag = Tag::findOrFail($id);
     $tag->name = $request->name;
     $tag->slug = str_slug($request->name,'-');
     $tag->is_active = $request->is_active;
     $tag->save();
     Toastr::success('Tag Update Successfully', 'Success');
     return redirect()->route('tag.index');
  }

  public function destroy($id)
  {
    $tag = Tag::findOrFail($id);
    $tag->destroy($id);
    Toastr::success('Tag Delete Successfully', 'Success');
    return redirect()->back();
  }
}
