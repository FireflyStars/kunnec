<?php

namespace App\Http\Controllers\like;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class likeController extends Controller {
    //
    public function like(){
    	return "like";
    }
    public function unlike(){
    	return "unlike";
    }
}
