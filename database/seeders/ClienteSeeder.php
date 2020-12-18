<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clientes = [
            [
                'DNI' => 1234,
                'nombres' => 'Edwin Chitan',
                'genero' => 'M',
                'domicilio' => 'Cra 1 # 15-10',
                'teléfono' => '300884330',
                'foto' => 'edwin.jpg'
            ],
            [
                'DNI' => 2345,
                'nombres' => 'Albeiro Coral',
                'genero' => 'M',
                'domicilio' => 'Calle 2 # 3-20',
                'teléfono' => '314864360',
                'foto' => 'albiero.jpg'
            ],
            [
                'DNI' => 3456,
                'nombres' => 'Andrea Ramirez',
                'genero' => 'F',
                'domicilio' => 'Diagonal 12 # 5-25',
                'teléfono' => '322939455',
                'foto' => 'andrea.jpg'
            ],
            [
                'DNI' => 4567,
                'nombres' => 'Johana Reina',
                'genero' => 'F',
                'domicilio' => 'Cra 6 # 3-45',
                'teléfono' => '316980675',
                'foto' => 'johana.jpg'
            ],
            [
                'DNI' => 5678,
                'nombres' => 'Carlos Diaz',
                'genero' => 'M',
                'domicilio' => 'Calle 11 # 34-56',
                'teléfono' => '318058976',
                'foto' => 'carlos.jpg'
            ]
        ];
        DB::table('client')->insert($clientes);
    }
}
