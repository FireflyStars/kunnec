<?php

namespace App\Http\Controllers\newlook;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class homecontroller extends Controller
{
    // home 
    public function home(){
    	//return "checking";
    	return view('newlook.home.home');
    }
}
