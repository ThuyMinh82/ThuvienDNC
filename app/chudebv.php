<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chudebv extends Model
{
    //
    protected $table = 'chudebv';
    protected $fillable = ['ten_cd','alias'];
	protected $guarded = ['id'];
	protected $primaryKey = 'id';
	protected $dateFormat = 'Y-m-d H:i:s'; 
	public function baiviet(){
		return $this->hasMany('App\baiviet', 'cd_id', 'id');
	}
}
