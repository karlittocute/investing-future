<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Course_04_11_2017 extends Model
{
    public function user()
	{
		return $this->hasOne('App\User', 'id', 'user_id');
	}
}
