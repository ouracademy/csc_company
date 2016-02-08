@extends('layout') 
@section('title','Error 404')
@section('content')
@include('partials.jumbotron', ['imageURL' => 'assets/images/404.jpg',
								'title' => '¿Te has perdido en la naturaleza?' ,
								'phrase' => 'Lo sentimos, pero la página que 
											buscas no se ha encontrado.'])
@endsection