<?php

Route::get('/home', function () {
	$users[] = Auth::user();
	$users[] = Auth::guard()->user();
	$users[] = Auth::guard('admin')->user();

	return view('admin.home');
})->name('home');



Route::get('dashboard2', 'PagesController@index');

Route::namespace('Admin')->prefix('admin')->group(function () {
	Route::get('subscription', 'SubscriptionController@index')->name('admin-subscription');
	Route::get('subscription/create', 'SubscriptionController@create')->name('admin-subscription-create');
	Route::post('subscription/create', 'SubscriptionController@store')->name('admin-subscription-create');
});
