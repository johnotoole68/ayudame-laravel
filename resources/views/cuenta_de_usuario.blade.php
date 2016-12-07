@extends('layouts.master')

@section('titulo')
    Cuenta de usuario
@endsection

@section('contenido')
<div class="container-fluid fondo_completo_cdu">
@include('includes.header')
  <section class="row new-post">
    <div class="col-md-6 col-md-offset-3 contexto_cdu">
      <h2>Hola {{ $user->name }}</h2>
      <h4>Pongamos al día tus datos</h4>
      <form action="{{ route('guardar.cambios') }}" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="name">Nombre</label>
          <input type="text" name="name" class="form-control" value="{{ $user->name }}" id="name">
        </div>
        <div class="form-group">
          <label for="imagen">Imagen de usuario (JPG)</label>
          <input type="file" name="imagen" class="form-control" id="imagen">
        </div>
        <button type="submit" class="btn btn-primary">Guardar cambios</button>
        <input type="hidden" value="{{ Session::token() }}" name="_token">
      </form>
    </div>
  </section>
  @if (Storage::disk('local')->has($user->name . '-' . $user->id . '.jpg'))
  <section class="row new-post">
    <div class="col-md-6 col-md-offset-3">
      <img src="{{ route('imagen_de_perfil', ['nombre_de_archivo' => $user->name . '-' . $user->id . '.jpg']) }}" alt="" class="img-responsive">
    </div>
  </section>
  @endif
</div>
@endsection
