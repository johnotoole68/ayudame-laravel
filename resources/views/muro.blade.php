@extends ('layouts.master')

@section('contenido')
  <section class="row new-post">
      <div class="col-md-6 col-md-offset-3">
        <header><h3>Que tenes para contar?</h3></header>
        @include('includes.mensajes')
        <form action="{{ route('post.creado')}}" method="POST">
          <div class="form-group">
            <textarea class="form-control" name="body" rows="5" cols="40" placeholder="Contanos lo que quieras"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">POST</button>
          <input type="hidden" name="_token" value="{{ Session::token() }}">
        </form>
      </div>
  </section>
  <section class="row posts">
    <div class="col-md-6 col-md-offset-3">
      <header><h3>La gente anduvo diciendo</h3></header>
      @foreach($posts as $post)
      <article class="post" data-postid="{{ $post->id }}">
        <p>
          {{ $post->body }}
        </p>
        <div class="info">
          Creado por {{ $post->user->name }} el {{ $post->created_at }}
        </div>
        <div class="interaction">
          <a href="#">Me gusta</a>
          <a href="#">No me gusta</a>
          @if(Auth::user() == $post->user)
          <a href="#" class="edicion">Editar</a>
          <a href="{{ route('eliminar.posts', ['post_id' => $post->id]) }}">Eliminar</a>
          @endif
        </div>
      </article>
      @endforeach
    </div>
  </section>

  <div class="modal fade" tabindex="-1" role="dialog" id="editar-mensaje">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Editar mensaje</h4>
        </div>
        <div class="modal-body">
          <form action="" method="post">
            <div class="form-group">
              <label for="post-body">Editar el mensaje</label>
              <textarea class="form-control" name="post-body" id="post-body" rows="5"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary modal-save" id="modal-save">Guardar</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <script>
    var token = '{{ Session::token() }}';
    var url = '{{ route('editar') }}';
  </script>

@endsection
