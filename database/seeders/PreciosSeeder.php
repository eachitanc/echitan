<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PreciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $precio =[
            [
                'tipo' => 'Sencilla',
                'precio' => '50000'
            ],
            [
                'tipo' => 'Doble',
                'precio' => '100000'
            ],
            [
                'tipo' => 'Matrimonial',
                'precio' => '200000'
            ],
            [
                'tipo' => 'Suite',
                'precio' => '500000'
            ],
            [
                'tipo' => 'Penthouse',
                'precio' => '1000000'
            ]
        ];
        DB::table('precio')->insert($precio);
    }
}
