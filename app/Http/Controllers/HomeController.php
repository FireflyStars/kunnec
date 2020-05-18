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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    // kunnec sell ..
    public function sell(){
      return 'Asad';
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
