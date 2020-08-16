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
	Route::get('subscription/edit/{id}', 'SubscriptionController@edit')->name('admin-subscription-edit');
	Route::post('subscription/edit/{id}', 'SubscriptionController@update')->name('admin-subscription-update');
	Route::get('subscription/delete/{id}', 'SubscriptionController@destroy')->name('admin-subscription-delete');
	// category
	Route::get('category', 'CategoryController@index')->name('admin-category-index');
	Route::get('category/create', 'CategoryController@create')->name('admin-category-create');
	Route::post('category/create', 'CategoryController@store')->name('admin-category-create');
	Route::get('category/edit/{id}', 'CategoryController@edit')->name('admin-category-edit');
	Route::post('category/edit/{id}', 'CategoryController@update')->name('admin-category-update');
	Route::get('category/delete/{id}', 'CategoryController@destroy')->name('admin-category-delete');
	// subcategoty
	Route::get('subcategory', 'SubCategoryController@index')->name('admin-subcategory-index');
	Route::get('subcategory/create', 'SubCategoryController@create')->name('admin-subcategory-create');
	Route::post('subcategory/create', 'SubCategoryController@store')->name('admin-subcategory-create');
	Route::get('subcategory/edit/{id}', 'SubCategoryController@edit')->name('admin-subcategory-edit');
	Route::post('subcategory/edit/{id}', 'SubCategoryController@update')->name('admin-subcategory-update');
	Route::get('subcategory/delete/{id}', 'SubCategoryController@destroy')->name('admin-subcategory-delete');

	Route::get('customer', 'CustomerController@index')->name('admin.customer.index');
	Route::get('customer/create', 'CustomerController@create')->name('admin.customer.create');
	Route::post('customer/create', 'CustomerController@store')->name('admin.customer.store'); 
	Route::get('customer/edit/{id}', 'CustomerController@edit')->name('admin.customer.edit'); 
	Route::post('customer/update/{id}', 'CustomerController@update')->name('admin.customer.update'); 
	Route::delete('customer/delete/{id}', 'CustomerController@destroy')->name('admin.customer.delete'); 

	Route::get('subadmin', 'SubAdminController@index')->name('admin.subadmin.index');
	Route::get('subadmin/create', 'SubAdminController@create')->name('admin.subadmin.create');
	Route::post('subadmin/create', 'SubAdminController@store')->name('admin.subadmin.store'); 
	Route::get('subadmin/edit/{id}', 'SubAdminController@edit')->name('admin.subadmin.edit'); 
	Route::post('subadmin/update/{id}', 'SubAdminController@update')->name('admin.subadmin.update'); 
	Route::delete('subadmin/delete/{id}', 'SubAdminController@destroy')->name('admin.subadmin.delete'); 

	// product start 
	Route::get('product', 'ProductController@index')->name('admin-product-index');
	Route::get('product/create', 'ProductController@create')->name('admin-product-create');
	Route::post('product/store', 'ProductController@store')->name('admin-product-store');

});
