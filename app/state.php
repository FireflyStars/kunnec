<?php

namespace App;
use country;
use city;
use Illuminate\Database\Eloquent\Model;

class state extends Model
{
    // 
    public function country(){

		return $this->belongsTo(country::class);
	
	}
	public function city(){

        return $this->hasMany(city::class);
    
    }
}
