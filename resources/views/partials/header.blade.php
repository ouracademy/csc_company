<header>
	<div class="navbar">

		<div class="navbar-header">
			<div class="container">

				<ul class="info pull-left">
					<li><a href="#"><i class="icon-mail-1 contact"></i> info@reen.com</a></li>
					<li><i class="icon-mobile contact"></i> +00 (123) 456 78 90</li>
				</ul>

				<ul class="social pull-right">
					<li><a href="#"><i class="icon-s-facebook"></i></a></li>
					<li><a href="#"><i class="icon-s-gplus"></i></a></li>
					<li><a href="#"><i class="icon-s-twitter"></i></a></li>
				</ul>



				<a class="navbar-brand" href="index.html"><img src="assets/images/logo/logo-min.png" class="logo" alt=""></a>



				<a class="btn responsive-menu pull-right" data-toggle="collapse" data-target=".navbar-collapse"><i class='icon-menu-1'></i></a>

			</div>
		</div>

		<div class="yamm">
			<div class="navbar-collapse collapse">
				<div class="container">

					<!-- ============================================================= LOGO ============================================================= -->

					<a class="navbar-brand" href="index.html"><img src="assets/images/logo/logo-min.png" class="logo" alt=""></a>

					<!-- ============================================================= LOGO : END ============================================================= -->


					<!-- ============================================================= MAIN NAVIGATION ============================================================= -->

					<ul class="nav navbar-nav ">

						<li class="dropdown">
							<a href="{{url('home')}}" class="dropdown-toggle js-activated">Inicio</a>

						</li>
						<!-- /.dropdown -->

						<li class="dropdown">
							<a href="{{url('about')}}">Nosotros</a>

						</li>
						<!-- /.dropdown -->

						<li class="dropdown">
							<a href="{{url('services/all')}}" class="dropdown-toggle js-activated">Servicios</a>

							<ul class="dropdown-menu">
								<li><a href="{{url('services/import')}}">Importacion</a></li>
								<li><a href="{{url('services/export')}}">Exportacion</a></li>
								<li><a href="{{url('services/courses')}}">Cursos y Capacitaciones</a></li>

							</ul>
							<!-- /.dropdown-menu -->
						</li>
						<!-- /.dropdown -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle js-activated">Contactanos</a>

						</li>
						<!-- /.dropdown -->




						<li class="dropdown pull-right searchbox">
							<a href="#" class="dropdown-toggle js-activated"><i class="icon-search"></i></a>

							<div class="dropdown-menu">
								<form id="search" class="navbar-form search" role="search">
									<input type="search" class="form-control" placeholder="Type to search">
									<button type="submit" class="btn btn-default btn-submit icon-right-open"></button>
								</form>
							</div>
							<!-- /.dropdown-menu -->
						</li>
						<!-- /.searchbox -->

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