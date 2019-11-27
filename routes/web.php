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
Route::group(['middleware' => ['web']], function(){

    //Init route's
    Route::get('/', 'Auth\LoginController@index')->name('login');
    Route::post('auth', 'Auth\LoginController@authenticate');

    Route::get('registro', function(){
        return view('register');
    });
    
    //Here protetected route's
    Route::group(['middleware' => ['auth']], function () {
        Route::get('datos', function(){
            return view('input_data_dashboard');
        });
    });
});
