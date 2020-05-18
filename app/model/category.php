<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\kunnecsell;
class category extends Model
{
    // adds ..
    public function adds(){
    	return $this->hasMany(kunnecsell::class);
    }

}
