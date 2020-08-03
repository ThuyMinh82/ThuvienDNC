<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profileuser extends Model
{
    //
    protected $table = 'profileuser';
    protected $fillable = ['ten_pq','usergroup_id'];
	protected $guarded = ['id'];
	protected $primaryKey = 'id';
	protected $dateFormat = 'Y-m-d H:i:s'; 

	public function user(){
		return $this->belongsTo('App\users', 'profileuser_id', 'id');
	}
}
