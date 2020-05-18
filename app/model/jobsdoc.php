<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\tome;
class jobsdoc extends Model
{
    //
    public function tome(){
		// returning documents ..
		return $this->belongsTo(tome::class);
	}
}
