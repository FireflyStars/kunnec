<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\user;
class information extends Model
{
    //
    public function information(){
    	// information ..
    	return $this->belongsTo(user::class);
    }
}
