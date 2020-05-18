<?php

namespace App\Http\Controllers;
use App\user;
use App\country;
use Illuminate\Http\Request;
use App\model\kunnecsell;
use App\state;
use App\city;
class HomeController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    //public function __construct() {
        
      //  $this->middleware('auth');

    //}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    // kunnec sell ..
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

    public function toyou(){
        // kunnec to  you..
        $country = country::all();
        return view('kunnec-to-you', compact('country'));
    }
    public function tome(){
        // kunnec to me..
        $country = country::all();
        return view('kunnec-to-me',compact('country'));
    }
    public function record(){
        return view('record');
    }
    public function contact(){
        return view('contact');
    }
    public function plans(){
        return view('plans');
    }
    public function about(){
        return view('about');
    }
    public function pricing(){
        return view('pricing');
    }
}
