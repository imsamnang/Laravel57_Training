<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Backend\Category;
use App\Model\Backend\Upload;
use App\Model\Backend\Post;
use App\Model\Backend\Tag;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// ini_set('memory_limit', '3000M');
// ini_set('max_execution_time', '0');
class PostController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }    

  public function index()
  {
    // $posts = Post::orderBy('created_at','desc')->get();
    $posts = Post::latest()->get();
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
    // return $request;
    $this->validate($request,[
      'title' => 'required',
      'image' => 'required',
      'categories' => 'required',
      'tags' => 'required',
      'body' => 'required'
    ]);
    $image = new Upload();
    $post = new Post();
    $slug = str_slug($request->title);
    $post->user_id = Auth::id();
    $post->title = $request->title;
    $post->slug = $slug;
    $image->imageUpload('image',$post,'1/posts');
    $post->body = $request->body;
    $post->is_approved = true;
    if(isset($request->is_active))
    {
        $post->is_active = true;
    } else {
        $post->is_active = false;
    }

    $post->save();

    $post->categories()->attach($request->categories);
    $post->tags()->attach($request->tags);
    
    Toastr::success('Post Successfully Save:)','Success');
    return redirect()->route('post.index');
}

  public function show($id)
  {
      //
  }

  public function edit($id)
  {
    $post = Post::findOrFail($id);
    $categories = Category::all();
    $tags = Tag::all();
    return view('backend.posts.edit',compact('post','categories','tags'));
  }

  public function update(Request $request, $id)
  {
    $this->validate($request,[
      'title' => 'required',
      'image' => 'required',
      'categories' => 'required',
      'tags' => 'required',
      'body' => 'required'
    ]);
    $image = new Upload();
    $post->user_id =Auth::id();
    $post->title = $request->title;
    $slug = str_slug($request->title);
    $post->slug = $slug;
    $image->imageUpdate('image',$post,'1/posts');
    $post->body = $request->body;
    $post->is_approved = true;
    if(isset($request->is_active))
    {
        $post->is_active = true;
    } else {
        $post->is_active = false;
    }
    $post->save();

    $post->categories()->sync($request->categories);
    $post->tags()->sync($request->tags);
    Toastr::success('Post Successfully Updated:)','Success');
    return redirect()->route('post.index');
  }

  public function destroy($id)
  {
    $post = Post::findOrFail($id);
    $image = new Upload();
    $image->imageDelete('image',$post,'1/posts');
    $post->categories()->detach();
    $post->tags()->detach();
    $post->delete();
    Toastr::success('Post Successfully Deleted',"Success");
    return redirect()->back();

  }

}
