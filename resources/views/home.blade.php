@extends('layouts.mainLayout')

@section('title')
    'Title'
@endsection

@section('description')
    'Description'
@endsection

@section('content')

    <div id="head-photo" class="mb-5">
        <h1 class="text-light text-center">Fernweh Israel</h1>
        <h5 class="text-light mt-5 text-center">Old world meet new adventure</h5>
        <a href="{{route('services')}}" class="btn btn-outline-light btn-lg mx-auto">Explore Trips</a>
        <div class="down-arrow"></div>
    </div>

    <div class="m-5 text-center">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci cum accusamus ut, assumenda quibusdam,
            voluptate eligendi, officiis nam nesciunt hic commodi modi consequatur voluptatibus corporis quo odit
            deserunt. Repellat, rerum.
        </p>
    </div>


    <h2 class="text-center">Featured Categories</h2>
    <div id="taste-of-trip" class="feature-trip">
        <h2 class="text-center text-light">Taste of Israel</h2>
        <button class="btn btn-lg btn-outline-light mx-auto">See More</button>
    </div>

    <div id="historical-trip" class="feature-trip">
        <h2 class="text-center text-light">Historical Trips</h2>
        <button class="btn btn-lg btn-outline-light mx-auto">See More</button>
    </div>

    <div id="religious-trip" class="feature-trip">
        <h2 class="text-center text-light">Religious Trips</h2>
        <button class="btn btn-lg btn-outline-light mx-auto">See More</button>
    </div>



    <script type="text/javascript">
    window.onload = function() {document.getElementById("main-nav").style.opacity= "0";}
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
    if (document.body.scrollTop > 250 || document.documentElement.scrollTop > 250) {
    document.getElementById("main-nav").style.opacity = "1";
    } else {
    document.getElementById("main-nav").style.opacity = "0";
    document.getElementById("main-nav").style.transition = "opacity 0.3s ease-out";

    }
    }
    </script>
@endsection
