<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MovieMember extends Model
{
    public function members(){
    	return $this->hasOne('App\Member','id','member_id');
    }
}
