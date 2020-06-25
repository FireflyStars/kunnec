<?php

namespace App\Http\Controllers\newlook;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class homecontroller extends Controller
{
    // mian ..
    public function main(){
    	//return "checking main route";
    	return view('newlook.main');

    }

    // home ..
    public function home(){
    	//return "checking home";
    	return view('newlook.home.home');
    }

    // my schedual  ..
    public function myschedual(){

        return view('newlook.schedual');

    }    

    // photo editor ..
    public function photoeditor (){

        return view('newlook.photoeditor.photoeditor');
    }
    
}





