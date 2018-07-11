<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\ServiceCollection;
use App\Http\Resources\ServiceProfile;
use App\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        ServiceCollection::withoutWrapping();
        return new ServiceCollection(Tour::all());
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
        $tour = $request->only([
            'name',
            'type',
        ]);
        $notes = $request->notes;

        if ( ! Tour::where('name', '=', $tour[ 'name' ])->exists() ) {
            $tour = Tour::Create($tour);
        } else {
            return response()->json([ 'error' => 'This Tour Already Exists' ]);
        }

        $tour->addContactsToNewService($request);


        if ( $request->filled('notes') ) {
            null;
             $tour->note()->createMany($notes);
        }

        if ( request()->wantsJson() ) {
            return new ServiceProfile($tour);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function show(Tour $tour)
    {
        ServiceProfile::withoutWrapping();

        return response(new ServiceProfile($tour));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function edit(Tour $tour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tour $tour)
    {
        $tour->associateOrDissasociateContact($request);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tour $tour)
    {
        //
    }
}
