<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Backend\Category;
use App\Model\Backend\Post;
use App\Model\Backend\Tag;
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
    $categories = Category::all();
    $tags = Tag::all();
    return view('backend.posts.create',compact('categories','tags'));
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
