<?php

namespace App\model;
use App\User;
use Illuminate\Database\Eloquent\Model;

class education extends Model
{
    //  user ..
	public function education(){
		// getting education form the required user ..
		return $this->belongsTo(User::class); // user ..
	}
}	
