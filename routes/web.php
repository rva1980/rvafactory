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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', 'InicioController@show');
Route::get('/inicio/{color?}', 'InicioController@show');
Route::get('/portfolio/{color?}', 'PortfolioController@show');
Route::get('/curriculum/{color?}', 'CurriculumController@show');
Route::get('/contacto/{color?}', 'ContactoController@show');
Route::post('/contacto/{color?}', 'ContactoController@enviarFormulario');

Route::get('/enviarPrueba', function () {
    $data = array(
        'name' =>"Prueba",
    );
    Mail::send('email', $data, function($mensaje) {
        $mensaje->from('ruben@rvafactory.com', 'www.rvafactory.com');

        $mensaje->to('ruben@rvafactory.com')->subject('EMAIL DE PRUEBA');
    });
    return "Email enviado correctamente";
});

