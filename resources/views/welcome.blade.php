@extends('layout.app')

@section('title', 'Iniciar sesión')

@section('content')
    <div class="container h-100">
        <div class="row">
            <div class="wapper-login">
                <div class="bg_account">
                    <form action="">
                        <h2 class="text-center">Iniciar sesión</h2>
                        <i class="fas fa-user-circle fa-7x"></i>
                        <input type="text" class="form-control form-control" placeholder="Email" required autofocus>
                        <input type="password" class="form-control form-control" placeholder="Password" required>
                        <br>
                    <a href="{{ url('datos') }}" class="btn btn-primary btn-block" type="submit">Ingresar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection