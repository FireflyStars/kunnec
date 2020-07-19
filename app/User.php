<?php

namespace App;
use App\model\post;
use App\model\comment;
use App\model\profilephoto;
use Illuminate\Notifications\Notifiable;
use App\model\information;
use App\model\socialmedia;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\model\education;
use App\model\jobsdoc;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname','lname', 'email', 'password','country','state','city','dob','gender','plan', 'is_activated'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function friendsOfMine(){
        return $this->belongsToMany('App\user','friends','user_id','friend_id');
    }
    public function friendsOf(){
        return $this->belongsToMany('App\user','friends','friend_id','user_id');
    }
    // friends ...
    public function friends(){
        return $this->belongsToMany('App\user','friends','friend_id','user_id');
    }
    public function information(){
        //has one ..
        return $this->hasOne(information::class);
    } 
    /* -------------------------------------- */
    // relation with post ..
    public function post(){
        return $this->hasMany(post::class);
    }
    // relation with comment of user ..
    public function comment(){
        return $this->hasMany(comment::class);
    }
    // relation with likes //
    public function like(){
        return $this->hasMany(like::class);
    }
    public  function socialmedia(){
        // for th social media sites links ..
        return $this->hasOne(socialmedia::class);
    }
    // education ..
    public function education(){
        return $this->hasMany(education::class);
    }

    // albums relations ..
    public function album(){
        return $this->hasMany(album::class);
    }

    // profile image relation with user ..
    public function profilephoto(){
        return $this->hasMany(profilephoto::class);
    }
    // get age ..
    public function getAge(){
        return $this->dob->diffInYears(Carbon::now());
    }
    /* -------------------------------------- */
}
