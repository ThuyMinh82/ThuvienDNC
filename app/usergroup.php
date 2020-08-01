<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usergroup extends Model
{
    //
    protected $table = 'profileuser';
    protected $fillable = ['name_group',];
	protected $guarded = ['id'];
	protected $primaryKey = 'id';
	protected $dateFormat = 'Y-m-d H:i:s'; 

	
}
