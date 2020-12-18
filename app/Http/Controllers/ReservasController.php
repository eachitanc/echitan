<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservasController extends Controller
{
    //
    public function getReservas(){
        return view('reserva.reservas');
    }
}
