<?php

namespace App\Http\Controllers\guests;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\user;
use App\country;
use App\model\kunnecsell;
use App\state;
use App\model\tome;
use Carbon\Carbon; // for the calculation purpose ..
use App\city;
class homeController extends Controller
{
    //
    public function shop(){
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
        $code = $arr_ip['iso_code'];
        $country = country::where('iso',$code)->first();
        //$state = state::where('country_id',$country->id)->first();
        //$city  = city::where('state_id',$state->id)->get();
        //$country = country::all();
        $adds = kunnecsell::where('country',$country->id)->orderby('id','desc')->paginate(20);
        //return $arr_ip['city'];
        return view('shop',compact('adds','country'));
    }
    
    public function product($id){
        $sell = kunnecsell::find($id);
        return view('kunnecsell.product',compact('sell'));
    }

    public function gettoyou(){
        // kunnec to  you..
        $country = country::all();
        return view('kunnec-to-you', compact('country'));
    }
    public function gettomesingle($id){
        $tome = tome::find($id); // kunnec to me ...
        return view('guest.tome.single', compact('tome')); 
    }

    public function gettome(){
        // kunnec to me..
        $country = country::all(); // country ..
        $tomes = tome::orderby('id','desc')->get(); // kunnec to me ...
        return view('guest.tome.kunnec-to-me', compact('country','tomes'));
    }
    public function getrecord(){
        return view('record');
    }
    public function getcontact(){
        return view('contact');
    }
    public function getplans(){
        return view('plans');
    }
    public function getabout(){
        return view('about');
    }
    public function getpricing(){
        return view('pricing');
    }
}
