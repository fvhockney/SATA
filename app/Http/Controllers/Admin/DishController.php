<?php

namespace App\Http\Controllers\Admin;

use App\Dish;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DishController extends Controller
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
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function show(Dish $dish)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function edit(Dish $dish)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dish $dish)
    {
            Dish::findOrFail($dish->id)->update($request->item);
            if ($request->wantsJson()){
                return response()->json($request->item);
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dish $dish
     * @param Request    $request
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dish $dish, Request $request)
    {
        Dish::findOrFail($dish->id)->delete();
        if ($request->wantsJson()){
            return response()->json(["deleted dish"]);
        }
    }
}
