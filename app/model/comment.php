<?php

namespace App\model;
use App\user;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    // Its relations between user and comments ..
    public function user(){
    	return belongs(user::class);
    }
}
