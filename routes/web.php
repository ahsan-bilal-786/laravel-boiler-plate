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
	return redirect()->guest(route('login'));
});
// Route::get('login', 'UserController@login')->name('login');


Route::auth();

Route::group(['middleware' => ['auth']], function() {

	Route::get('/home', 'HomeController@index')->name('dashboard');

	Route::resource('users','UserController');
	Route::resource('posts','Post\PostController');
	
	
	Route::get('general_settings', 'Settings\SettingsController@edit')->name('generalSettings');
	Route::post('general_settings', 'Settings\SettingsController@update')->name('updateSettings');
	
	Route::get('user/account_settings', 'Staff\StaffController@accountSettings')->name('staffAccountSettings');
	Route::put('user/account_settings', 'Staff\StaffController@updateAccountSettings')->name('staffUpdateAccountSettings');
	
});