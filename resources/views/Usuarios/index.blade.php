@extends('layouts.Main')

<?php $message= Session::get('message') ?>

@if($message == 'store')
	
	<div class="alert alert-warning alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	  Usuario creado
	</div>

@endif

@section('content')
	
	<table class="table">
		<thead><
			<th>Nombre</th>
			<th>Correo</th>
			<th>Nacimiento</th>
			<th>Editar</th>
		</thead>
		@foreach($users as $user)
		<tbody>
			<td>{{ $user->name }}</td>
			<td>{{ $user->email }}</td>
			<td>{{ $user->birth_day }}</td>
			<td>{!! link_to_route('usuario.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class' => 'btn btn-primary']); !!}</td>
		</tbody>
		@endforeach
	</table>

	
@stop


@section('title')
	<title>Agregar Post</title>
@endsection

@section('estilos')
	<link rel="stylesheet" href="{{ asset('css/CrearCritica.css')}}">
@endsection

@section('navbar')
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					   <span class="sr-only">Toggle navigation</span>
					   <span class="icon-bar"></span>
					   <span class="icon-bar"></span>
					   <span class="icon-bar"></span>
					 </button>
				   <img class="BurnItIcon" onclick="window.location.href = '/';" src="{{ asset('resources/BurnItGradientColors.svg')}}">
					 
			   </div>
			   <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					  
						  <ul class="nav navbar-nav navbar-right">
							  <li><a href="#">Iniciar Sesion</a></li>
						  </ul>
				   
			   </div>
			</div>
	   </nav>
@endsection