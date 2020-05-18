<?php

namespace App\Http\Controllers\sell;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\user;
use App\country;
use App\model\kunnecsell;
use App\state;
use App\city;


class sellcontroller extends Controller
{
    //
    public function sell(){
    	//return 'check';
   		// $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
        //$code = $arr_ip['iso_code'];
         $code = 166;
         $country = country::where('id',$code)->first();
        //$state = state::where('country_id',$country->id)->first();
        //$city  = city::where('state_id',$state->id)->get();
        //return $arr_ip['city'];
    	$adds = kunnecsell::where('country',$country->id)->orderby('id','desc')->paginate(20);
    	return view('shop',compact('adds','country')); 
    }
}
