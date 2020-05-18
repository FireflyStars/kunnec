<?php

namespace App;
use state;
use city;
use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    // state ..
    public function state(){
        return $this->hasMany(state::class);
    }
    // country ..
}
