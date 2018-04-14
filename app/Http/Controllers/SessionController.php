<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SessionController extends Controller


{


  public function __construct(){

  $this->middleware('guest', ['except' => 'destroy']);

}


    public function create(){


      return view('sessions.create');

    }

    public function store(){
      if(! auth()->attempt(request(['email', 'password']))){
        return back()
        ->withErrors([
          'message' => 'Please check your credentials.'
        ]);
      }

      return redirect()->route('adminDashboard');

    }

    public function destroy(){

      auth()->logout();

      return redirect()->route('login');

    }
}
