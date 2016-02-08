<header  id="menu-principal" >
<!--<input type="button"  value="Mostrar / ocultar con slideToggle()">-->

	<div class="navbar"  >
		<div class="header_menu1">
			<a class="btn responsive-menu pull-left" id="mostrar"><span class="icon-menu" ></span></a>
			<a class="navbar-brand" href="{{url('home')}}"><img src="{{asset('assets/images/logo-min.png')}}" id="logo" alt=""></a>	
		</div>

		<ul class="navbar-nav">
			<li id="home"><a href="{{url('home')}}">INICIO</a></li>
			<li id="about"><a href="{{url('about')}}">NOSOTROS</a></li>
			<li id="services" class="dropdown"><a href="{{url('services/all')}}" class="dropdown-toggle js-activated">SERVICIOS</a>
				<ul class="dropdown-menu2">
					<li><a href="{{url('services/import')}}">IMPORTACIÓN</a></li>
					<li><a href="{{url('services/export')}}">EXPORTACIÓN</a></li>
					<li><a href="{{url('services/courses')}}">CURSOS Y CAPACITACIONES</a></li>
				</ul>
			</li>
			<li id="contact"><a href="{{url('contact')}}">CONTÁCTENOS</a></li>
		</ul>
	</div>
	<div class="menu-responsive" id="loco">
		<ul>
			<li><a href="{{url('home')}}">INICIO</a></li>
			<li><a href="{{url('about')}}">NOSOTROS</a></li>
			<li><a href="{{url('services/all')}}">SERVICIOS</a>
				<ul>
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