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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();



//SUPERADMIN
Route::group(['middleware' => ['web', 'cekuser:1']],
	function (){
        Route::get('superadmin', 'HomeController@superAdmin')->name('superadmin');
    });
//ADMIN
Route::group(['middleware' => ['web', 'cekuser:2']],
	function (){
        Route::get('admin', 'HomeController@admin')->name('admin');
    });
//USER
Route::group(['middleware' => ['web', 'cekuser:3']],
	function (){
        Route::get('user', 'HomeController@user')->name('user');
    });
