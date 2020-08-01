<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class users extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username','password','status','usergroup_id','profileuser_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $table = 'users';
    protected $guarded = ['id'];
    protected $primaryKey = 'id';
    protected $dateFormat = 'Y-m-d H:i:s'; 

    public function group(){
        return $this->belongTo('App\usergroup', 'usergroup_id', 'id');
    }
    public function profileuser(){
        return $this->belongTo('App\profileuser', 'profileuser_id', 'id');
    }


  
}
