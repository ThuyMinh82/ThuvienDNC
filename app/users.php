<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\profileuser;
use App\users;
use Auth;
class users extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username','password','status','usergroup_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $table = 'users';
    protected $guarded = ['id'];
    protected $primaryKey = 'id';
    protected $dateFormat = 'Y-m-d H:i:s'; 

    public function usergroup(){
        return $this->belongsTo('App\usergroup', 'usergroup_id', 'id');
    }
    public function profileuser(){
        return $this->belongsTo('App\profileuser', 'users_id', 'id');
    }
    public function baiviet(){
        return $this->belongsTo('App\baiviet', 'bv_id', 'id');
    }
    public function hinhanh(){
        return $this->hasMany('App\hinhanh', 'hinhanh_id', 'id');
    }


  
}