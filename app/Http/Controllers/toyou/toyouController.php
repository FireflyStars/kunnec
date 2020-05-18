<?php

namespace App\Http\Controllers\toyou;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class toyouController extends Controller
{
    //
    public function index(){
    	return "kunnec to you";
    }
    
    // post services ..
    public function postservice(){
    	return view('home.kunnectoyou.post');
    }

    // services list ..

    public function services(){
    	return view('home.kunnectoyou.services');
    }

    // my services ..
    public function myservices(){
    	return view('home.kunnectoyou.myservices');
    }
}
