<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Todo;

class AdminController extends Controller

{
  public function __construct()
  {
    $this->middleware('auth');
  }

  function show() {
    return view('layouts.adminLayout');
  }

}
