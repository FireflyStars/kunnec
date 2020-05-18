<?php

namespace App\model\admin;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class admin extends Authenticatable
{
    //

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $fillable = [
        'name','fullname', 'email', 'password','country','state','city','dob','gender','plan', 'is_activated'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


}
