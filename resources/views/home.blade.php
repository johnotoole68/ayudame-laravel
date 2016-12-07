@extends('layouts.master')

@section('css_propia')
<link rel="stylesheet" href="css/main.css">
@endsection

@section('titulo')
  ayuda.me - Home
@endsection

@section('contenido')
  <div class="row">
    <div class="col-md-offset-4 col-md-4">
      @include('includes.mensajes')
    </div>
  </div>

  <div class="container-fluid">
    @include('includes.header')
    <video controls autoplay loop preload="auto" width="640" height="360">
        <source src="video/Everest.mp4" type="video/mp4" />
        Tu navegador no soporta HTML5 Video
    </video>
    <div class="row">
      <div class="col-md-offset-4 col-md-4 titulo">
        <h1>ayuda.me</h1>
        <h3>tu carta de presentacion on-line</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-offset-4 col-md-4 login">
        <h3>Ingreso</h3>
        <form class="" action="{{ route('ingreso') }}" method="POST">
          {{ csrf_field() }}
          <div class="form-group {{ $errors -> has('email') ? 'has-error' : ''}}">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email" value="{{Request::old('email')}}">
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
    <div class="row">
      <div class="col-md-8 oficios">
        <div class="row">
          <div class="col-md-4">
            <div class="modelo_home">
              <i class="fa fa-user-circle-o fa-3x" aria-hidden="true"></i>
              <p>
                Tus datos serán visibles las 24 hs. los 365 días del año.
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="modelo_home">
              <i class="fa fa-user-circle-o fa-3x" aria-hidden="true"></i>
              <p>
                Tus datos serán visibles las 24 hs. los 365 días del año.
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="modelo_home">
              <i class="fa fa-user-circle-o fa-3x" aria-hidden="true"></i>
              <p>
                Tus datos serán visibles las 24 hs. los 365 días del año.
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="modelo_home">
              <i class="fa fa-user-circle-o fa-3x" aria-hidden="true"></i>
              <p>
                Tus datos serán visibles las 24 hs. los 365 días del año.
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="modelo_home">
              <i class="fa fa-user-circle-o fa-3x" aria-hidden="true"></i>
              <p>
                Tus datos serán visibles las 24 hs. los 365 días del año.
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="modelo_home">
              <i class="fa fa-user-circle-o fa-3x" aria-hidden="true"></i>
              <p>
                Tus datos serán visibles las 24 hs. los 365 días del año.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 faqs">

      </div>
    </div>
    <div class="row">
      <div class="col-md-12 footer">

      </div>
    </div>
  </div>
@endsection
