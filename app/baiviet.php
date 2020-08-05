<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class baiviet extends Model
{
    //
    protected $table = 'baiviet';
    protected $fillable = ['ten_bv', 'mtngan_bv','noidung_bv','alias','status','cd_id','user_id'];
	protected $guarded = ['id'];
	protected $primaryKey = 'id';
	protected $dateFormat = 'Y-m-d H:i:s'; 

	public function chude(){
		return $this->belongsTo('App\chudebv', 'cd_id', 'id');
	}

	public function user(){
		return $this->belongsTo('App\users', 'user_id', 'id');
	}

	public function hinh(){
		return $this->hasMany('App\hinhanh', 'bv_id', 'id');
	}



}
