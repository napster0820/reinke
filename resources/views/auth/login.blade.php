@extends('layout.app')

@section('title', 'Iniciar sesión')

@section('content')
    <div class="container h-100">
        <div class="row">
            <div class="wapper-login">
                <div class="bg_account">
                <form action="{{ url('auth') }}" method="POST">
                        @csrf
                        <h2 class="text-center">Iniciar sesión</h2>
                        <i class="fas fa-user-circle fa-7x"></i>
                        <input type="email" class="form-control form-control" placeholder="Correo" name="email" value="{{ old('correo') }}" maxlength="100" required autofocus>
                        <input type="password" class="form-control form-control" placeholder="Contraseña" name="password" maxlength="100" required>
                        <br>
                        <button class="btn btn-primary btn-block" type="submit">Ingresar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection