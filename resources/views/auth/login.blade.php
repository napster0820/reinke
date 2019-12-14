@extends('layout.app')

@section('title', 'Iniciar sesión')

@section('content')
    <div class="container h-100">
        <div class="row">
            <div class="wapper-login">
                <div class="bg_account">
                <form action="{{ url('auth') }}" method="POST">
                        @csrf
                        @include('alerts.message_login')
                        <h2 class="text-center">Iniciar sesión</h2>
                        <i class="fas fa-user-circle fa-7x"></i>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="email" class="form-control form-control" placeholder="Correo" name="email" value="{{ old('correo') }}" maxlength="100" required autofocus>
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control form-control" placeholder="Contraseña" name="password" maxlength="100" required>
                        </div>
                        <br>
                        <button class="btn btn-primary btn-block" type="submit">Ingresar</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection