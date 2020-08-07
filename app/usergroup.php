<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usergroup extends Model
{
    protected $table = 'usergroup';
    protected $fillable = ['name_group','pq_id'];
    protected $guarded = ['id'];
    protected $primaryKey = 'id';
    protected $dateFormat = 'Y-m-d H:i:s'; 

    public function phanquyen(){
        return $this->belongsTo('App\phanquyen', 'pq_id', 'id');
    }
    public function users(){
        return $this->hasMany('App\users','usergroup_id', 'id');
    }
}
