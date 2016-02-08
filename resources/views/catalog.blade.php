@extends('layout')
@section('title','Catálogo de Importación')
@section('content')
@include('partials.jumbotron', ['imageURL' => '/public/assets/images/import/catalog.jpg',
								'title' => 'Catálogo de importación' ,
								'phrase' => 'Nuestros productos'])
								
<section id="catalog" class=" section-gray">
	<div class="container inner-top-sm">
		<div class="row vinner-top-sm">
			
		
			<div class="col-sm-12 portfolio">
				
				<ul class="filter text-center">
					<li><a href="#" data-filter=".*">Todos</a></li>
				
					<li><a href="#" data-filter=".electronic">Electronicos</a></li>
					<li><a href="#" data-filter=".news">Novedades</a></li>
					<li><a href="#" data-filter=".camera">Camaras</a></li>
				
				</ul><!-- /.filter -->
				
				<ul class="items col-4 gap">
					@foreach($products as $product)
						<li class="item thumb {{$product->category}} ">
						<figure>
							<div class="icon-overlay icn-link">
								<a href="#"><img src="{{$product->imageUrl}}" alt=""></a>
							</div><!-- /.icon-overlay -->
							
							<figcaption class="bordered no-top-border">
								<div class="info">
									<h4><a href="#">{{$product->name}}</a></h4>
									<p>{{$product->cost}}</p>
								
									<p>{{$product->description}}</p>
								</div><!-- /.info -->
							</figcaption>
							
						</figure>
						</li><!-- /.item -->
					@endforeach
				
				
					
				</ul><!-- /.items -->
				
			</div><!-- /.col -->
			
			
		</div><!-- /.row -->
	</div><!-- /.container -->
	<br><br>
</section>
@endsection
@section('scripts')
<script>
    $(document).ready(function(){
        $( "#services" ).addClass( "active" );
    });
</script>
@endsection