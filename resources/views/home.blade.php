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
        <button class="btn btn-outline-light btn-lg mx-auto">Explore Trips</button>
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

    {{--<script type="text/javascript">--}}
    {{--// window.onload = function() {document.getElementById("nav-bar").style.opacity= "0";}--}}
    {{--window.onscroll = function() {scrollFunction()};--}}

    {{--function scrollFunction() {--}}
    {{--if (document.body.scrollTop > 250 || document.documentElement.scrollTop > 250) {--}}
    {{--document.getElementById("nav-bar").style.opacity = "0";--}}
    {{--} else {--}}
    {{--document.getElementById("nav-bar").style.opacity = "0";--}}
    {{--document.getElementById("nav-bar").style.transition = "opacity 0.3s ease-out";--}}

    {{--}--}}
    {{--}--}}
    {{--</script>--}}
@endsection
