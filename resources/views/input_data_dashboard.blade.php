@extends('layout.app')

@section('title', 'Registro')

@section('content')
    <br>
    <div class="dashboard container">
       <form action="#" method="POST">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="card">
                    <h5 class="card-header">Datos Cliente</h5>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group row">
                                        <label for="inputCiente" class="col-sm-3 col-form-label">Cliente:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputCiente" placeholder="Cliente">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputDireccion" class="col-sm-3 col-form-label">Dirección:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputDireccion" placeholder="Dirección">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEstado" class="col-sm-3 col-form-label">Estado:</label>
                                        <div class="col-sm-9">
                                            <select id="inputEstado" class="form-control">
                                                <option selected>Lorem...</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group row">
                                        <label for="inputTon" class="col-sm-6 col-form-label">Producción estimada o (TonlHc):</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="inputTon" placeholder="(TonlHc)">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputDireccion" class="col-sm-3 col-form-label">Cultivo:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputDireccion" placeholder="Cultivo">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-3 col-form-label">Email:</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <h5 class="card-header">Datos del excel para los flujos</h5>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="card-title">Flujo financiado</h5>
                                    <p class="card-text">Tablas Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla officiis laudantium ipsum, commodi quo, architecto a doloremque, fugiat perspiciatis quis veritatis blanditiis. At non dolores corporis, animi cumque neque a?</p>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="card-title">Flujo contado</h5>
                                    <p class="card-text">Tablas Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla officiis laudantium ipsum, commodi quo, architecto a doloremque, fugiat perspiciatis quis veritatis blanditiis. At non dolores corporis, animi cumque neque a?</p>
                                    <a href="#" class="btn btn-primary float-right">Generar Dashboard</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </form>
    </div>
@endsection