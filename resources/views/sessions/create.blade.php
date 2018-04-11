@extends('layouts.pageLayout')

@section('title')
  Fernweh Israel Admin Login
@endsection

@section('description')
  If you are here and you aren't supposed to be, leave
@endsection

@section('content')
  <h1>Admin Login</h1>
  <p>
    Please input your credentials to log in to the administration area of the website. If you are not authorized and believe you should be, please contact the site administrator.
  </p>
  <p>
    If you have forgotten your password or email that were used to register you, please contact the site administrator.
  </p>
  <form class="container" action="login" method="POST">
    {{ csrf_field() }}
    <div class="form-row justify-content-center">
      <div class="form-group col-12 col-md-8 col-lg-6">
        <input class="form-control" type="text" name="email" id="email" placeholder="Email address" required>
      </div>
    </div>
    <div class="form-row justify-content-center">
      <div class="form-group col-12 col-md-8 col-lg-6">
        <input class="form-control" type="password" name="password" id="password" placeholder="Password" required>
      </div>
    </div>
    <div class="form-row justify-content-center">
      <div class="col-12 col-md-8 col-lg-6">
        <button class="btn btn-primary" type="submit">Submit</button>
      </div>
    </div>
  </form>
@endsection
