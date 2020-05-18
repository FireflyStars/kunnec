<?php

namespace App\Http\Controllers\friendship;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\model\friendship;
use App\model\friend;
class friendshipController extends Controller
{
    // this method is for sending request ..
    public function send($id){

    	$user = Auth::id(); // current user id ..
    	$send = new friendship; //friendship ..
    	$send->receiver_id = $id; // receiver id ..
    	$send->sender_id   = $user; // sender id ..
    	$send->save(); // sending request ..
    	return $send->id; // returning new request id .. 
    }
    // this method is for cancle request ..
    public function cancle($id){

        // getting request according to id ..
        $req = friendship::where('id',$id)->first();
        $req->delete(); // delete query ..
        return "Request Cancle succesfully"; // return succesfull message ..

    }
    // this method for getting request ..
    public function accept($id){
     $req = friendship::where('id',$id)->first(); // first ..
     $reqid  = $req->id; // where ..
     $sender = $req->sender_id; // where ..
     $receiver = $req->receiver_id; // where ..
     $friend = new friend; // friends ..
     $friend->userid = $sender; // user one .. 
     $friend->friendid = $receiver; // user two ..
     $friend->status  = "friends"; // friends ..
     $friend->save(); // saving data into database ..
     $req->delete(); // deleting request ..
     return "friends";
     $req = friendship::where('id',$id)->delete(); // first ..
    }
    public function block($f){
        $friendid = $f;
        $cuser    = Auth::user()->id;
        $check    = friend::where('friendid',$friendid)->where('userid',$cuser)->orwhere('friendid',$cuser)->where('userid',$friendid)->first();
        $check->status = "block";
        $check->save();
        return "block";
    }
    public function unfriend($id){

        $friendid = $id;
        $cuser    = Auth::user()->id;
        $check    = friend::where('friendid',$friendid)->where('userid',$cuser)->orwhere('friendid',$cuser)->where('userid',$friendid)->first();
        $check->delete();
        return "unfriend";

    }
}
