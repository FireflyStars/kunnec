<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class friend extends Model {
    //
	protected $fillable = [
		'user_id', 'friend_id'
	];

}
