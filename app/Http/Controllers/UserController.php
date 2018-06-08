<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\User;
use App\Mail\Welcome;
use Mail;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest')->only('create','store');
		$this->middleware('auth.user.access')->only('show');
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		return view('createuser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$this->validate(request(),[
			'email'=> 'required|email|unique:users',
			'password'=> 'required|confirmed|min:8',
			'phone'=>'required|digits_between:8,12',
			'surname'=>'required|string',
			'name'=>'required|string',
		]);
		
		$user = new User;
		$user->surname = $request->surname;
		$user->name = $request->name;
		$user->email = $request->email;
		$user->phone = $request->phone;
		$user->password = Hash::make($request->password);
		$user->remember_token = $request->remember_token;
		$user->save();
		
		//\Mail::to($user)->send(new Welcome);
		
		Auth::login($user);
		$id = Auth::user()->id;
		return redirect()->action('UserController@show', ['id' => $id]);
	}

    /**
     * Display the specified resource.
     *
     * @param  int  $resume_id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$user = User::find($id);
		return view('showuser', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $resume_id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}


