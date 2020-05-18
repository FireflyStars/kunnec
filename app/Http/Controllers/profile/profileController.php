<?php

namespace App\Http\Controllers\profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class profileController extends Controller
{
    //
    public function profile(){
    	return view('profile.profile');
    }
}

