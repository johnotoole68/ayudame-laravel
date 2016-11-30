@section('menu')

<nav class="navbar">
  <div class="container">
    <!-- empieza encabezado -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="img/logo.jpg" data-active-url="img/logo-active.jpg" alt=""></a>
    </div>
    <!-- navbar colapsada, con menu -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right main-nav">
        <li><a href="#home">Home</a></li>
        <li><a href="#faqs">FAQS</a></li>
        <li><a href="#novedades">Novedades</a></li>
        <li><a href="#pricing">Registrarse</a></li>
        <li><a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue">Ingresar</a></li>
      </ul>
    </div>
    <!-- termina la navbar -->
  </div>
  <!-- Termina encabezado -->
</nav>

@show
