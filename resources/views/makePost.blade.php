@extends('layouts.Main')


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

@section('content')

   <button class="btn btn-success guardarbtn" data-toggle="modal" data-target="#myModal">Guardar</button>

   <div class="container-fluid" style="margin-top: 70px;">

   	<div class="col-lg-12 text-center">
   		<img src="resources/Profile.jpg" class="img-circle" style="height: 15px;">
   		<label style="color: white">Nombre Usuario</label>

   	</div>
   </div>

	
   <div class="portada-critica" style="background-image: url(resources/prueba2.jpg); ">
   	
   	<div style="color:white; font-size: 35px; position: absolute; top: 25px; left: 10px;
   	">
   		<span class="glyphicon glyphicon-camera"></span>
   	</div>

   	<div class="Title-cr">
   		<div class="tooltip" role="tooltip" style="top:25%; right: 50%; transform: translateX(50%); opacity: 1;">
   			<div class="tooltip-arrow" style="left: 50%"></div>
   			<div class="tooltip-inner">Titulo</div>
   		</div>
   		<input type="text" name="" id="Titulo" >
   		
   	</div>
   </div>

   <div class="container-fluid cuerpo-cr">
 		<div class="row panel1">
 			<div class="col-xs-12 col-md-12 col-lg-10 col-lg-offset-1 ">
 				<div class="col-lg-6">
 					<textarea placeholder="Requerido" class="panel1txt"></textarea>
 				</div>
 				<div class="col-lg-6 img-panel" style="height: 450px;">
 					<div class="center-img-file">
 						<img src="resources/FishEye.png">
 					</div>
 					<input type="file" name="">
 					
 				</div>
 			</div>
 			<div class="col-lg-1"></div>
 		</div>
 		<div class="row panel2">
 			<div class="col-xs-12 col-md-12 col-lg-10 col-lg-offset-1 ">
 				
 				<div class="col-lg-6 img-panel" style="height: 450px;">
 					<div class="center-img-file">
 						<img src="resources/FishEye.png">
 					</div>
 					<input type="file" name="">
 					
 				</div>
 				<div class="col-lg-6">
 					<textarea placeholder="opcional" class="panel1txt"></textarea>
 				</div>
 			</div>
 			<div class="col-lg-1"></div>
 		</div>
 		<div class="row panel3">
 			<div class="col-xs-12 col-md-12 col-lg-10 col-lg-offset-1 ">
 				<div class="col-lg-6">
 					<textarea placeholder="opcional" class="panel1txt"></textarea>
 				</div>
 				<div class="col-lg-6 img-panel" style="height: 450px;">
 					<div class="center-img-file">
 						<img src="resources/transistor.jpg">
 					</div>
 					<input type="file" name="">
 					
 				</div>
 			</div>
 			<div class="col-lg-1"></div>
 		</div>
   </div>

   <div class="container-fluid resultado">
   	<div class="row">
   		<div class="col-lg-6 col-lg-offset-3 cal-cont" >
   			<input type="number" placeholder="Calificación" class="calificacion-cr" name="">
   		</div>
   		<div class="col-lg-3"></div>
   	</div>
   </div>
   

   <div class="bottom-portada" style="background-image: url(resources/prueba2.jpg); "></div>


   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Casi listo</h4>
	      </div>
	      <div class="modal-body">
	      		<div class="form-horizontal">
	      			<div class="form-group">
	      				<label for="nombre" class="col-sm-2 control-label">Descripción breve</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="nombre">
					    </div>
	      			</div>
	      			
	      		</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
	        <button type="button" class="btn btn-primary">Publicar Critica</button>
	      </div>
	    </div>
	  </div>
	</div>

@endsection