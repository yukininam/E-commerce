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
//route to Admin
Route::match(['get', 'post'], '/admin','AdminController@login');
//route to admin dashboard


Route::group(['middleware' => ['auth']], function () {
	Route::get('/admin/dashboard','AdminController@dashboard');		
	//Route::get('/admin/settings','AdminController@settings');
	//Route::get('/admin/check-pwd','AdminController@chkPassword');
	//Route::match(['get', 'post'],'/admin/update-pwd','AdminController@updatePassword');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
