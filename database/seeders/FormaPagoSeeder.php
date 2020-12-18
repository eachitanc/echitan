<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormaPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $pago = [
            [
                'descripcion' => 'Efectivo'
            ],
            [
                'descripcion' => 'Tarjeta débito'
            ],
            [
                'descripcion' => 'Tarjeta crédito'
            ]
        ];
        DB::table('formaPago')->insert($pago);
    }
}
