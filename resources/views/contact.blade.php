@extends('layout') 
@section('title','Contáctenos')
@section('content')
@include('partials.jumbotron', ['imageURL' => '/public/assets/images/contact/header.jpg',
								'title' => 'Contáctenos' ,
								'phrase' => 'Déjenos su mensaje'])
<section>
	<div class="container inner">
		<div>
			<div class="col-sm-8">
				<div>
					<div>
						<h1>Contáctenos</h1>
						<h2>Para ofrecerle un mejor servicio</h2>
					</div>
					<div>
						<form method="POST" action="http://csc-trading.com/contact">
							<div class="form-group">
								<label for="name">Nombre (requerido)</label>
							    <input type="text" name="name" id="name" class="form-control" required />
							 </div>
							
							<div class="form-group">
								<label for="email">E-mail (requerido)</label>
							    <input type="email" name="email" id="email" class="form-control" required/>
							 </div>
							
							<div class="form-group">
								<label for="message">Mensaje</label>
								<textarea name="message" class="form-control" cols="40" rows="10" required></textarea>
							</div>
							
							<button type="submit" class="btn btn-default btn-submit">Enviar mensaje</button>
						</form>
					</div>
				</div>
			</div>

			<div class="col-sm-4">
				<div>
					<div class="block_title column_title inner-simple">
						<h1>Más información</h1>
					</div>
					<ul class="contacts">
						<li><i class="icon-location contact"></i>
							Centro Empresarial Link Tower<br>
							Av. Manuel Olguín 335, Oficinena 1205<br>
							Surco, Lima - Perú
						</li>
						<li><i class="icon-mobile contact"></i>
							(01) 739-1242
						</li>
						<li><a href="mailto:ventas.csccompany@gmail.com">
							<i class="icon-mail-1 contact"></i>ventas.csccompany@gmail.comm</a>
						</li>
					</ul>
					
				</div>
			</div>
		</div>
	</div>
</section>
@endsection