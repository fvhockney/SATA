@extends('layouts.pageLayout')

@section('title')
    Services
@endsection

@section('description')
    Services description
@endsection

@section('head-photo')
    <div id="services-head-photo" class="head-photo">
        <h1 class="text-center text-light">A Million Possibilities, One Special Place</h1>
    </div>
@endsection

@section('content')

    <div class="d-flex flex-wrap justify-content-around">
        <figure class="figure">
            <img src="/imgs/bahai_top.jpg" alt="Bahai Gardens from the Top" width="300px" height="auto">
            <figcaption><h3 class="text-center mt-2">Pre-Made Packages</h3></figcaption>
        </figure>
        <figure class="figure">
            <img src="/imgs/tlv_sunset.jpg" alt="Sunset overlooking park TLV" width="300px" height="auto">
            <figcaption><h3 class="text-center mt-2">Semi-Custom Packages</h3></figcaption>
        </figure>
        <figure class="figure">
            <img src="/imgs/masada_cable_car.jpg" alt="The Masada cable car" width="300px" height="auto">
            <figcaption><h3 class="text-center mt-2">Full Custom Packages</h3></figcaption>
        </figure>
    </div>

@endsection
