<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phanquyen extends Model
{
    //
	protected $table = 'phanquyen';
    protected $fillable = ['ten_pq'];
	protected $guarded = ['id'];
	protected $primaryKey = 'id';
	protected $dateFormat = 'Y-m-d H:i:s'; 

	public function usergroup(){
		return $this->hasMany('App\usergroup', 'pq_id', 'id');
	}

	public function users(){
		return $this->hasManyThrough('App\users', 'App\usergroup', 'pq_id','usergroup_id','id');
	}
}
