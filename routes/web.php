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
        
        Route::get('datos', 'DatosController@index')->name('datos');
        Route::post('datos', 'DatosController@guardar_cliente')->name('datos.guardar');
        Route::resource('cashflows', 'CashFlowsController');

        Route::get('/search','PostController@search');
        Route::delete('/deleteall','PostController@deleteAll');
        Route::get('/crud','CrudController@create')->name('ajax');
        Route::get('/post','PostController@index')->name('post');
        Route::resource('posts','PostController');
        Route::resource('cruds','CrudController');
        Auth::routes();
        
        //metodos distintos pueden tener la misma ruta
        Route::get('datos/editar/{id}', 'DashboardController@editar')->name('datos.editar');
        Route::put('datos/editar/{id}', 'DashboardController@update')->name('datos.update');
        Route::delete('datos/delete/{id}', 'DashboardController@delete')->name('datos.delete');

        Route::get('dashboard', 'DashboardController@index');
        Route::get('chart/{id}', 'DashboardController@chartData');
        Route::get('expenses/{id}', 'DashboardController@expensesChart');

        Route::get('historial', 'DashboardController@buscar_historial')->name('historial');

        Route::get('salir','Auth\LoginController@logout');

    });
});
