<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use App\Hotel;
use App\Http\Controllers\Controller;
use App\Http\Resources\HotelCollection;
use App\Http\Resources\Hotel as HotelResource;
use App\Http\Resources\HotelProfile;
use App\Room;
use function Clue\StreamFilter\fun;
use Illuminate\Http\Request;

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
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request )
    {
        $hotel = $request->only(['name', 'type']);
        $rooms = $request->rooms;
        $contacts = $request->contacts;

        array_map(array($this, 'RemoveLocalIds'),$rooms);
        array_map(array($this, 'RemoveLocalIds'), $contacts);

        if (! Hotel::where('name', '=', $hotel['name'])->exists()){
            $hotel = Hotel::Create($hotel);
        } else {
            return response()->json(['error' => 'This Hotel Already Exists']);
        }

        if ( $request->filled('contacts') ) {
            foreach ( $contacts as $contact ) {
                $contact = collect($contact)->except([
                    'notes',
                ])->all();
                if (! array_key_exists('id', $contact)){
                    $contact = Contact::create($contact);
                }

                $hotel->contact()->attach($contact['id']);
            }
        }

        if ( $request->filled('rooms') ) {
            foreach ( $rooms as $room ) {
                $hotel->room()->create($room);
            }
        }

        if ( request()->wantsJson() ) {
            return new HotelProfile($hotel);
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
        HotelProfile::withoutWrapping();

        return response(new HotelProfile($hotel));
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
        //
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
