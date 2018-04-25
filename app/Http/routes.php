<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('login');
});
Route::get('/admin', function () {
    return view('dashboard');
});
Route::get('/table', function () {
    return view('table');
});
Route::get('/profile', function () {
    return view('profile_detail');
});
Route::get('/edit_profile', function () {
    return view('edit_profile');
});
 Route::resource('sinhviens','sinhvienController');