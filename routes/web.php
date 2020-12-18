<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\HabitacionesController;
use App\Http\Controllers\ReservasController;
use App\Http\Controllers\FacturacionController;


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

Route::get('/', [HotelController::class, 'getIndex']);

Route::get('hotel/historia', [HotelController::class, 'showHistoria']);

Route::get('hotel/mision-vision', [HotelController::class, 'showMision']);

Route::get('hotel/ubicación', [HotelController::class, 'showUbicacion']);


Route::get('servicios/habitaciones', [HabitacionesController::class, 'showHabitaciones']);

Route::get('clientes/visualizar', [ClientesController::class, 'showClientes']);

Route::get('facturacion', [FacturacionController::class, 'getFactura']);

Route::get('servicios/eventos/{id}', function ($id) {
    return view('servicios.eventos',array('id'=>$id));
});

Route::get('reservas', [ReservasController::class, 'getReservas']);

Route::get('consultas', [HotelController::class, 'getConsultas']);
Route::get('consultasOcupadas', [HotelController::class, 'getConsultasOcupada']);
Route::get('consultasHabitaciones', [HotelController::class, 'getConsultaHab']);

Route::get('contáctenos', [HotelController::class, 'showContactos']);

Route::get('servicios/eventos', function () {
    return view('servicios.eventosnull');
});
