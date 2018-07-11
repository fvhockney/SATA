<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
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
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        Room::findOrFail($room->id)->update($request->item);
        if ($request->wantsJson()){
            return response()->json($request->item);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Room $room
     * @param Request    $request
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room, Request $request)
    {
        Room::findOrFail($room->id)->delete();
        if ($request->wantsJson()){
            return response()->json(["deleted room"]);
        }
    }
}
