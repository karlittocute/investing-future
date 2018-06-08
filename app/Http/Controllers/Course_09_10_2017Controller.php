<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Course_09_10_2017;

class Course_09_10_2017Controller extends Controller
{
    public function __construct()
	{
		$this->middleware('auth.record:course_09_10_2017s')->only('create');
		$this->middleware('auth.access:course_09_10_2017s')->only('edit','update','pay');
	}

    public function index()
    {
		return view('course_09_10_2017');
    }


    public function store(Request $request)
    {
		auth()->user()->new_course_09_10_2017(
				new Course_09_10_2017()
		);
		$user_id = auth()->user()->id;
		$record_id = DB::table('course_09_10_2017s')->where('user_id', $user_id)->value('id');
		return redirect()->action('Course_09_10_2017Controller@edit', ['id' => $record_id]);
	}


    public function edit($id) //pay
    {
       	$course = Course_09_10_2017::find($id);
        return view('course_09_10_2017_edit', compact('course'));
    }

    public function update(Request $request, $id)
    {
        $record =  Course_09_10_2017::find($id);
		$record->status = 2;
		$record->save();
		
		return redirect()->action('Course_09_10_2017Controller@pay', ['id' => $id]);
    }
	public function pay($id)
    {
       	$course = Course_09_10_2017::find($id);
        return view('course_09_10_2017_pay', compact('course'));
    }
}
