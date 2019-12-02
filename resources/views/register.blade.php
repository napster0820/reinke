@extends('layout.app')

@section('title', 'Registro')

@section('content')
    <div id="bg-register" class="container-fluid">
       <div class="row">
            <div class="col-8">
                 <img class="img-fluid" src="images/new_bg_register_reinke.jpg" alt="Fondo Reinke Registro">
            </div>
            <div class="col-4">
                <div class="wapper-register">
                    <h2>Registro</h2>
                    <form action="{{ url('registro') }}" method="POST">
                        @csrf
                        @include('alerts.message_register_errors')
                        <div class="form-group">
                            <label for="name">Nombre:</label>
                            <input type="text" class="form-control" id="name" placeholder="Nombre" name="name" value="{{ old('name') }}" required maxlength="100">
                        </div>
                        <div class="form-group">
                            <label for="email">Correo:</label>
                            <input type="email" class="form-control" id="email" placeholder="Correo" name="email" value="{{ old('email') }}" required maxlength="100">
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña:</label>
                            <input type="password" class="form-control" id="password" placeholder="Contraseña" name="password" required maxlength="255">
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation ">Confirmar contraseña:</label>
                            <input type="password" class="form-control" id="password_confirmation" placeholder="Confirmar contraseña" name="password_confirmation" required maxlength="255">
                        </div>
                        <div class="form-group form-check">
                            <label class="form-check-label">
                                <input id="btn_privacy" class="form-check-input" type="checkbox" value="{{ old('privacy') }}" name="privacy" required> Acepto las politicas
                            </label>
                        </div>
                            <button id="btn_register" class="btn btn-primary btn-block" type="submit">Registrar</button>
                    </form>
                </div>
             </div>   
       </div>
    </div>
@endsection

@section('scipts')
    @parent
    <script src="js/register_validate.js"></script>
@endsection