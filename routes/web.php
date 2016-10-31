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
    return view('secciones.portada');
});

Route::get('/campus', function () {
    return view('secciones.campus');
});

Route::get('/training', function () {
    return view('secciones.training');
});

Route::get('/nosotros', function () {
    return view('secciones.nosotros');
});
