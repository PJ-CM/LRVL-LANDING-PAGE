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
Route::get('/video', function () {
    return view('video');
});/*
¿¿¿Por qué la ruta /video no funciona y, solamente, funciona si la ruta es /videov o /video_xxx, etc???
Route::get('/video', function () {
    return view('video');
});
Route::get('/video', function () {
    return view('video');
})->name('video');*/

Route::get('/form/{accion?}', function ($accion = null) {
    return view('form')->with([
        'accion' => $accion,
    ]);
})->name('form');
Route::post('/form-recibido/{accion?}', function ($accion = null) {
    return view('form-recibido')->with([
        'accion' => $accion,
    ]);
})->name('form_recibido');

Route::get('/{accion?}', function ($accion = null) {
    return view('index')->with([
        'accion' => $accion,
    ]);
})->name('index');

Route::post('/insertar', 'MensajeController@insertar')
    ->name('mensajes_insertar');

Route::post('/iniciar-sesion', 'LoginController@iniciarSesion')
    ->name('iniciar_sesion');

Route::get('/panel/admin', function () {
    return view('panel.admin');
})->name('panel_admin');
Route::get('/panel/usuario', function () {
    return view('panel.usuario');
})->name('panel_usuario');
