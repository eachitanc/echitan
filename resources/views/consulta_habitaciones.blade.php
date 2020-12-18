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
                <th scope="col">TIPO DE HABITACION</th>
                <th scope="col">CANTIDAD</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">*</th>
                <td>Sencilla</td>
                <td>{{ $sencilla }}</td>
                </tr>

                <tr class="table-primary">
                <th scope="row">**</th>
                <td>Doble</td>
                <td>{{ $doble }} </td>
                </tr>
                <tr class="table-secondary">
                <th scope="row">***</th>
                <td>Matrimonial</td>
                <td>{{ $matrimonial }} </td>
                </tr>
                <tr class="table-success">
                <th scope="row">****</th>
                <td>Suite</td>
                <td>{{ $suite }}</td>
                </tr>
                <tr class="table-danger">
                <th scope="row">*****</th>
                <td>Penthouse</td>
                <td>{{ $penthouse }}</td>
                </tr>
            </tbody>
        </table>     
    </div>
@stop