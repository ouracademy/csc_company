<header>
	<div class="navbar">

		<div class="navbar-header">
			<div class="container">
				<a class="navbar-brand" href="{{url('home')}}"><img src="{{asset('assets/images/logo-min.png')}}" id="logo" alt=""></a>

				<a class="btn responsive-menu pull-right" data-toggle="collapse" data-target=".navbar-collapse"><i class='icon-menu-1'></i></a>

			</div>
		</div>

		<div class="yamm">
			<div class="navbar-collapse collapse">
				<div class="container">

					<!-- ============================================================= LOGO ============================================================= -->

					<a class="navbar-brand" href="{{url('home')}}"><img src="{{asset('assets/images/logo-min.png')}}" id="logo" alt=""></a>

					<!-- ============================================================= LOGO : END ============================================================= -->


					<!-- ============================================================= MAIN NAVIGATION ============================================================= -->

					<ul class="navbar-nav ">

						<li class="dropdown">
							<a href="{{url('home')}}" >Inicio</a>

						</li>
						<li class="dropdown">
							<a href="{{url('about')}}">Nosotros</a>

						</li>
						<li class="dropdown">
							<a href="{{url('services/all')}}" class="dropdown-toggle js-activated">Servicios</a>

							<ul class="dropdown-menu">
								<li><a href="{{url('services/import')}}">Importacion</a></li>
								<li><a href="{{url('services/export')}}">Exportacion</a></li>
								<li><a href="{{url('services/courses')}}">Cursos y Capacitaciones</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="{{url('contact')}}">Contáctenos</a>
						</li>

					</ul>
					<!-- /.nav -->

					<!-- ============================================================= MAIN NAVIGATION : END ============================================================= -->

				</div>
				<!-- /.container -->
			</div>
			<!-- /.navbar-collapse -->
			</div>
		<!-- /.yamm -->


	</div>
	<!-- /.navbar -->
</header>