<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use \App\Seminar_14_10_2017;
use App\User;

class Seminar_14_10_2017Controller extends Controller
{
    public function __construct()
	{
		$this->middleware('auth.record:seminar_14_10_2017s')->only('create');
		$this->middleware('auth.access:seminar_14_10_2017s')->only('edit','update','pay');
	}

    public function index()
    {
		return view('seminar_14_10_2017');
    }


    public function store(Request $request)
    {
		auth()->user()->new_seminar_14_10_2017(
				new Seminar_14_10_2017()
		);
		$user_id = auth()->user()->id;
		$record_id = DB::table('seminar_14_10_2017s')->where('user_id', $user_id)->value('id');
		
		$id = auth()->user()->id;
		$user = User::find($id);
		return view('showuser', compact('user'));
	}


    public function edit($id) 
    {
       	$seminar = Seminar_14_10_2017::find($id);
        return view('seminar_14_10_2017_edit', compact('seminar'));
    }

    public function update(Request $request, $id)
    {
		$record =  Seminar_14_10_2017::find($id);
		$record->status = 2;
		$record->save();
		
		return redirect()->action('Seminar_14_10_2017Controller@pay', ['id' => $id]);
    }
	
	public function pay($id)
    {
       	$seminar = Seminar_14_10_2017::find($id);
        return view('seminar_14_10_2017_pay', compact('seminar'));
    }

}
