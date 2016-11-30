@section('posts')

<section id="novedades" class="section gray-bg">
  <div class="container">
    <div class="row title text-center">
      <h2 class="margin-top">Novedades</h2>
      <h4 class="light muted">Últimas actualizaciones</h4>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="team text-center">
          <div class="cover" style="background:url('img/team/team-cover1.jpg'); background-size:cover;">
            <div class="overlay text-center">
            </div>
          </div>
          <img src="img/team/team3.jpg" alt="Team Image" class="avatar">
          <div class="title">
            <h4>Juan Lopez</h4>
            <h5 class="muted regular">Pintor - Zona Norte</h5>
          </div>
          <button data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill">Contactalo</button>
        </div>
      </div>
      <div class="col-md-4">
        <div class="team text-center">
          <div class="cover" style="background:url('img/team/team-cover2.jpg'); background-size:cover;">
            <div class="overlay text-center">
            </div>
          </div>
          <img src="img/team/team1.jpg" alt="Team Image" class="avatar">
          <div class="title">
            <h4>Ana Montana</h4>
            <h5 class="muted regular">Tejidos - Parque Patricios</h5>
          </div>
          <a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill ripple">Contactala</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="team text-center">
          <div class="cover" style="background:url('img/team/team-cover3.jpg'); background-size:cover;">
            <div class="overlay text-center">
            </div>
          </div>
          <img src="img/team/team2.jpg" alt="Team Image" class="avatar">
          <div class="title">
            <h4>John O'Toole</h4>
            <h5 class="muted regular">Carpintero - Bella Vista</h5>
          </div>
          <a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill ripple">Contactalo</a>
        </div>
      </div>
    </div>
  </div>
</section>

@show
