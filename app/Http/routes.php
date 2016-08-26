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

// middleware default ke login
Route::group(['middleware'=>'web'],function(){
	Route::auth();
});
Route::get('/', function () {
    return view('welcome');
});

// hanya yang bisa login
Route::group(['middleware'=>['web','auth']],function(){
	Route::get('/home', 'HomeController@index');
	Route::get('/',function(){
		if (Auth::user()->admin ==2) {
			return view('admin/admin');
		}else if (Auth::user()->admin ==1){
			return view('user/user');
		}else if (Auth::user()->admin ==0){
			return view('supervisor/supervisor');
		}
	});
});

// hanya admin
Route::get('admin',['middleware'=>['web','auth','admin'],function(){
	return view('admin');
Route::get('/admin','dashboardController@index');
Route::get('/', function () {
    return view('content.daftarUser');
});
}]);