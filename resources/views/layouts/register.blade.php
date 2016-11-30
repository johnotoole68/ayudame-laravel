@section('register')

<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modal-popup">
      <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
      <h3 class="white">Registrate</h3>
      <form action="" class="popup-form">
        <input type="text" class="form-control form-white" placeholder="Nombre completo">
        <input type="text" class="form-control form-white" placeholder="Apellido">
        <input type="number" class="form-control form-white" placeholder="Edad">
        <input type="email" class="form-control form-white" placeholder="Email">
        <select class="form-control form-white">
          <option>Hombre</option>
          <option>Mujer</option>
        </select>
        @yield('oficios')
        <input type="password" class="form-control form-white" placeholder="Ingrese su contraseña">
        <input type="password" class="form-control form-white" placeholder="Confirme su contraseña">
        <button type="submit" class="btn btn-submit">Registrar</button>
      </form>
    </div>
  </div>
</div>

@show
