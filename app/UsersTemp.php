<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersTemp extends Model
{
    protected $table="users_temp";

    public function users(){
    	return $this->belongsTo(App\Users::class,'user_id');
    }
    public function leads(){
    	return $this->hasMany(App\Leads::class,'user_code','user_code');
    }
}
