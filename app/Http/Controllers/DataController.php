<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\State;
use App\City;

class DataController extends Controller
{
  public function get_states(Request $request) {
    $country_id = $request->input('country_id');
    $states = State::where('country_id', $country_id)->get();
    return $states;
  }

  public function get_cities(Request $request) {
    $state_id  = $request->input('state_id');
    $cities  = City::where('state_id', $state_id)->get();
    return $cities;
  }
  

}
