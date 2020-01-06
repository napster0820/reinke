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
        Route::resource('financeflows', 'FinanceFlowsController');
        
        
        //
        //Route::get('cashflows/{id}', 'CashFlowsController@store');
        //Route::get('cashflows/editar/{id}', 'CashFlowsController@editar')->name('cashflows.editar');
        //Route::post('cashflows/update', 'CashFlowsController@update')->name('cashflows.update');

        // Route::get('/search','PostController@search');
        // Route::delete('/deleteall','PostController@deleteAll');
        // Route::get('/crud','CrudController@create')->name('ajax');
        // Route::get('/post','PostController@index')->name('post');
        // Route::resource('posts','PostController');
        // Route::resource('cruds','CrudController');
        Auth::routes();
        
        //metodos distintos pueden tener la misma ruta
        Route::get('datos/editar/{id}', 'DashboardController@editar')->name('datos.editar')->where('id', '[0-9]+');
        Route::put('datos/editar/{id}', 'DashboardController@update')->name('datos.update')->where('id', '[0-9]+');
        Route::delete('datos/delete/{id}', 'DashboardController@delete')->name('datos.delete')->where('id', '[0-9]+');

        Route::get('dashboard/{id}', 'DashboardController@index')->where('id', '[0-9]+');
        Route::get('chart/{id}', 'DashboardController@chartData')->where('id', '[0-9]+');
        Route::get('expenses/{id}', 'DashboardController@expensesChart')->where('id', '[0-9]+');

        Route::get('historial', 'DashboardController@buscar_historial')->name('historial');

        Route::get('salir','Auth\LoginController@logout');

    });
});
