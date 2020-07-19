<?php

namespace App\Http\Controllers\newlook\toyou;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class toyoucontroller extends Controller
{
    //
    public function profile($id){

    	return view('newlook.kunnec.kunnectoyou.profile.profile');
    }
    // create ..
    public function create(){
    	return view('newlook.kunnec.kunnectoyou.profile.create');
    }
}
