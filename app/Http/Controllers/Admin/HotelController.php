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
        $contacts = $request->contacts;
        $notes = $request->notes;

        array_map(array($this,'RemoveLocalIds',), $rooms);
        array_map(array($this,'RemoveLocalIds',), $contacts);
        array_map(array($this,'RemoveLocalIds',), $notes);

        if ( ! Hotel::where('name', '=', $hotel[ 'name' ])->exists() ) {
            $hotel = Hotel::Create($hotel);
        } else {
            return response()->json([ 'error' => 'This Hotel Already Exists' ]);
        }

        if ( $request->filled('contacts') ) {
            foreach ( $contacts as $contact ) {
                $contact = collect($contact)->except([
                    'notes',
                ])->all();
                if ( $contact['id'] === null ) {
                    $contact = Contact::create($contact);
                }

                $hotel->contact()->attach($contact[ 'id' ]);
            }
        }

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
