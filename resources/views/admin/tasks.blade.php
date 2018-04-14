@extends('layouts.adminLayout')

@section('title')
  Administration Tasks
@endsection

@section('description')
  If you aren't part of the team...Leave _ Seriously
@endsection

@section('content')
  <div id="todo">
    <h2>Todos</h2>
    <full-todo></full-todo>
  </div>

  <script src="{{ mix('/js/app.js') }}"></script>
@endsection
