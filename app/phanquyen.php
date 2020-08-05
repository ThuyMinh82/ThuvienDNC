<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phanquyen extends Model
{
    //
    protected $table = 'phanquyen';
    protected $fillable = ['ten_pq','usergroup_id'];
	protected $guarded = ['id'];
	protected $primaryKey = 'id';
	protected $dateFormat = 'Y-m-d H:i:s'; 

	public function group(){
		return $this->hasMany('App\usergroup', 'usergroup_id', 'id');
	}
}
