<?php

namespace App\model;
use App\User;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    // post relation with user ..
    public function user(){
			return $this->belongsTo(User::class);
	}
}
