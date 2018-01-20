<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use App\Hotel;
use App\Restaraunt;

class DDController extends Controller
{
    public function index() {
      $stuff = Hotel::all();
      $response = collect(['price' => ['1'], 'type'=>'hotel', 'stars' => ['1', '2']]);
      $response = $response->all();

$i = 1;
foreach ($response as $k => $v) {
  if($i==1){
    $stuff = $stuff -> whereIn($k, $v);
  } elseif ($i == count($response)){
    $stuff = $stuff -> whereIn($k, $v);
  } else { echo 'Middle';
    $stuff = $stuff -> whereIn($k,$v);
  }
  $i++;
}


// $newStuff = Hotel::whereIn('stars', ['1','2','3','4','5'])
//                     ->whereIn('city', ['Omashire'])
//                     ->get();


// dd($newStuff);

      dd($stuff, $response);
      return view('diedump');
    }
}

/**
* Problem cases:
* Type (must run or statements if more than one selected)
* Stars (must run between statements)
* Price (must run between statements)
* City (must run or statements if more than one selected)
* Sub-Type (must run or statments if more than one selected)
**/

/**
* SELECT * FROM database
* WHERE
* type = value_1 OR type = value_2
* AND stars BETWEEN value_1 AND value_2
* AND  ....
* ....;
**/

/**
* DB::table('hotels')
* foreach ($a as $k => $v) {
* echo "->whereIn($k, $v)";
* }
* -> get();
*
*
*
* ->whereIn('$type', [value_1,value,2])
* ... more whereIn() statements ...
* ->get();
**/
