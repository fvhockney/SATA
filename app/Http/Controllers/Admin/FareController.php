<?php

namespace App\Http\Controllers\Admin;

use App\Fare;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fare  $fare
     * @return \Illuminate\Http\Response
     */
    public function show(Fare $fare)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fare  $fare
     * @return \Illuminate\Http\Response
     */
    public function edit(Fare $fare)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fare  $fare
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fare $fare)
    {
        Fare::findOrFail($fare->id)->update($request->item);
        if ($request->wantsJson()){
            return response()->json($request->item);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fare $fare
     * @param Request    $request
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fare $fare, Request $request)
    {
        Fare::findOrFail($fare->id)->delete();
        if ($request->wantsJson()){
            return response()->json(["deleted fare"]);
        }
    }
}
