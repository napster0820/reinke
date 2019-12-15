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
    Route::get('ayuda', function() {
        return view('ayuda');
    });
    
    //Here protetected route's
    Route::group(['middleware' => ['auth']], function () {

        /*Route::get('datos', function(){
            return view('input_data_dashboard');
        })->name('datos');*/
        
        Route::get('datos', 'DatosController@index')->name('datos');
        Route::post('datos', 'DatosController@guardar')->name('datos.guardar');

        //metodos distintos pueden tener la misma ruta
        Route::get('datos/editar/{id}', 'DashboardController@editar')->name('datos.editar');
        Route::put('datos/editar/{id}', 'DashboardController@update')->name('datos.update');
        Route::delete('datos/delete/{id}', 'DashboardController@delete')->name('datos.delete');

        Route::get('dashboard', 'DashboardController@index');
        //Route::post('dashboard/{id}', 'DashboardController@index');

        Route::get('historial', 'DashboardController@buscar_historial')->name('historial');

        Route::get('salir','Auth\LoginController@logout');

    });
});
