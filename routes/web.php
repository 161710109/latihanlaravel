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

Route::get('/com', function () {
    return view('welcome');
});

Route::get('user/{menu}/{minum}/{ngemil}',function($b,$a,$e){
	return 'Saya Makan <b>'.$b.'</b><br> Saya Minum <b>'.$a.'</b></br> Saya Ngemil <b>'.$e.'</b>';
});

Route::get('/option/{nama?}',function($a="<center> WHY SO SERIOUS ? </center>"){
	return $a;
});