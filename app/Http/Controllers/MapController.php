<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;
use App\Restaurant;

class MapController extends Controller
{
    public function index()
    {
        $hotels = Hotel::all();
        $restaraunts = Restaurant::all();
        $combined = $hotels->merge($restaraunts);
        $json = $combined->toArray();

        return view('jsontrial', ['json' => $json]);
    }

    public function filterjson(Request $request)
    {
        $input = $request->all();
        $stuff = Hotel::all();
        $i = 1;
        foreach ($input as $k => $v) {
            if (1 == $i) {
                $stuff = $stuff->whereIn($k, $v);
            } elseif ($i == count($input)) {
                $stuff = $stuff->whereIn($k, $v);
            } else {
                $stuff = $stuff->whereIn($k, $v);
            }
            ++$i;
        }

        return $stuff;
    }
}
