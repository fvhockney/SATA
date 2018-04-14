<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{

  public function index(){

    $posts = Post::
    orderBy('created_at', 'desc')
    ->orderBy('id', 'desc')
    ->filter(request(['month', 'year']))
    ->paginate(5);


    return view('posts.index', compact('posts'));

  }



  static public function show(Post $post){

    $previous = Post::where('id', '<' , $post->id)->get()->sortBy('id')->last();

    $next = Post::where('id', '>' , $post->id)->get()->sortBy('id')->first();

    return view('posts.show', compact('post'))->with('previous', $previous)->with('next', $next);

  }


}
