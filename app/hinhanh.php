<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hinhanh extends Model
{
    //
    protected $table = 'hinhanh';
    protected $fillable = ['link_anh','bv_id'];
	protected $guarded = ['id'];
	protected $primaryKey = 'id';
	protected $dateFormat = 'Y-m-d H:i:s'; 

	public function bai(){
		return $this->hasMany('App\baiviet', 'bv_id', 'id');
	}

	
}
