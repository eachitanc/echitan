@extends('master')
    @section('content')
        <div class="container">
            <!-- Default form contact -->
            <form class="text-center border border-light p-5" action="#!">

            <p class="h4 mb-4">Contáctanos</p>

            <!-- Name -->
            <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Nombre">

            <!-- Email -->
            <input type="email" id="defaultContactFormEmail" class="form-control mb-4" placeholder="Correo">

            <!-- Subject -->
            <label>Motivo</label>
            <select class="browser-default custom-select mb-4">
                <option value="" disabled>Elejir una opción</option>
                <option value="1" selected>Consultas</option>
                <option value="2">Quejas</option>
                <option value="3">Peticiones</option>
                <option value="4">Reclamos</option>
            </select>

            <!-- Message -->
            <div class="form-group">
                <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Mensaje"></textarea>
            </div>

            <!-- Copy -->
            <div class="custom-control custom-checkbox mb-4">
                <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy">
                <label class="custom-control-label" for="defaultContactFormCopy">Enviar me una copia de este mensaje</label>
            </div>

            <!-- Send button -->
            <button class="btn btn-info btn-block" type="submit">Enviar</button>

            </form>
            <!-- Default form contact -->
        </div>
@stop
