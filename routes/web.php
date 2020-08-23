<?php

use Illuminate\Support\Facades\Route;

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

//customer route started
Route::get('/', 'Customer\HomeController@index')->name('home');
//end customer route
include('admin.php');


Auth::routes();
 
Route::get('/login', 'Auth\LoginController@showLoginForm');
Route::post('/login', 'Auth\LoginController@login');
Route::post('/register', 'Auth\LoginController@postRegister');
Route::any('logout', 'Auth\LoginController@logout');

Route::view('temp', 'temp');

Route::get('ajax/city', 'AjaxController@getCity')->name('getcity');


Route::group(['prefix' => 'admin'], function () {
	Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
	Route::post('/login', 'AdminAuth\LoginController@login');
	Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

	// Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
	// Route::post('/register', 'AdminAuth\RegisterController@register');

	Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
	Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
	Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
	Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');

	Route::get('logout', 'AdminAuth\LoginController@logout');
});
