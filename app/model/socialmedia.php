<?php

namespace App\model;
use App\user;
use Illuminate\Database\Eloquent\Model;

class socialmedia extends Model
{
	// Social media links of user ..
	public function user(){
		// returning social ..
		return $this->belongsTo(User::class);
	}
}
