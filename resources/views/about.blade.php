@extends('layout') 
@section('title','Nosotros')
@section('content')
@include('partials.jumbotron', ['imageURL' => 'assets/images/about/header.jpg',
								'title' => 'Nosotros' ,
								'phrase' => 'Una innovadora empresa de comercio exterior'])
<section class="we">
	<div class="container inner">
		<div class="row ">
			<div class="col-md-4 ">
				<div class="subtitle">
					<h2>¿QUIÉNES SOMOS?</h2>
				</div>
				<p>Somos una empresa dedicada al comercio exterior con 5 años de
				experiencia en este rubro.</p> 
				<p>Exportamos e Importamos diversos productos con valor agregado
				de Estados Unidos y Asia, además brindamos cursos y 
				capacitaciones para emprendedores.</p>
			</div>
			<div class="col-md-8 ">
				<div class="subtitle">

					<h2>¿POR QUÉ NOSOTROS?</h2>
					<div class="media">
						<div class="media-left pr-20">
							<div class="icon_container_small">
								<i class="fa fa-check "></i>
							</div>
						</div>
						<div class="media-body">
							<h4 class="media-heading">Experiencia</h4>
							<p>Somos una empresa dedicada al comercio exterior con 5 años de experiencia en este rubro.</p>
						</div>
					</div>
					<div class="media">
						<div class="media-left pr-20">
							<div class="icon_container_small">
								<i class="fa fa-check "></i>
							</div>
						</div>
						<div class="media-body">
							<h4 class="media-heading">Diversidad </h4>
							<p>Con nosotros las personas pueden importar diversos tipos de productos de Estados Unidos y países del Asia.</p>
						</div>
					</div>
					<div class="media">
						<div class="media-left pr-20">
							<div class="icon_container_small">
								<i class="fa fa-check "></i>
							</div>
						</div>
						<div class="media-body">
							<h4 class="media-heading">Bajo costo</h4> 
							<p>Importar desde tan solo 150 soles.</p>
						</div>
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
				<div class="section-title">
                    <h2>Nuestro equipo</h2><span class="divider"><span class="line"></span><span class="circle"></span><span class="line"></span></span>
                </div>
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
		<div class="row inner-top-sm thumbs gap-md text-center">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<div class="col-sm-6 thumb">
					<figure class="member">

						<div class="member-image">

							<div class="text-overlay">
								<div class="info">
									<ul class="social">
										<li><a href="https://www.facebook.com/antonick.narvaez?fref=ts"><i class="fa fa-facebook"></i></a></li>
										<li><a href="https://plus.google.com/109516996763533219907"><i class="fa fa-google-plus"></i></a></li>
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
										<li><a href="https://www.facebook.com/anthony.talaveraramos?fref=ts"><i class="fa fa-facebook"></i></a></li>
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
				<div class="section-title">
                    <h2>Nuestros clientes</h2><span class="divider"><span class="line"></span><span class="circle"></span><span class="line"></span></span>
                </div>
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
		<div class="row inner-top-sm ">
			<div class="col-md-8 col-sm-9 center-block text-center ">
				<div class="wrapper-img">
					<img src="assets/images/about/clients/hakan-innovations.png" alt="">
				</div>
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
		<!-- /.row -->
	</div>

</section>
@endsection
@section('scripts')
<script>
    $(document).ready(function(){
        $( "#about" ).addClass( "active" );
    });
</script>
@endsection