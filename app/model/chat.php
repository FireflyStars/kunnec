<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class chat extends Model
{
    //
    protected $fileable = ['user_id','friend_id','chat'];
}
