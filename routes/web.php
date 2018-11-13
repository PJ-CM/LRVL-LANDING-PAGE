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
/*
Route::get('/welcome/{accion?}', function ($accion = null) {
    return view('welcome')->with([
        'accion' => $accion,
    ]);
})->name('welcome');*/

Route::get('/{accion?}', function ($accion = null) {
    return view('index')->with([
        'accion' => $accion,
    ]);
})->name('index');

Route::post('/insertar', 'MensajeController@insertar')
    ->name('mensajes_insertar');
