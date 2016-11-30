@section('login')

<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modal-popup">
      <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
      <h3 class="white">Ingresar</h3>
      <form action="" class="popup-form">
        <input type="text" class="form-control form-white" placeholder="Nombre de usuario">
        <input type="password" class="form-control form-white" placeholder="Contraseña">
        <div class="checkbox-holder text-left">
          <div class="checkbox">
            <input type="checkbox" value="None" id="squaredOne" name="check" />
            <label for="squaredOne"><span>Recordar contraseña</span></label>
          </div>
        </div>
        <button type="submit" class="btn btn-submit">Enviar</button>
      </form>
    </div>
  </div>
</div>

@show
