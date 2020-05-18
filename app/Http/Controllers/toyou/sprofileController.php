<?php

namespace App\Http\Controllers\toyou;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
class sprofileController extends Controller
{
    // for profile ..
    public function profile($id){
    	$user = user::find($id);
    	return view('home.kunnectoyou.profile.profile',compact('user'));
    }
    // descripion ..
    public function des(){

    }
    // title ..
    public function title(){

    }
    //skills 
    public function skills(){

    }
    // certificate ..
    public function cerfification(){

    }
    // protfolio ...
    public function portfolio(){

    }
    // videoo ..
    public function education(){

    }
    // emp history ..
    public function emp(){

    }
    // other expeirence 
    public function exp(){

    }

}
