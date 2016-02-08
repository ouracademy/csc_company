@extends('layout') 
@section('title','Contáctenos')
@section('content')
@include('partials.jumbotron', ['imageURL' => '/public/assets/images/contact/header.jpg',
								'title' => 'Contáctenos' ,
								'phrase' => 'Déjenos su mensaje'])
<section id="contactenos">
	<div class="container inner">
		<div>
			<div class="col-sm-8">
				<div>
					<div>
						<h1>Contáctenos</h1>
						<!--<h2>Para ofrecerle un mejor servicio</h2>-->
					</div>
					<div>
						@include('partials.message')
						@include('partials.errors')
						
						{!! Form::open(['url' => 'contact']) !!}
							<div class="form-group">
								{!! Form::label('name', 'Nombre (requerido)')!!}
								{!! Form::text('name', null, ['class'=>'form-control', 'required' => 'true'])!!}
							 </div>
							
							<div class="form-group">
								{!! Form::label('email', 'E-mail (requerido)')!!}
								{!! Form::email('email', null, ['class'=>'form-control', 'required' => 'true'])!!}
							 </div>
							
							<div class="form-group">
								{!! Form::label('message', 'Mensaje (requerido)')!!}
								{!! Form::textarea('message', null, ['class'	=>'form-control',
																	  'required'=> 'true',
																	  'cols'	=> '10',
																	  'rows'	=> '10'])!!}
							</div>
							
							<button type="submit" class="btn btn-default btn-submit">Enviar mensaje</button>
						{!! Form::close() !!}
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
						<li><i class="icon-mail contact"></i>
							<a href="mailto:ventas.csccompany@gmail.com">ventas.csccompany@gmail.com</a>
						</li>
					</ul>
					
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
@section('scripts')
<script>
    $(document).ready(function(){
        $( "#contact" ).addClass( "active" );
    });
</script>
@endsection