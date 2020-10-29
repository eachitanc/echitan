<?php

use Illuminate\Support\Facades\Route;

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
    return view('principal');
});

Route::get('hotel/historia', function () {
    return view('hotel.historia');
});

Route::get('hotel/mision-vision', function () {
    return view('hotel.vision');
});

Route::get('hotel/ubicación', function () {
    return view('hotel.ubicación');
});

Route::get('servicios/habitaciones', function () {
    return view('servicios.habitaciones');
});

Route::get('servicios/eventos/{id}', function ($id) {
        return view('servicios.eventos',array('id'=>$id));
});

Route::get('reservas', function () {
    return view('reserva.reservas');
});

Route::get('contactos', function () {
    return view('contacto');
});

Route::get('servicios/eventos', function () {
    return view('servicios.eventosnull');
});