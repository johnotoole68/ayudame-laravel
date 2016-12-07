@extends('layouts.master')

@section('css_propia')
<link rel="stylesheet" href="css/registrarse.css">
@endsection

@section('titulo')
  ayuda.me - Registro
@endsection

@section('contenido')
  <div class="container-fluid fondo_completo_registrarse">
    @include('includes.header')
    <div class="row">
      <div class="col-md-offset-4 col-md-4 titulo">
        <h2>Completá los datos a continuación</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-md-offset-4 col-md-4 login">
        <h3>Registro</h3>
        <form class="" action=" {{ route('registro') }}" method="POST">
          {{ csrf_field() }}
          <div class="form-group {{ $errors -> has('email') ? 'has-error' : ''}}">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email" value="{{Request::old('email')}}">
          </div>
          <div class="form-group {{ $errors -> has('name') ? 'has-error' : ''}}">
            <label for="name">Nombre</label>
            <input class="form-control" type="text" name="name" id="name" value="{{Request::old('name')}}">
          </div>
          <div class="form-group {{ $errors -> has('password') ? 'has-error' : ''}}">
            <label for="password">Contraseña</label>
            <input class="form-control" type="password" name="password" id="password">
          </div>
          <button type="submit" class="btn btn-primary">Enviar</button>
          <input type="hidden" name="token" value="{{ Session::token()}}">
        </form>
      </div>
    </div>
  </div>
@endsection
