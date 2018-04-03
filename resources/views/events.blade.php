@extends('layouts.pageLayout')

@section('title')
  'title'
@endsection

@section('decription')
  'description'
@endsection

@section('content')
  <div id="app">
    <example-component></example-component>
  </div>

  <script src="{{ mix('/js/app.js') }}"></script>
@endsection
