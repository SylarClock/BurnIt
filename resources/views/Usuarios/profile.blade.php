@extends('layouts.Main')

@section('estilos')
		<link rel="stylesheet" href="{{ asset('css/Profile.css') }}">
@endsection

@section('title')
	<title>Profile</title>
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

@section('content')
	   <img src="{{ asset('resources/transistor.jpg') }}" class="portada">


	   <div class="container-fluid perfil-ctr">
	   		<span type="file" class="pull-right btn-grey">
	   			<span class="glyphicon glyphicon-camera">
	   			</span>

	   		</span>
		   <div class="row">
		   	<div class="col-lg-12">
		   		<div class="col-lg-3">
		   			<img src="{{ asset('resources/Profile.jpg') }}" class="img-circle">
		   		</div>
		   		<div class="col-lg-9">
		   			<h1>Nombre Usuario</h1>
		   			<button class="btn-grey" style="font-size: 1.5em" data-toggle="modal" data-target="#myModal">
			   			<span class="glyphicon glyphicon-wrench"></span>
			   		</button>
		   		</div>
		   	</div>
		   </div>
	   </div>
	   <div class="container bottom-info">
		   	<div class="row" >
			   	<div class="col-lg-12">
			   		<div class="col-lg-6 text-center bi-lnd" style="background: black; ">
			   			<h1 style="padding-top:0">30</h1>
			   			<label style="color:white; font-size: 1.5em">Criticas</label>
			   		</div>
			   		<div class="col-lg-6 text-center bi-lnd" style="background: black;">
			   			<h1 style="padding-top:0">98%</h1>
			   			<label style="color:white; font-size: 1.5em">Rate</label>
			   		</div>
			   	</div>
		   	</div>
	   </div>
	   

	   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Configuración</h4>
		      </div>
		      <div class="modal-body">
		      		<div class="form-horizontal">
		      			<div class="form-group">
		      				<label for="nombre" class="col-sm-2 control-label">Nombre</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="nombre" >
						    </div>
		      			</div>
		      			<div class="form-group">
		      				<label for="Apellido" class="col-sm-2 control-label">Apellido</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="Apellido">
						    </div>
		      			</div>
		      			<div class="form-group">
		      				<label for="email" class="col-sm-2 control-label">Email</label>
						    <div class="col-sm-10">
						      <input type="email" class="form-control" id="email" >
						    </div>
		      			</div>
		      			<div class="form-group">
		      				<label for="perfil" class="col-sm-2 control-label">Perfil</label>
						    <div class="col-sm-10">
						      <input type="file" class="form-control" id="perfil">
						    </div>
		      			</div>
		      		</div>
		      		{!! Form::open() !!}
		      			<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
		      			<input type="hidden" name="_url" id="url" value="/prueba">
		      		{!! Form::close() !!}
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
		        <button type="button" id="grdMdl" class="btn btn-primary">GuardarCambios</button>
		      </div>
		    </div>
		  </div>
		</div>

@endsection


@section('scripts')
	<script src="{{ asset('js/profile.js')}}"></script>

@endsection

