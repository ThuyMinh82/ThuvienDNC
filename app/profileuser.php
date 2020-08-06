<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\users;

class profileuser extends Model
{
    //
    protected $table = 'profileuser';
    protected $fillable = ['name_prouser','email','address','sdt'];
	protected $guarded = ['id'];
	protected $primaryKey = 'id';
	protected $dateFormat = 'Y-m-d H:i:s'; 

	public function user(){
		return $this->belongsTo('App\users', 'profileuser_id', 'id');
	}
}
