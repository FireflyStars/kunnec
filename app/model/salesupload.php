<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\kunnecsell;
class salesupload extends Model
{
    //
    public function kunnecsell(){
    	return $this->belongsTo(kunnecsell::class);
    }

}
