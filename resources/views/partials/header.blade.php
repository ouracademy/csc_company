<header>
	<div class="navbar">
		<a class="navbar-brand" href="{{url('home')}}"><img src="{{asset('assets/images/logo-min.png')}}" id="logo" alt=""></a>

		<ul class="navbar-nav">
			<li class="dropdown active"><a href="{{url('home')}}">INICIO</a></li>
			<li><a href="{{url('about')}}">NOSOTROS</a></li>
			<li class="dropdown"><a href="{{url('services/all')}}" class="dropdown-toggle js-activated">SERVICIOS</a>

				<ul class="dropdown-menu">
					<li><a href="{{url('services/import')}}">IMPORTACIÓN</a></li>
					<li><a href="{{url('services/export')}}">EXPORTACIÓN</a></li>
					<li><a href="{{url('services/courses')}}">CURSOS Y CAPACITACIONES</a></li>
				</ul>
			</li>
			<li><a href="{{url('contact')}}">CONTÁCTENOS</a></li>
		</ul>
	</div>
	<!-- /.navbar -->
</header>