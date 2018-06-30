<?php

namespace App\Http\Controllers\Admin;

use App\Hotel;
use App\Http\Controllers\Controller;
use App\Http\Resources\HotelCollection;
use App\Http\Resources\Hotel as HotelResource;
use App\Http\Resources\HotelProfile;
use Illuminate\Http\Request;
use function MongoDB\BSON\toJSON;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return HotelCollection
     */
    public function index()
    {
        HotelCollection::withoutWrapping();
        return new HotelCollection(Hotel::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->input());
//        $hotel = Hotel::create($request->input());

        if (request()->wantsJson()){return $hotel;}
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        HotelProfile::withoutWrapping();
        return response(new HotelProfile($hotel));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotel $hotel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {
        //
    }
}
