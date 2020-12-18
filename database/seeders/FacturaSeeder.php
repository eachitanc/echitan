<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $factura = [
            [
                'numero' => 6,
                'cliente' => 5,
                'formaPago' => 1,
                'entrada' => '2020-12-16',
                'salida' => '2020-12-18',
                'total' => 100000
            ],
            [
                'numero' => 7,
                'cliente' => 4,
                'formaPago' => 2,
                'entrada' => '2020-12-16',
                'salida' => '2020-12-17',
                'total' => 100000
            ],
            [
                'numero' => 8,
                'cliente' => 3,
                'formaPago' => 1,
                'entrada' => '2020-12-16',
                'salida' => '2020-12-19',
                'total' => 600000
            ],
            [
                'numero' => 9,
                'cliente' => 2,
                'formaPago' => 3,
                'entrada' => '2020-12-16',
                'salida' => '2020-12-17',
                'total' => 500000
            ],
            [
                'numero' => 10,
                'cliente' => 1,
                'formaPago' => 3,
                'entrada' => '2020-12-16',
                'salida' => '2020-12-17',
                'total' => 1000000
            ]
        ];
        DB::table('factura_s')->insert($factura);
    }
}
