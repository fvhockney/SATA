<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <title>Document</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
  <nav id="nav-bar" class="sticky-top py-2">
    <ul class="nav nav-fill align-items-center">
      <li class="nav-item">
        <a href="#" class="nav-link active">Services</a>
      </li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Israel</a>
        <div class="dropdown-menu">
          <a href="#" class="dropdown-item">History</a>
          <a href="#" class="dropdown-item">Weather</a>
          <a href="#" class="dropdown-item">Money</a>
          <a href="#" class="dropdown-item">Language</a>
          <a href="#" class="dropdown-item">Geography</a>
          <a href="#" class="dropdown-item">Safety</a>
          <a href="#" class="dropdown-item">Travel Considerations</a>
        </div>
      </li>
      <li class="nav-item">
        <a href="#"><img src="http://via.placeholder.com/200x75" alt=""></a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">Blog</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">Contact Us</a>
      </li>
    </ul>
  </nav>

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

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  <script type="text/javascript">
  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
    if (document.body.scrollTop > 250 || document.documentElement.scrollTop > 250) {
      document.getElementById("nav-bar").style.opacity = "1";
    } else {
      document.getElementById("nav-bar").style.opacity = "0";
      document.getElementById("nav-bar").style.transition = "opacity 0.3s ease-out";

    }
  }
  </script>
</body>
</html>
