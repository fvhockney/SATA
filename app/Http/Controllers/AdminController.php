<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller

{
  public function __construct()
  {
    $this->middleware('auth');
  }

  function show() {
    return view('admin.dashboard');
  }
}
