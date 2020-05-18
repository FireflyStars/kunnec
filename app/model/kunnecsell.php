<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\salesupload;
use App\city;
use App\country;
use App\model\category;
class kunnecsell extends Model
{
    //
    public function salesupload(){

    	return $this->hasMany(salesupload::class);
    }
    public function city(){

    	return $this->hasOne(city::class);
    }
    
    public function category(){

    	return $this->belongsTo(category::class);
    }

}
