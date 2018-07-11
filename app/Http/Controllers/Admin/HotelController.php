<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use App\Hotel;
use App\Http\Controllers\Controller;
use App\Http\Resources\ServiceCollection;
use App\Http\Resources\ServiceProfile;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return ServiceCollection
     */
    public function index()
    {
        ServiceCollection::withoutWrapping();
        return new ServiceCollection(Hotel::all());
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
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request )
    {
        $hotel = $request->only([
            'name',
            'type',
        ]);
        $rooms = $request->rooms;
        $notes = $request->notes;

        if ( ! Hotel::where('name', '=', $hotel[ 'name' ])->exists() ) {
            $hotel = Hotel::create($hotel);
        } else {
            return response()->json([ 'error' => 'This Hotel Already Exists' ]);
        }

        $hotel->addContactsToNewService($request);

        if ( $request->filled('rooms') ) {
            foreach ( $rooms as $room ) {
                $hotel->room()->create($room);
            }
        }

        if ( $request->filled('notes') ) {
             $hotel->note()->createMany($notes);
        }
        if ( request()->wantsJson() ) {
            return new ServiceProfile($hotel);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hotel $hotel
     *
     * @return \Illuminate\Http\Response
     */
    public function show( Hotel $hotel )
    {
        ServiceProfile::withoutWrapping();

        return response(new ServiceProfile($hotel));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hotel $hotel
     *
     * @return \Illuminate\Http\Response
     */
    public function edit( Hotel $hotel )
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Hotel               $hotel
     *
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, Hotel $hotel )
    {
        $hotel->associateOrDissasociateContact($request);

        $request->action === 'add room' ?
            $hotel->room()->create($request->item):
            null;

        if ($request->wantsJson()){
            return response()->json($hotel->contact);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hotel $hotel
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy( Hotel $hotel )
    {
        //
    }
}
