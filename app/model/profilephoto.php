<?php

namespace App\model;
use app\User;
use Illuminate\Database\Eloquent\Model;

class profilephoto extends Model
{
    public function user(){
    	// its realtion between user and profile picture ..
    	return $this->belongsTo(User::class);
    }
}
