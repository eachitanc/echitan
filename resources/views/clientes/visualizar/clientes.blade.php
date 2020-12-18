@extends('master')
    @section('content')
    <div class="container">
        <h3>CLIENTES</h3>
        <div class="row">
            @foreach($personas as $p)
                <div class="col-md-4">
                    <div class="card" >
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="{{url("/imagenes/$p->foto") }}" class="img-fluid" style="height: 300px;"/>
                            <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                            </a>
                        </div>
                        <div class="card-body">
                        <h5 class="card-title">{{ $p->nombres }}</h5>
                            <div class="card" style="width: 18rem">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">ID: {{ $p->DNI }}</li>
                                    <li class="list-group-item">Domicilio: {{ $p->domicilio }}</li>
                                    <li class="list-group-item">Teléfono: {{ $p->teléfono }}</li>
                                    <li class="list-group-item">Género: {{ $p->genero }}</li>
                                </ul>
                            </div>
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