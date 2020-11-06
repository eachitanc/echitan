@extends('master')
    @section('content')
        
        <div class="container">
            <h3>HABITACIONES</h3>
            <div class="row">
                <div class="col">
                    <!-- Card -->
                    <div class="card">

                        <!-- Card image -->
                        <img class="card-img-top" src="data:image/jpeg;base64,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" alt="Estandar">

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <h4 class="card-title"><a>Estándar</a></h4>
                            <!-- Text -->
                            <p class="card-text" style="text-align: justify;">
                                Habitación con capacidad de 1 ó 2 personas: Las habitaciones estándar ofrecen dos tipos de camas: 2 camas individuales (1m x 2m) ó Doble (2m x 2m). Todas las habitaciones estándar están cuidadas al mínimo detalle y decoradas con un estilo moderno
                            </p>
                        </div>

                    </div>
                    <!-- Card -->
                </div>
                
                <div class="col">
                    <!-- Card -->
                    <div class="card">

                        <!-- Card image -->
                        <img class="card-img-top" src="https://hotellamagdalena.co/php/wp-content/gallery/habitaciones/DSC_5353-WEB.jpg" alt="Card image cap">

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <h4 class="card-title"><a>Superior</a></h4>
                            <!-- Text -->
                            <p class="card-text" style="text-align: justify;">
                                Las habitaciones dan una sensación de confort intemporal; diseñadas para momentos especiales y para una estancia tranquila. Camas individuales o camas de matrimonio, Queen o King size. Las habitaciones tienen entre 25 m2 y 35 m2. Baño en mármol con bañera y ducha separados.
                            </p>
                        </div>

                    </div>
                    <!-- Card -->
                </div>

                <div class="col">
                    <!-- Card -->
                    <div class="card">

                        <!-- Card image -->
                        <img class="card-img-top" src="https://cf.bstatic.com/images/hotel/max1024x768/248/248216526.jpg" alt="Card image cap">

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <h4 class="card-title"><a>Ejecutiva</a></h4>
                            <!-- Text -->
                            <p class="card-text">
                                Las habitaciones Ejecutivas están concebidas como grandes remansos de paz en el palpitante centro de la ciudad. Habitaciones con vistas a tranquilos patios interiores, que cuentan con una impecable insonorización para garantizar su descanso.
                            </p>
                        </div>

                    </div>
                    <!-- Card -->
                </div>
            </div>
        </div>
@stop
