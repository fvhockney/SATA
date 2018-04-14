<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class AdminController extends Controller

{
  public function __construct()
  {
    $this->middleware('auth');
  }

  function show() {
    $todos = Todo::all();
    return view('admin.dashboard')->with('todos',$todos);
  }

  function tasks() {
    $todos = Todo::all();
    return view('admin.tasks')->with('todos',$todos);
  }
}
