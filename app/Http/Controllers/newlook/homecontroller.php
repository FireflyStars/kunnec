<?php

namespace App\Http\Controllers\newlook;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class homecontroller extends Controller
{
    public function main(){
    	//return "checking main route";
    	return view('newlook.main');

    }

    // home 
    public function home(){
    	//return "checking home";
    	return view('newlook.home.home');
    }
}
