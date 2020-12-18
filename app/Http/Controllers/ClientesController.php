<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller
{
    //
    public function showClientes(){
        $persona = DB::table('client')
                        ->orderby('nombres','asc')
                        ->get(); 
        return view('clientes.visualizar.clientes',['personas'=>$persona]);
    }
}
