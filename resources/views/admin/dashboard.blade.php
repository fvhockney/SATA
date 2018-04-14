@extends('layouts.adminLayout')

@section('title')
  Administration Dashboard
@endsection

@section('description')
  If you aren't part of the team...Leave
@endsection

@section('content')
  <h1>Admin Stuff</h1>

  <div id="quick-todo" class='container'>
    <div class="row">
      <div class="col">
        More Stuff
      </div>
      <div class="col-4">
        <quick-todo></quick-todo>
      </div>
    </div>
  </div>

  <script src="{{ mix('/js/app.js') }}"></script>
@endsection
