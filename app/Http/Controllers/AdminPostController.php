<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
// use App\Http\Requests\BlogPost;

use App\Post;
use App\Tag;
// use Purifier;


class AdminPostController extends Controller
{
  // public function __construct(){
  //   $this->middleware('auth');
  // }
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $posts = Post::latest()->get();

    return view('admin.posts.postsDashboard', compact('posts'));
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {

    return view('admin.posts.createPost');

  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(BlogPost $request)
  {


    $post = new Post;
    $post->title = $request->title;
    $post->subtitle = $request->subtitle;
    $post->slug = $request->slug;
    if ($request->otherAuthor) {
      $post->author = $request->author;
    }
    if ($request->authorEmail){
      $post->author_email = $request->authorEmail;
    }
    if ($request->displayImage){
      $request->displayImage->storeAs('public/postPhotos', $request->displayImage->getClientOriginalName());
      $post->display_img = $request->displayImage->getClientOriginalName();
    }
    $post->content = Purifier::clean($request->content);
    $post->user_id = auth()->id();

    $post->save();


    $tagsArray = trim($request->tags, ';');
    $tagsArray = collect(explode(';', $tagsArray))->map(function($tag){
      return trim($tag);
    })->toArray();
    $currentTags = Tag::all();
    foreach ($tagsArray as $item) {
      if ($currentTags->pluck('name')->contains($item)){
        $post->tags()->attach($currentTags->where('name', $item));
      } else{
        $tag = new Tag;
        // $tag->name=$item;
        $tag->save();
        if($tag->save()){
          $post->tags()->attach($tag);
        }
      }
    }


    return redirect('admin/blog-posts');
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  // public function show($id)
  // {
  //   //
  // }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit(Post $post)
  {
    return view('admin.post.editPost', compact('post'));

  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(BlogPost $request, Post $post)
  {
    $selectedTags = collect($request->tag);
    $tagsToDelete = ($post->tags->pluck('name'))->diff($selectedTags);
    foreach ($tagsToDelete as $deletable) {
      $post->tags()->detach($post->tags->where('name', $deletable));
    }

    $tagsArray = trim($request->newTags, ';');
    $tagsArray = collect(explode(';', $tagsArray))->map(function($tag){
      return trim($tag);
    })->filter()->toArray();
    $currentTags = Tag::all();
    foreach ($tagsArray as $item) {
      if ($currentTags->pluck('name')->contains($item)){
        $post->tags()->attach($currentTags->where('name', $item));
      } else{
        $tag = new Tag;
        $tag->name=$item;
        $tag->save();
        if($tag->save()){
          $post->tags()->attach($tag);
        }
      }
    }


    $post->update($request->all());

    return redirect('/admin/blog-posts');
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {

    $post = Post::findOrFail($id);
    $post->delete();

    return redirect('/admin/blog-posts');
  }
}
