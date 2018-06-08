<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/place', function () {
    return view('place');
});

Route::resource('user','UserController');

//Route::resource('seminar_01_10_2017','Seminar_01_10_2017Controller');
//Route::resource('course_09_10_2017','Course_09_10_2017Controller');

//Route::resource('seminar_11_11_2017','Seminar_11_11_2017Controller');
//Route::resource('course_18_11_2017','Course_18_11_2017Controller');
Route::get('/login','SessionsController@create');
Route::post('/login','SessionsController@store');
Route::get('/logout','SessionsController@destroy');

//Route::get('/seminar_01_10_2017/{seminar_01_10_2017}/pay','Seminar_01_10_2017Controller@pay');
//Route::get('/course_09_10_2017/{course_09_10_2017}/pay','Course_09_10_2017Controller@pay');
//Route::get('/course_18_11_2017/{course_18_11_2017}/pay','Course_18_11_2017Controller@pay');