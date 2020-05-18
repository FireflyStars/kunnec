<?php

namespace App\model;
use app\User;
use Illuminate\Database\Eloquent\Model;

class album extends Model
{
    // relation of album with user ..
    public function user(){
       
       return $this->belongs(User::class);

    }
}
