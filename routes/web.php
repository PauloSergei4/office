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

Route::get('/send', 'SendController@send');
Route::get('/mqtt', 'MqttController@index');
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout');


//admin

Route::group(['prefix'=>'admin','namespace'=>'Admin', 'middleware'=>'admin'], function(){
    Route::resource('/users', 'UsersController');
    Route::resource('/panels', 'PanelsController');


    
});

Route::group(['prefix'=>'admin','namespace'=>'Admin'], function(){

    Route::get('/', 'DashboardController@Index');




});
