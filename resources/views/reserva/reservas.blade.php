@extends('master')
    @section('content')
        <div class="container">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">RESERVA</h4>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                    <i class="fas fa-user prefix grey-text"></i>
                    <input type="text" id="form34" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="form34">Tu Nombre</label>
                    </div>

                    <div class="md-form mb-5">
                    <i class="fas fa-envelope prefix grey-text"></i>
                    <input type="email" id="form29" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="form29">Correo</label>
                    </div>

                    <div class="md-form mb-5">
                    <i class="fas fa-tag prefix grey-text"></i>
                    <input type="text" id="form32" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="form32">RESERVA</label>
                    </div>

                    <div class="md-form">
                    <i class="fas fa-pencil prefix grey-text"></i>
                    <textarea type="text" id="form8" class="md-textarea form-control" rows="4"></textarea>
                    <label data-error="wrong" data-success="right" for="form8">Observación</label>
                    </div>

                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-unique">Enviar <i class="fas fa-paper-plane-o ml-1"></i></button>
                </div>
                </div>
            </div>
            </div>
        </div>
@stop

