<?php

namespace App\Http\Controllers\chat;

use Illuminate\Http\Request;
use App\Events\ChatEvent;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
class chatController extends Controller
{
    //
    public function chat(){
    	// $friends = Auth::user()->friends;
      	//return $friends;
        return view('home.messages'); // kunnecs ..
    }
    public function send() {
    	
    	$message = 'Hellow';
    	$user = User::find(Auth::id());
    	//$this->saveToSession($request);
    	event(new ChatEvent($message,$user));
	}
}
