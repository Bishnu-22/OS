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

//Logout.............
Route::get('/logout','AdminController@logout');

Route::get('/', function () {
    return view('customer_login');
});

Route::get('/admin', function () {
    return view('admin.admin_login');
});

//admin login
Route::post('/adminlogin','AdminController@login_dashboard');
Route::get('/admin_dashboard','AdminController@admin_dashboard');
Route::get('/register','AdminController@register');




// customer order..............
Route::get('/customerorder','CustomerorderController@customerorder');
Route::post('/save_order','CustomerorderController@save_order');
Route::post('/update_profile','CustomerorderController@update_profile');

// all order...........
Route::get('/allorder','AllorederController@allorder');
Route::get('/customer_delete/{customer_id}','AllorederController@customerdelete');
Route::get('/orderview/{customer_id}','AllorederController@orderview');
Route::get('/order_edit/{customer_id}','AllorederController@order_edit');
Route::post('/update_order/{customer_id}','AllorederController@update_order');

