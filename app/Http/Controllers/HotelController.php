<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HotelController extends Controller
{
    //
    public function getIndex(){
        return view('principal');
    }

    public function showHistoria(){
        return view('hotel.historia');
    }

    public function showMision(){
        return view('hotel.vision');
    }

    public function showUbicacion(){
        return view('hotel.ubicación');
    }

    public function showContactos(){
        return view('contacto');
    }

    public function getConsultas(){
        return view('consultas');
    }
    
    public function getConsultasOcupada(){
        $hoy = date("Y-m-d");
        $ocupado = DB::table('factura_s')
                    ->join('habitacion','habitacion.id','=','factura_s.numero')
                    ->join('precio','precio.id','=','habitacion.precio_id')
                    ->whereDate('salida', '>', $hoy)
                    ->orderby('numero','asc')
                    ->get(); 
        return view('consulta_ocupadas', ['ocupadas'=>$ocupado]);
    }

    public function getConsultaHab(){
        $sencilla = DB::table('habitacion')
                    -> where('precio_id','=',1)
                    -> count();
        $doble = DB::table('habitacion')
                    -> where('precio_id','=',2)
                    -> count();
        $matrimonial = DB::table('habitacion')
                    -> where('precio_id','=',3)
                    -> count();
        $suite = DB::table('habitacion')
                    -> where('precio_id','=',4)
                    -> count();
        $penthouse = DB::table('habitacion')
                    -> where('precio_id','=',5)
                    -> count();
        
        return view('consulta_habitaciones', [  'sencilla'=>$sencilla,
                                                'doble'=>$doble,
                                                'matrimonial'=>$matrimonial,
                                                'suite'=>$suite,
                                                'penthouse'=>$penthouse]);
    }
}