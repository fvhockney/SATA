@extends('layouts.pageLayout')

@section('description')

@endsection

@section('head-photo')
@endsection

@section('content')
  <div class="pt-5">
    <div class="row">
      <div class="col align-self-center">
        <h1 class="display-1 text-center">Historical Trip Through Israel</h1>
      </div>
      <div class="col-auto p-0" style=" background-color: mistyrose;">
        <img src="/imgs/camels.jpg" class="rounded mt-3 ml-3 mr-3" alt="" style="max-height:400px; width:auto;">
        <div class="d-flex justify-content-around align-items-center" style=" background-color: mistyrose; height: 100px;">
          <span><i class="fa-lg far fa-clock mr-1"></i>4 days/5 nights</span>
          <span><i class="fa-lg fas fa-map-marker-alt mr-1"></i>12 locations</span>
          <span><i class="fa-lg fas fa-dollar-sign mr-1"></i>from 4,500</span>
        </div>
      </div>
    </div>

    <div class="row mt-2">
      <div class="col-6">
        <div>
          <h3>Date 1</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div>
          <h3>Date 2</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div>
          <h3>Date 3</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>

      <div class="col-6 d-flex flex-column justify-content-around align-items-center">
        <figure class="figure">
          <img class="figure-img img-fluid rounded" src="https://placekitten.com/250/250" alt="">
          <figcaption class="figure-caption">A cute hotel.</figcaption>
        </figure>
        <figure class="figure">
          <img class="figure-img img-fluid rounded" src="https://placekitten.com/250/250" alt="">
          <figcaption class="figure-caption">Enjoy the beautiful view in Jaffa!</figcaption>
        </figure>
      </div>
    </div>


    <div class="row">
      <div class="col-6 d-flex justify-content-center align-items-center">
        <figure class="figure">
          <img class="figure-img img-fluid rounded" src="https://placekitten.com/450/500" alt="">
          <figcaption class="figure-caption text-right">Who wouldn't want to go here!</figcaption>
        </figure>
      </div>

      <div class="col-6">
        <div>
          <h3>Date 4</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div>
          <h3>Date 5</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div>
          <h3>Date 6</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </div>

  </div>
@endsection
