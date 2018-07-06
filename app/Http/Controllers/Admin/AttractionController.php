<?php

namespace App\Http\Controllers\Admin;

use App\Attraction;
use App\Http\Controllers\Controller;
use App\Http\Resources\ServiceCollection;
use App\Http\Resources\ServiceProfile;
use Illuminate\Http\Request;

class AttractionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        ServiceCollection::withoutWrapping();
        return new ServiceCollection(Attraction::all());
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
        $attraction = $request->only([
            'name',
            'type',
        ]);
        $contacts = $request->contacts;
        $notes = $request->notes;

        array_map(array($this,'RemoveLocalIds',), $contacts);
        array_map(array($this,'RemoveLocalIds',), $notes);

        if ( ! Attraction::where('name', '=', $attraction[ 'name' ])->exists() ) {
            $attraction = Hotel::Create($attraction);
        } else {
            return response()->json([ 'error' => 'This Attraction Already Exists' ]);
        }

        if ( $request->filled('contacts') ) {
            foreach ( $contacts as $contact ) {
                $contact = collect($contact)->except([
                    'notes',
                ])->all();
                if ( $contact['id'] === null ) {
                    $contact = Contact::create($contact);
                }

                $attraction->contact()->attach($contact[ 'id' ]);
            }
        }

        if ( $request->filled('notes') ) {
            null;
             $attraction->note()->createMany($notes);
        }

        if ( request()->wantsJson() ) {
            return new ServiceProfile($attraction);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Attraction  $attraction
     * @return \Illuminate\Http\Response
     */
    public function show(Attraction $attraction)
    {
        ServiceProfile::withoutWrapping();

        return response(new ServiceProfile($attraction));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Attraction  $attraction
     * @return \Illuminate\Http\Response
     */
    public function edit(Attraction $attraction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Attraction  $attraction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attraction $attraction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attraction  $attraction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attraction $attraction)
    {
        //
    }
}
