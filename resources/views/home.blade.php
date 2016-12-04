@extends('layouts.sources')

<!DOCTYPE html>
<html lang="en">

	@yield('head')

<body>
	<div class="preloader">
		<img src="img/loader.gif" alt="Preloader image">
	</div>

	@yield('navbar')

<!--TRAE EL CONTENIDO DE LAYOUTS-->

	<header id="home">
		<div class="container">
			<div class="table">
				<div class="header-text">
					<div class="row">
						<div class="col-md-12 text-center">
							<h3 class="white" style="backgroun color: black">ayuda.me</h3>
							<h1 class="white typed">Siempre tenés a alguien para recomendar.</h1>
							<span class="typed-cursor">|</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<section>
		<div class="cut cut-top"></div>
		<div class="container">
			<div class="row intro-tables"><!-- agrupa los tres cuadros -->
				<!--comienzo de "¿Qué puedo encontrar?"-->
				<div class="col-md-4">
					<div class="intro-table intro-table-first">
						<h5 class="white heading">¿Qué puedo encontrar?</h5>
						<div class="owl-carousel owl-schedule bottom">
							<div class="item">
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Albañilería</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Pintura</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Carpintería</h5>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Plomería</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-12">
										<h5 class="regular white">Interior de muebles</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-12">
										<h5 class="regular white">... y muchos mas =)</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!--aca terminan el "¿Qué puedo encontrar?"-->
				<div class="col-md-4">
					<div class="intro-table intro-table-hover">
						<h5 class="white heading hide-hover">ayuda.me</h5>
						<div class="bottom">
							<h4 class="white heading small-heading no-margin regular">Necesitas esa ayuda en tu casa?</h4>
							<h4 class="white heading small-pt">Encontrala hoy!</h4>
							<a href="#" class="btn btn-white-fill expand">Registrate</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-table intro-table-third">
						<h5 class="white heading">Comentarios</h5>
						<div class="owl-testimonials bottom">
							<div class="item">
								<h4 class="white heading content">No podía terminar con esa gotera, hasta que me recomendaron este sitio y encontré a la persona correcta!</h4>
								<h5 class="white heading light author">Nick D'amico</h5>
							</div>
							<div class="item">
								<h4 class="white heading content">Excelentes las recomendaciones, gente muy confiable.</h4>
								<h5 class="white heading light author">Alan Tenebaum</h5>
							</div>
							<div class="item">
								<h4 class="white heading content">Enseguida encontrás una persona que haga el trabajo que necesitas!</h4>
								<h5 class="white heading light author">John O'toole</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	@yield('faqs')

	@yield('posts')

	@yield('tweets')

	@yield('footer')

	<!--OCULTO HASTA QUE LO LLAMEN-->
	@yield('login')
	<!-- Holder for mobile navigation -->
	<div class="mobile-nav">
		<ul>
		</ul>
		<a href="#" class="close-link"><i class="arrow_up"></i></a>
	</div>

	@yield('scripts')

</body>

</html>
