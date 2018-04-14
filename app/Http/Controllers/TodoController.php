<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    return Todo::all();
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {

  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {

    $todo = new Todo;
    $todo->name = $request->newTodo;
    $todo->user = \Auth::user()->name;
    $todo->status = 'active';
    $todo->save();

    $newTodo = array((object)[
      'id' => $todo->id,
      'name' => $todo->name,
      'user' => $todo->user,
      'status' => $todo->status
      ]);

      return $newTodo;
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Todo  $todo
    * @return \Illuminate\Http\Response
    */
    public function show(Todo $todo)
    {
      //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Todo  $todo
    * @return \Illuminate\Http\Response
    */
    public function edit(Todo $todo)
    {
      //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Todo  $todo
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, Todo $todo)
    {
      if ($request->status == 'active'){
        $status = 'completed';
      } else {
        $status = 'active';
      }
      $updateBag = ["status" => $status, "completed_at" => now()];
      $todo->update($updateBag);

      return $updateBag;
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Todo  $todo
    * @return \Illuminate\Http\Response
    */
    public function destroy(Todo $todo)
    {
      //
    }
  }
