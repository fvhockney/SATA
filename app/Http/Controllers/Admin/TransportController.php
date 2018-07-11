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
        $notes = $request->notes;

        if ( ! Transport::where('name', '=', $transport[ 'name' ])->exists() ) {
            $transport = Transport::Create($transport);
        } else {
            return response()->json([ 'error' => 'This Transport Already Exists' ]);
        }

        $transport->addContactsToNewService($request);


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
        $transport->associateOrDissasociateContact($request);
        $request->action === 'add fare' ?
            $transport->fare()->create($request->item):
            null;
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
