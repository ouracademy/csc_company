@extends('layout') 
@section('title','Cursos y capataciones') 
@section('content')

@include('partials.jumbotron', ['imageURL' => '/public/assets/images/courses/header.jpg',
								'title' => 'Cursos y capacitaciones' ,
								'phrase' => 'Capacítate con nosotros y emprende'])

<section class="section-gray">
	<div class="container">
		<div class="row inner-top-sm">
			<div class="col-lg-12">
				<div class="panel">
					<div class="panel-body">

						<div class="row">
							<div class="col-md-3">
								<a href="" ""="">
									<img alt="No hay imagen" class="img-responsive img-bordered" src="{{asset('assets/images/courses/1.jpg')}}">
								</a>
							</div>
							<div class="col-md-9">
								<div class="row">
									<div class="col-xs-9">
										<h3>
											<a href="#">Como importar diferentes
											productos de Asia</a>
            							</h3>
									</div>
									<div class="col-xs-3">
										<span class="text-right">
                Charla
										</span>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div>
											<!--<p class="ng-hide">UNA DESCRIPCION</p>-->
											<div class="table-responsive">

												<table class="table">
													<thead>
														<tr>
															<th>FECHA</th>
															<th>HORA</th>
															<th>COSTO</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																<label>Sabado 16 de enero</label>
															</td>

															<td>
																<label>3pm</label>
															</td>
															<td>
																<label>Gratuito</label>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>


						<!--Otra charla-->
						<div class="row">
							<div class="col-md-3">
								<a href="" ""="">
									<img alt="No hay imagen" class="img-responsive img-bordered" src="{{asset('assets/images/courses/2.jpg')}}">
								</a>
							</div>
							<div class="col-md-9">
								<div class="row">
									<div class="col-xs-9">
										<h3>
                <a href="#">Como importar diferentes productos de Asia</a>
            </h3>
									</div>
									<div class="col-xs-3">
										<span class="text-right">
                Charla
										</span>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div>
											<!--<p class="ng-hide">UNA DESCRIPCION</p>-->
											<div class="table-responsive">

												<table class="table">
													<thead>
														<tr>
															<th>FECHA</th>
															<th>HORA</th>
															<th>COSTO</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																<label>Sabado 9 de enero</label>
															</td>

															<td>
																<label>3pm</label>
															</td>
															<td>
																<label>Gratuito</label>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>


						<!--Otra charla-->
						<div class="row ">
							<div class="col-md-3">
								<a href="" ""="">
									<img alt="No hay imagen" class="img-responsive img-bordered" src="http://www.cjavaperu.com/sites/default/files/cjavaperu_lima_servicios_capacitacion.png">
								</a>
							</div>
							<div class="col-md-9">
								<div class="row">
									<div class="col-xs-9">
										<h3>
							                <a href="#">Como importar diferentes productos de Asia</a>
							            </h3>
									</div>
									<div class="col-xs-3">
										<span class="text-right">Charla
										</span>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div>
											<!--<p class="ng-hide">UNA DESCRIPCION</p>-->
											<div class="table-responsive">

												<table class="table">
													<thead>
														<tr>
															<th>FECHA</th>
															<th>HORA</th>
															<th>COSTO</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																<label>Viernes 8 de enero</label>
															</td>

															<td>
																<label>6pm</label>
															</td>
															<td>
																<label>Gratuito</label>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>
@endsection
@section('scripts')
<script>
    $(document).ready(function(){
        $( "#services" ).addClass( "active" );
    });
</script>
@endsection