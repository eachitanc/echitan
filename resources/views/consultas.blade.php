@extends('master')
    @section('content')
    <div class="container" style="height: 450px;">
    <h3>CONSULTAS</h3>
    <br>
        <a href="{{url('consultasOcupadas')}}" class="btn btn-success">Habitaciones Ocupadas</a>
        <a href="{{url('consultasHabitaciones')}}" class="btn btn-success">otras consultas</a>
    </div>
@stop