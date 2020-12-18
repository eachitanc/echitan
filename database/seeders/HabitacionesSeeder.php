<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HabitacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipoHab =[
            [
                'descripcion' => 'Habitación con capacidad de 1 ó 2 personas: Las habitaciones estándar ofrecen dos tipos de camas: 2 camas individuales (1m x 2m) ó Doble (2m x 2m). Todas las habitaciones estándar están cuidadas al mínimo detalle y decoradas con un estilo moderno',
                'numCamas' => 1,
                'foto' => 'sencilla.jpg',
                'precio_id' => 1               
            ],
            [
                'descripcion' => 'Las habitaciones dan una sensación de confort intemporal; diseñadas para momentos especiales y para una estancia tranquila. Camas individuales o camas de matrimonio, Queen o King size. Las habitaciones tienen entre 25 m2 y 35 m2. Baño en mármol con bañera y ducha separados.',
                'numCamas' => 2,
                'foto' => 'doble.jpg',
                'precio_id' => 2               
            ],
            [
                'descripcion' => 'Las habitaciones Matrimoniales están concebidas como grandes remansos de paz en el palpitante centro de la ciudad. Habitaciones con vistas a tranquilos patios interiores, que cuentan con una impecable insonorización para garantizar su descanso',
                'numCamas' => 2,
                'foto' => 'matrimonial.jpg',
                'precio_id' => 3               
            ],
            [
                'descripcion' => 'Habitaciones más amplias y espaciosas. Reservadas por personalidades de los negocios o la política, o bien por personas comunes que desean pasar una noche especial, con motivo de una luna de miel, graduaciones, promociones u otros festejos.',
                'numCamas' => 3,
                'foto' => 'suite.jpg',
                'precio_id' =>  4             
            ],
            [
                'descripcion' => 'Apartamento especial que se encuentra en la parte más alta de un edificio, presentando varias características especiales y únicas como una entrada o un elevador privado, piscina, terrazas al aire libre',
                'numCamas' => 4,
                'foto' => 'penthouse.jpg',
                'precio_id' => 5                
            ]
        ];
        DB::table('habitacion')->insert($tipoHab);
    }
}
