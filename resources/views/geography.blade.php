@extends('layouts.pageLayout')

@section('title')
    'title'
@endsection

@section('description')
    'description'
@endsection

@section('content')
    Geography Content

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
@endsection
