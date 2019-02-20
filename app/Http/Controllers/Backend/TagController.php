<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Backend\Tag;
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
      //
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
      //
  }

  public function destroy($id)
  {
      //
  }
}
