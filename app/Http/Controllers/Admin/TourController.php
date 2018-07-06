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
        $contacts = $request->contacts;
        $notes = $request->notes;

        array_map(array($this,'RemoveLocalIds',), $contacts);
        array_map(array($this,'RemoveLocalIds',), $notes);

        if ( ! Tour::where('name', '=', $tour[ 'name' ])->exists() ) {
            $tour = Tour::Create($tour);
        } else {
            return response()->json([ 'error' => 'This Tour Already Exists' ]);
        }

        if ( $request->filled('contacts') ) {
            foreach ( $contacts as $contact ) {
                $contact = collect($contact)->except([
                    'notes',
                ])->all();
                if ( null === $contact['id'] ) {
                    $contact = Contact::create($contact);
                }

                $tour->contact()->attach($contact[ 'id' ]);
            }
        }

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
        //
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
