<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seminar_28_10_2017 extends Model
{
    public function user()
	{
		return $this->hasOne('App\User', 'id', 'user_id');
	}
}
