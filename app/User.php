<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Fountadion\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
	protected $guarded = ['id','created_at','updated_at','_token'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	
	
		
	public function seminar_11_11_2017()
		{
			return $this->hasOne(Seminar_11_11_2017::class);
		}
	public function new_seminar_11_11_2017(Seminar_11_11_2017 $seminar_11_11_2017)
	{
		$this->seminar_11_11_2017()->save($seminar_11_11_2017);
	}	
		
	public function course_18_11_2017()
		{
			return $this->hasOne(Course_18_11_2017::class);
		} 
	
	public function new_course_18_11_2017(Course_18_11_2017 $course_18_11_2017)
	{
		$this->course_18_11_2017()->save($course_18_11_2017);
	}
	
	
	/*
	public function seminar_01_10_2017()
		{
			return $this->hasOne(Seminar_01_10_2017::class);
		}
		
	public function course_09_10_2017()
		{
			return $this->hasOne(Course_09_10_2017::class);
		}
	public function new_seminar_01_10_2017(Seminar_01_10_2017 $seminar_01_10_2017)
	{
		$this->seminar_01_10_2017()->save($seminar_01_10_2017);
	}
	
	public function new_course_09_10_2017(Course_09_10_2017 $course_09_10_2017)
	{
		$this->course_09_10_2017()->save($course_09_10_2017);
	}
	*/
}
