@extends('layout')
@section('title','Importación')
@section('content')
@include('partials.jumbotron', ['imageURL' => '/public/assets/images/import/header.jpg',
								'title' => 'Importación' ,
								'phrase' => 'Importar es el camino',
								'button'	=> [
									'link'	=> 'services/import/catalog',
									'title'	=>'NUESTROS PRODUCTOS'
								]])
								
	<div class="container inner">
		<div class="row inner-top-sm">

			<div class="col-md-4 inner-bottom-sm">
				<h2 class="sub-title">IMPORTACION</h2>
				<p>Brindamos el servicio de outsourcing en importación, esto permitirá que el producto llegue a sus manos sin necesidad que usted este pendiente de su mercaderia.</p>

			</div>
			<!-- /.col -->

			<div class="col-md-8 inner-bottom-sm">
				<h2>BENEFICIOS</h2>
				<div class="media">
					<div class="media-left pr-20">
						<div class="icon_container_small">
							<i class="fa fa-eye "></i>
						</div>
					</div>
					<div class="media-body">
						<h4 class="media-heading">Productos innovadores</h4>
						<p>Obten productos innovadores de Estados Unidos y Asía.</p>
					</div>
				</div>
				<div class="media">
					<div class="media-left pr-20">
						<div class="icon_container_small">
							<i class="fa fa-trophy "></i>
						</div>
					</div>
					<div class="media-body">
						<h4 class="media-heading">Importa desde un monto mínimo </h4>
						<p>Importa desde s/ 150. 00</p>
					</div>
				</div>
				<div class="media">
					<div class="media-left pr-20">
						<div class="icon_container_small">
							<i class="fa fa-usd "></i>
						</div>
					</div>
					<div class="media-body">
						<h4 class="media-heading">Precio competitivo</h4>
						<p>Ofrecemos productos a precio de fábrica, siendo este un precio competitivo mejor que el del mercado.</p>
					</div>
				</div>

			</div>
		</div>


	</div>
</section>
<section id="steps" class="section-gray">
	<div class="container inner">

		<div class="row">
			<div class="col-md-8 col-sm-9 center-block text-center">
				<div class="section-title">
                    <h2>Pasos para importar</h2>
                    <span class="divider">
                    	<span class="line"></span>
                    	<span class="circle"></span>
                    	<span class="line"></span>
                    </span>
                </div>
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->

		<div class="row inner-top-sm">
			<div class="col-xs-12">
				<div class="tabs tabs-reasons tabs-circle-top tab-container">

					<ul class="etabs text-center">
						<li class="tab active">
							<a href="#tab-1">
								<div>1</div>ESCOJA SU PRODUCTO</a>
						</li>
						<li class="tab">
							<a href="#tab-2">
								<div>2</div>REALIZE SU PEDIDO</a>
						</li>
						<li class="tab">
							<a href="#tab-3">
								<div>3</div>RECIBA SU COTIZACION</a>
						</li>
						<li class="tab">
							<a href="#tab-4">
								<div>4</div>CONFIRME Y DEPOSITE</a>
						</li>
						<li class="tab">
							<a href="#tab-5">
								<div>5</div>RECIBA SU PRODUCTO</a>
						</li>
					</ul>
					<!-- /.etabs -->

					<div class="panel-container">

						<div class="tab-content" id="tab-1">
							<div class="row">
								<div class="col-sm-8 center-block text-center inner-top-xs">
									<h3>ESCOJA SU PRODUCTO</h3>
									<p>Puede ver en nuestro catálogo, redes sociales o escoja el producto de su preferencia.</p>
								</div>
								<!-- /.col -->
							</div>
							<!-- /.row -->
						</div>
						<!-- /.tab-content -->

						<div class="tab-content" id="tab-2">
							<div class="row">
								<div class="col-sm-8 center-block text-center inner-top-xs">
									<h3>REALIZE SU PEDIDO</h3>
									<p>Envíenos su pedido a través de nuestro correo corporativo, redes sociales o contáctenos.</p>
								</div>
								<!-- /.col -->
							</div>
							<!-- /.row -->
						</div>
						<!-- /.tab-content -->
						<div class="tab-content" id="tab-3">



							<div class="row">
								<div class="col-sm-8 center-block text-center inner-top-xs">
									<h3>RECIBA SU COTIZACION</h3>
									<p>Se le enviará su cotización entre 3 a 4 días después de su pedido.</p>
								</div>
								<!-- /.col -->
							</div>
							<!-- /.row -->
						</div>


						<div class="tab-content" id="tab-4">
							<div class="row">
								<div class="col-sm-8 center-block text-center inner-top-xs">
									<h3>CONFIRME Y DEPOSITE</h3>
									<p>Deposite en la siguiente cuenta corriente Interbank: 107-3074399146.</p>
								</div>
								<!-- /.col -->
							</div>
							<!-- /.row -->
						</div>
						<!-- /.tab-content -->

					</div>
					<!-- /.tab-content -->
					<div class="tab-content" id="tab-5">



						<div class="row">
							<div class="col-sm-8 center-block text-center inner-top-xs">
								<h3>RECIBA SU PRODUCTO</h3>
								<p>Recibe sus productos en sus manos.</p>
							</div>
							<!-- /.col -->
						</div>
						<!-- /.row -->

					</div>
					<!-- /.tab-content -->



				</div>
				<!-- /.panel-container -->

			</div>
			<!-- /.tabs -->
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->




	</div>
	<!-- /.container -->
</section>


@endsection
@section('scripts')
<script>
    $(document).ready(function(){
        $( "#services" ).addClass( "active" );
    });
</script>
@endsection