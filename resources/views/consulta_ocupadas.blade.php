@extends('master')
    @section('content')
    <div class="container" style="height: 450px;">
        <h3>CONSULTAS</h3>
        <br>
        <a href="{{url('consultasOcupadas')}}" class="btn btn-success">Habitaciones Ocupadas</a>
        <a href="{{url('consultasHabitaciones')}}" class="btn btn-success">otras consultas</a>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">NUMERO</th>
                <th scope="col">TIPO</th>
                <th scope="col">PRECIO</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ocupadas as $o)
                    <tr>
                        <th scope="row">*</th>
                        <td>{{ $o->numero }}</td>
                        <td>{{ $o->tipo }}</td>
                        <td>{{ $o->precio }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
@stop