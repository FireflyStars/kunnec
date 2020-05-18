<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\jobsdoc;
class tome extends Model
{
    //
      // job documentations ..
    public function jobsdoc(){
        return $this->hasOne(jobsdoc::class);
    }
}
