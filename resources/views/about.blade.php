@extends('layout')
@section('title','Nosotros')
@section('content')
<section class="header-img" style="background-image: url(assets/images/about/header.jpg);">
<div class="overlay-header" style="background:rgba(0, 0, 0, 0.75"></div>
		<div class="col-sm-10 center-block text-center ">
    		<header>
    		<h1>NOSOTROS</h1>
    		</header>
		</div>
</section>

<section class="we">
	<div class="container inner">
		<div class="row inner-top-sm">

			<div class="col-md-4 inner-bottom-sm">
				<h2>¿QUIÉNES SOMOS?</h2>
				<p class="text-small">Somos una empresa dedicada al comercio exterior con 5 años de experiencia en este rubro. Exportamos e Importamos diversos productos con valor agregado de Estados Unidos y Asia, además brindamos cursos y capacitaciones para emprendedores.</p>

			</div>
			<!-- /.col -->

			<div class="col-md-8 inner-bottom-sm">
				<h2>¿POR QUÉ NOSOTROS?</h2>
				<div class="media">
					<div class="media-left pr-20">
						<div class="icon_container_small">
							<i class="fa fa-eye "></i>
						</div>
					</div>
					<div class="media-body">
						<h4 class="media-heading">Experiencia</h4> Somos una empresa dedicada al comercio exterior con 5 años de experiencia en este rubro.
					</div>
				</div>
				<div class="media">
					<div class="media-left pr-20">
						<div class="icon_container_small">
							<i class="fa fa-trophy "></i>
						</div>
					</div>
					<div class="media-body">
						<h4 class="media-heading">Diversidad </h4> Con nosotros las personas pueden importar diversos tipos de productos de Estados Unidos y países del Asia.
					</div>
				</div>
				<div class="media">
					<div class="media-left pr-20">
						<div class="icon_container_small">
							<i class="fa fa-usd "></i>
						</div>
					</div>
					<div class="media-body">
						<h4 class="media-heading">Bajo costo</h4> Importar desde tan solo 150 soles.
					</div>
				</div>

			</div>
		</div>


	</div>
</section>
<section id="team" class="section-gray">
	<div class="container inner">
	<div class="row">
	<div class="col-md-8 col-sm-9 center-block text-center">
	<header>
		<h2>NUESTRO EQUIPO</h2>
		<span class="divider"><span class="line"></span><span class="circle"></span><span class="line"></span></span>
	</header>
	</div><!-- /.col -->
	</div><!-- /.row -->					
		<div class="row inner-top-sm thumbs gap-md text-center">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<div class="col-sm-6 thumb">
					<figure class="member">

						<div class="member-image">

							<div class="text-overlay">
								<div class="info">
									<ul class="social">
										<li><a href="https://www.facebook.com/antonick.narvaez?fref=ts"><i class="icon-s-facebook"></i></a></li>
										<li><a href="https://plus.google.com/109516996763533219907"><i class="icon-s-gplus"></i></a></li>
									</ul>
									<!-- /.social -->
								</div>
								<!-- /.info -->
							</div>
							<!-- /.text-overlay -->

							<img src="assets/images/about/team/CEO.jpg">

						</div>
						<!-- /.member-image -->

						<figcaption class="member-details bordered no-top-border">
							<h3>Antonick Narváez
								<span>CEO / Founder</span>
							</h3>
						</figcaption>

					</figure>
				</div>
				<!-- /.col -->

				<div class="col-sm-6 thumb">
					<figure class="member">

						<div class="member-image">

							<div class="text-overlay">
								<div class="info">
									<ul class="social">
										<li><a href="https://www.facebook.com/anthony.talaveraramos?fref=ts"><i class="icon-s-facebook"></i></a></li>
									</ul>
									<!-- /.social -->
								</div>
								<!-- /.info -->
							</div>
							<!-- /.text-overlay -->

							<img src="assets/images/about/team/CMO.jpg">

						</div>
						<!-- /.member-image -->

						<figcaption class="member-details bordered no-top-border">
							<h3>
								Anthony Talavera
								<span>Gerente de Marketing y Ventas</span>
							</h3>
						</figcaption>

					</figure>
				</div>
				<!-- /.col -->
			</div>
			<div class="col-sm-3"></div>

		</div>
		<!-- /.row -->
	</div>
</section>


<section id="client">
	<div class="container inner">
		<div class="row">
			<div class="col-md-8 col-sm-9 center-block text-center">
					<header>
						<h2>NUESTRO CLIENTE</h2>
						<span class="divider"><span class="line"></span><span class="circle"></span><span class="line"></span></span>
					</header>
			</div><!-- /.col -->
		</div><!-- /.row -->
		<div class="row inner-top-sm ">
			<div class="col-md-8 col-sm-9 center-block text-center">
				<figure><img src="assets/images/about/clients/hakan-innovations.png" alt=""></figure>
			</div><!-- /.col -->
		</div><!-- /.row -->
		<!-- /.row -->
	</div>

</section>
@endsection