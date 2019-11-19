@extends('layout.app')

@section('title', 'Registro')

@section('content')
    <div id="bg-register" class="container-fluid">
       <div class="row">
            <div class="col-8">
                 <img class="img-fluid" src="images/new_bg_register_reinke.jpg" alt="">
            </div>
            <div class="col-4">
                <div class="wapper-register">
                    <h2>Registro</h2>
                    <form action="#">
                        <div class="form-group">
                            <label for="name">Nombre:</label>
                            <input type="name" class="form-control" id="name" placeholder="Nombre" name="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Password" name="pswd">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Confirmar password:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Confirmar password" name="pswd">
                        </div>
                        <div class="form-group form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember"> Acepto las politicas
                            </label>
                        </div>
                            <a href="{{ url('/') }}" class="btn btn-primary btn-block">Registrar</a>
                    </form>
                </div>
             </div>   
       </div>
    </div>
@endsection