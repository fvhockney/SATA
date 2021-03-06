<?php

namespace App\Http\Controllers;

class StaticController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function language()
    {
        return view('language');
    }

    public function history()
    {
        return view('history');
    }

    public function money()
    {
        return view('money');
    }

    public function safety()
    {
        return view('safety');
    }

    public function geography()
    {
        return view('geography');
    }

    public function weather()
    {
        return view('weather');
    }

    public function travelConsiderations()
    {
        return view('travelConsiderations');
    }

    public function services()
    {
        return view('services');
    }

    public function events()
    {
        return view('events');
    }

    public function info()
    {
        return view('info');
    }

    public function galleries(){
        return view('galleries');
    }

    public function sample_itinerary()
    {
        return view('trips.itinerary');
    }
}
