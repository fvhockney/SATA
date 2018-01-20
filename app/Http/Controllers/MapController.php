<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use App\Hotel;
use App\Restaraunt;


class MapController extends Controller

{
  public function index(){

    $hotels = Hotel::all();
    $restaraunts = Restaraunt::all();
    $combined = $hotels->merge($restaraunts);
    $json = $combined->toArray();

    return view('jsontrial', ["json"=>$json]);
  }

  public function filterjson(Request $request){

    $input = $request->all();
    $stuff = Hotel::all();
    $i = 1;
    foreach ($input as $k => $v) {
      if($i==1){
        $stuff = $stuff -> whereIn($k, $v);
      } elseif ($i == count($input)){
        $stuff = $stuff -> whereIn($k, $v);
      } else {
        $stuff = $stuff -> whereIn($k,$v);
      }
      $i++;
    }

    return $stuff;
  }
}
