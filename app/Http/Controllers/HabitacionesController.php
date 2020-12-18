<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HabitacionesController extends Controller
{
    //
    public function showHabitaciones(){
        $habitaciones = DB::table('habitacion')
                        ->join('precio','precio.id','=','habitacion.precio_id')
                        ->orderby('tipo','desc')
                        ->get(); 
        return view('servicios.habitaciones',['habitacion'=>$habitaciones]);
    }
}
