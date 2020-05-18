<?php

namespace App;
use state;
use Illuminate\Database\Eloquent\Model;
use App\model\kunnecsell;
class city extends Model
{
    //
    public function state(){
		return $this->belongsTo(country::class);
	}

	public function kunnecsell(){
		return $this->belongsTo(kunnecsell::class);
	}
}
