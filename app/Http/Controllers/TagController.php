<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use App\Tag;

class TagController extends Controller
{
    public function index(Tag $tag){

      $posts = $tag->posts()->paginate();


      return view('posts.index',compact('posts'));

    }
    // 
    // public function paginate($posts, $perPage = 5, $page = null, $options = [])
    // {
    //     $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
    //     $posts = $posts instanceof Collection ? $posts : Collection::make($posts);
    //     return new LengthAwarePaginator($posts->forPage($page, $perPage), $posts->count(), $perPage, $page, $options);
    // }
}
