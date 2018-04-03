@extends('layouts.mainLayout')

@section('title')
  'Title'
@endsection

@section('description')
  'Description'
@endsection

@section('content')

  <div style="position:relative;" class="mb-5">
    <img id="head-photo" src="http://via.placeholder.com/1440x765" alt="">
    <div class="w-100 text-center" style="position:absolute;bottom:0;transform: translate(0,50%);">
      <a class="btn-lg btn-primary" href="#" role="button">Get Started Now</a>
    </div>
  </div>

  <div class="d-flex justify-content-around flex-wrap py-5 w-75 mx-auto">
    <div class="text-center">
      <img src="http://via.placeholder.com/85x85" alt="" class="rounded-circle">
      <p class="mt-1">Some Text</p>
    </div>
    <div class="text-center">
      <img src="http://via.placeholder.com/85x85" alt="" class="rounded-circle">
      <p class="mt-1">Some Text</p>
    </div>
    <div class="text-center">
      <img src="http://via.placeholder.com/85x85" alt="" class="rounded-circle">
      <p class="mt-1">Some Text</p>
    </div>
  </div>

  <div class="w-25 mx-auto py-5 text-center">
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci cum accusamus ut, assumenda quibusdam, voluptate eligendi, officiis nam nesciunt hic commodi modi consequatur voluptatibus corporis quo odit deserunt. Repellat, rerum.
    </p>
  </div>

  <div class="custom-grid-photo mx-auto py-5" style="width:85%;">
    <div class="w-100 rs-2 cs-3">
      <img src="http://via.placeholder.com/333x222" alt="" class="w-100" style="height:auto;">
    </div>
    <div class="w-100 rs-3 cs-3">
      <img src="http://via.placeholder.com/333x333" alt="" class="w-100" style="height:auto;">
    </div>
    <div class="w-100 rs-3 cs-3">
      <img src="https://placeholdit.co//i/333x333?bg=111111" alt="" class="w-100" style="height:auto;">
    </div>
    <div class="w-1 cs-3">
      <img src="http://via.placeholder.com/333x111" alt="" class="w-100" style="height:auto;">
    </div>

    <div class="w-100 cs-3 rs-3">
      <img src="https://placeholdit.co//i/333x333?bg=111111" alt="" class="w-100" style="height:auto;">
    </div>
    <div class="w-100 cs-3 rs-2">
      <img src="http://via.placeholder.com/333x222" alt="" class="w-100" style="height:auto;">
    </div>
    <div class="w-1 cs-3 rs-3">
      <img src="http://via.placeholder.com/333x333" alt="" class="w-100" style="height:auto;">
    </div>
    <div class="w-10 cs-3">
      <img src="http://via.placeholder.com/333x111" alt="" class="w-100" style="height:auto;">
    </div>
  </div>

  <div class="w-75 mx-auto">
    <div class="d-flex justify-content-start">
      <p class="w-25">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi facere vero unde recusandae optio, eligendi corrupti quae, officiis dolore eaque et adipisci, veritatis tempore ducimus, rem! Aperiam maiores asperiores nulla!
      </p>
    </div>
    <div class="d-flex justify-content-end">
      <p class="w-25">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi facere vero unde recusandae optio, eligendi corrupti quae, officiis dolore eaque et adipisci, veritatis tempore ducimus, rem! Aperiam maiores asperiores nulla!
      </p>
    </div>
  </div>

  <h3 class="text-center pt-5">Regions of Israel</h3>
  <div class="d-flex flex-row flex-wrap justify-content-around pb-5 mx-auto" style="width: 85%;">
    <div class="card w-25 m-2 img-fade">
      <img src="http://via.placeholder.com/222x333" alt="" class="card-img">
      <div class="img-fade-overlay">
        <button type="button" class="btn btn-outline-dark">Learn More</button>
      </div>
      <div class="card-img-overlay">
        <h5 class="card-title">North: Golan and Galile</h5>
      </div>
    </div>
    <div class="card w-25 m-2 img-fade">
      <img src="http://via.placeholder.com/222x333" alt="" class="card-img">
      <div class="img-fade-overlay">
        <button type="button" class="btn btn-outline-dark">Learn More</button>
      </div>
      <div class="card-img-overlay">
        <h5 class="card-title">Central: Coastal plains</h5>
      </div>
    </div>
    <div class="card w-25 m-2 img-fade">
      <img src="http://via.placeholder.com/222x333" alt="" class="card-img">
      <div class="img-fade-overlay">
        <button type="button" class="btn btn-outline-dark">Learn More</button>
      </div>
      <div class="card-img-overlay">
        <h5 class="card-title">Negev Desert</h5>
      </div>
    </div>
    <div class="card w-25 m-2 img-fade">
      <img src="http://via.placeholder.com/222x333" alt="" class="card-img">
      <div class="img-fade-overlay">
        <button type="button" class="btn btn-outline-dark">Learn More</button>
      </div>
      <div class="card-img-overlay">
        <h5 class="card-title">Dead Sea</h5>
      </div>
    </div>
    <div class="card w-25 m-2 img-fade">
      <img src="http://via.placeholder.com/222x333" alt="" class="card-img">
      <div class="img-fade-overlay">
        <button type="button" class="btn btn-outline-dark">Learn More</button>
      </div>
      <div class="card-img-overlay">
        <h5 class="card-title">The West Bank</h5>
      </div>
    </div>
    <div class="card w-25 m-2 img-fade">
      <img src="http://via.placeholder.com/222x333" alt="" class="card-img">
      <div class="img-fade-overlay">
        <button type="button" class="btn btn-outline-dark">Learn More</button>
      </div>
      <div class="card-img-overlay">
        <h5 class="card-title">Jerusalem</h5>
      </div>
    </div>
    <div class="card w-25 m-2 img-fade">
      <img src="http://via.placeholder.com/222x333" alt="" class="card-img">
      <div class="img-fade-overlay">
        <button type="button" class="btn btn-outline-dark">Learn More</button>
      </div>
      <div class="card-img-overlay">
        <h5 class="card-title">Tel Aviv</h5>
      </div>
    </div>
  </div>

  <h3 class="text-center pt-5">Meet The Team</h3>
  <div class="d-flex justify-content-center">
    <div class="text-center px-5">
      <img src="http://via.placeholder.com/250x250" alt="" class="rounded-circle">
      <p>Brian Spencer</p>
    </div>
    <div class="text-center px-5">
      <img src="http://via.placeholder.com/250x250" alt="" class="rounded-circle">
      <p>Vern Hockney</p>
    </div>
  </div>

  {{-- <script type="text/javascript">
  // window.onload = function() {document.getElementById("nav-bar").style.opacity= "0";}
  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
    if (document.body.scrollTop > 250 || document.documentElement.scrollTop > 250) {
      document.getElementById("nav-bar").style.opacity = "0";
    } else {
      document.getElementById("nav-bar").style.opacity = "0";
      document.getElementById("nav-bar").style.transition = "opacity 0.3s ease-out";

    }
  }
  </script> --}}
@endsection
