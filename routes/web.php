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

Route::get('/', 'BackendController@indexhome');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// Bill route here
Route::get('bill/all_bill', 'Admin\BillController@index');
Route::get('bill/add_bill', 'Admin\BillController@addBill');
Route::post('bill/store_bill', 'Admin\BillController@storeBill');
Route::get('bill/edit_bill/{id}', 'Admin\BillController@editBill');
Route::post('bill/update_bill/{id}', 'Admin\BillController@updateBill');
Route::get('bill/delete_bill/{id}', 'Admin\BillController@deleteBill');

// NextWork route here
Route::get('MyWork/all_MyWork', 'Admin\MyWorkController@index');
Route::get('MyWork/add_MyWork', 'Admin\MyWorkController@addMyWork');
Route::post('MyWork/store_MyWork', 'Admin\MyWorkController@storeMyWork');
Route::get('MyWork/edit_MyWork/{id}', 'Admin\MyWorkController@editMyWork');
Route::post('MyWork/update_MyWork/{id}', 'Admin\MyWorkController@updateMyWork');
Route::get('MyWork/delete_MyWork/{id}', 'Admin\MyWorkController@deleteMyWork');
