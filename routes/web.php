<?php

Route::group(['middleware' => ['web']], function(){

    //Init route's
    Route::get('/', 'Auth\LoginController@index')->name('login');
    Route::post('auth', 'Auth\LoginController@authenticate');
    Route::get('registro', 'Auth\RegisterController@index');
    Route::post('registro', 'Auth\RegisterController@create');
    Route::get('politica', function() {
        return view('politica');
    });
    
    //Here protetected route's
    Route::group(['middleware' => ['auth']], function () {

        Route::get('datos', function(){
            return view('input_data_dashboard');
        })->name('datos');

        Route::get('dashboard', 'DashboardController@index');

        Route::get('historial', function(){
            return view('history');
        });

        Route::get('salir','Auth\LoginController@logout');

    });
});
