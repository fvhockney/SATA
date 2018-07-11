<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\ServiceCollection;
use App\Http\Resources\ServiceProfile;
use App\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        ServiceCollection::withoutWrapping();

        return new ServiceCollection(Restaurant::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request)
    {
        $restaurant = $request->only([
            'name',
            'type',
        ]);
        $dishes = $request->dishes;
        $notes = $request->notes;

        if (!Restaurant::where('name', '=', $restaurant['name'])->exists()) {
            $restaurant = Restaurant::Create($restaurant);
        } else {
            return response()->json(['error' => 'This Restaurant Already Exists']);
        }

        $restaurant->addContactsToNewService($request);


        if ($request->filled('dishes')) {
            foreach ($dishes as $dish) {
                $restaurant->dish()->create($dish);
            }
        }

        if ($request->filled('notes')) {
             $restaurant->note()->createMany($notes);
        }

        if (request()->wantsJson()) {
            return new ServiceProfile($restaurant);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Restaurant $restaurant
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {
        ServiceProfile::withoutWrapping();

        return response(new ServiceProfile($restaurant));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Restaurant $restaurant
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Restaurant          $restaurant
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaurant $restaurant)
    {
        $restaurant->associateOrDissasociateContact($request);
        $request->action === 'add dish' ?
            $restaurant->dish()->create($request->item):
            null;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Restaurant $restaurant
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant)
    {
    }
}
