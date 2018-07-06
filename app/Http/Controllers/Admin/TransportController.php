<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\ServiceCollection;
use App\Http\Resources\ServiceProfile;
use App\Transport;
use Illuminate\Http\Request;

class TransportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        ServiceCollection::withoutWrapping();
        return new ServiceCollection(Transport::all());
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
        $transport = $request->only([
            'name',
            'type',
        ]);
        $fares = $request->fares;
        $contacts = $request->contacts;
        $notes = $request->notes;

        array_map(array($this,'RemoveLocalIds',), $fares);
        array_map(array($this,'RemoveLocalIds',), $contacts);
        array_map(array($this,'RemoveLocalIds',), $notes);

        if ( ! Transport::where('name', '=', $transport[ 'name' ])->exists() ) {
            $transport = Transport::Create($transport);
        } else {
            return response()->json([ 'error' => 'This Transport Already Exists' ]);
        }

        if ( $request->filled('contacts') ) {
            foreach ( $contacts as $contact ) {
                $contact = collect($contact)->except([
                    'notes',
                ])->all();

                if ( null === $contact['id'] ) {
                    $contact = Contact::create($contact);
                }

                $transport->contact()->attach($contact[ 'id' ]);
            }
        }

        if ( $request->filled('fares') ) {
            foreach ( $fares as $fare ) {
                $transport->fare()->create($fare);
            }
        }

        if ( $request->filled('notes') ) {
            null;
             $transport->note()->createMany($notes);
        }

        if ( request()->wantsJson() ) {
            return new ServiceProfile($transport);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transport  $transport
     * @return \Illuminate\Http\Response
     */
    public function show(Transport $transport)
    {
        ServiceProfile::withoutWrapping();

        return response(new ServiceProfile($transport));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transport  $transport
     * @return \Illuminate\Http\Response
     */
    public function edit(Transport $transport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transport  $transport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transport $transport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transport  $transport
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transport $transport)
    {
        //
    }
}
