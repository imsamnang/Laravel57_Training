<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Backend\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }    

  public function index()
  {
    $posts = Post::orderBy('created_at','desc')->get();
    return view('backend.posts.index',compact('posts'));
  }

  public function create()
  {
    return view('backend.posts.create');
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
    $post = Post::findOrFail($id);
    return view('backend.posts.edit',compact('post'));
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
