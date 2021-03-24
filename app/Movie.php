<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function movie_member(){
    	return $this->HasMany('App\MovieMember','movie_id','id');
    }
}
