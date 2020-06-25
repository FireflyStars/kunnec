<?php

namespace App\Http\Controllers\newlook\social\events;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class eventscontroller extends Controller
{
    // your events 
    public function yourevents(){

    	return view('newlook.social.events.yourevents');
    }           
    
    // create events 
    public function create(){

    	return view('newlook.social.events.createvents');

    }
    
    // list of invite events 
    public function invites(){

    	return view('newlook.social.events.listevents');

    }
    
    // single event ..
    public function single($id){

        return view('newlook.social.events.details');
    
    }

}