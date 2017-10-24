<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;

class RetrieveLocations extends Controller
{
    //
    public function retrieveCountry($country_id){
        $regions = Region::where('country_id',$country_id)->pluck('name','id');
        return view('createdistrict',compact('regions'));
    }
}
