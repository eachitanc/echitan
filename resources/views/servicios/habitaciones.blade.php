@extends('master')
    @section('content')
    <div class="container">
        <h3>HABITACIONES</h3>
        <div class="row">
            @foreach($habitacion as $h)
                <div class="col-md-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="{{url("/imagenes/$h->foto") }}" class="img-fluid" />
                            <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $h->tipo }}</h5>
                            <p class="card-text">
                                {{ $h->descripcion }}
                            </p>
                            <p>
                                Precio: {{ $h->precio }}
                            </p>
                            <a href="#!" class="btn btn-success">Actualizar</a>
                            <a href="#!" class="btn btn-danger">Eliminar</a>
                        </div>
                    </div>
                    <br>
                </div>
            @endforeach
        </div>
    </div>
@stop
