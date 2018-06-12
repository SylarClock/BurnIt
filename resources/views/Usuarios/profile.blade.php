@extends('layouts.Main')

@section('estilos')
		<link rel="stylesheet" href="{{ asset('css/Profile.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.css') }}"/>
@endsection

@section('title')
	<title>{!! $users[0]->name !!} - Profile</title>
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
		@if($users[0]->portada == "")
	   <img src="{{ asset('resources/transistor.jpg') }}" class="portada">
	   @else
	   <img src="{{ asset('uploads/portada/'. $users[0]->portada) }}" class="portada">
	   @endif


	   <div class="container-fluid perfil-ctr">
	   		<span type="file" class="pull-right btn-grey">
	   			<span class="glyphicon glyphicon-camera">
	   			</span>

	   		</span>
		   <div class="row">
		   	<div class="col-lg-12">
		   		<div class="col-lg-3">
		   			@if($users[0]->perfil == "")
		   			<img src="{{ asset('resources/Profile.jpg') }}" class="img-circle prof_img">
		   			@else
		   			<img src="{{ asset('uploads/perfil/'.$users[0]->perfil) }}" class="img-circle prof_img">
		   			@endif
		   		</div>
		   		<div class="col-lg-9">
		   			<h1>{!! $users[0]->name . " ". $users[0]->last_name !!}</h1>
		   		@if(Auth::user()->id == $users[0]->id )
		   			<button class="btn-grey" style="font-size: 1.5em" id="btn_shw_modal" data-toggle="modal" data-target="#myModal">
			   			<span class="glyphicon glyphicon-wrench"></span>
			   		</button>
			   	@endif
		   		</div>
		   	</div>
		   </div>
		   <div class="row">
		   		<div class="col-lg-12">
		   			<div class="col-lg-12" style="background-color: black;">
		   				<h1>Criticas</h1>
		   			</div>
		   			<div class=" col-lg-12" style="background-color: black;">
		   				<table id="reviewTb" class="dataTable table-responsive col-xs-12">
		   					<thead>
		   						<tr>
		   							<th>Titulo</th>
		   							<th>Descripción</th>
		   							<th>Fecha de creación</th>
		   							<th>Acciones</th>
		   						</tr>
		   					</thead>
		   					<tbody>
		   						@if(count($posts)>0)
		   							@foreach ($posts as $post)
		   						<tr>
		   							<td style="background-image: url('{!! asset('uploads/Review/' . $post->portada) !!}');">
		   								<a href="/Review/{!! $post->id !!}">{!! $post->title !!}</a>
		   							</td>
		   							<td>{!! $post->description !!}</td>
		   							<td>asdasdsa</td>
		   							<td>
		   								<a href="/Review/{!! $post->id !!}/edit" class="col-xs-6 btn btn-warning"><i class="fa fa-pencil"></i> Editar</a>
		   								{!! Form::open(['route'=> ['Review.destroy', $post->id], 'method' => 'DELETE']) !!}
		   									<button type="submit" class="btn btn-danger col-xs-6"><i class="fa fa-trash"></i> Borrar</button>
		   								{!! Form::close() !!}
		   								
		   							</td>
		   						</tr>

		   							@endforeach
		   						@endif
		   						
		   					</tbody>
		   				</table>
		   			</div>
		   		</div>
		   		
		   </div>
	   </div>

	   <br>
	   <br>
	   <br>
	   <br>
	  

	   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Configuración</h4>
		      </div>
		      <div class="modal-body">
		      		<div class="form-horizontal">
						<input type="hidden" class="form-control" id="id" value="{!! Auth::user()->id !!}" >
		      			<div class="form-group">
		      				<label for="nombre" class="col-sm-2 control-label">Nombre</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="nombre" value="{!! $users[0]->name !!}" >
						    </div>
		      			</div>
		      			<div class="form-group">
		      				<label for="Apellido" class="col-sm-2 control-label">Apellido</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="Apellido" value="{!! $users[0]->last_name !!}">
						    </div>
		      			</div>
		      			<div class="form-group">
		      				<label for="email" class="col-sm-2 control-label">Email</label>
						    <div class="col-sm-10">
						      <input type="email" class="form-control" id="email" value="{!! $users[0]->email !!}">
						    </div>
		      			</div>
		          		<div class="form-group">
		          			<label for="perfil" class="col-sm-2 control-label">Fecha de nacimiento</label>
		    			    <div class="col-sm-10">
		    			      <input type="date" name="birth_day" class="form-control" id="birth" value="{{ $users[0]->birth_day }}">
		    			    </div>
		          		</div>
		      			<div class="form-group">
		      				<label for="perfil" class="col-sm-2 control-label">Contraseña</label>
						    <div class="col-sm-10">
						      <input type="password" class="form-control" id="pass">
						    </div>
		      			</div>
		      			<form action="{{ URL::to('upload') }}" method="post" enctype="multipart/form-data">
		      				<div class="form-group">
		      					<label for="perfil" class="col-sm-2 control-label">Perfil</label>
		      					<div class="col-sm-8">
		      					  <input type="file" name="file" class="form-control" id="perfil">
		      					</div>
		      					<div class="col-sm-2">
						    		<input type="submit" value="Subir" class="btn btn-warning col-xs-12" name="submit">
		      					</div>
		      				</div>
							<input type="hidden" value="{{ csrf_token() }}" name="_token">
		      			</form>

		      			<form action="{{ URL::to('uploadPortada') }}" method="post" enctype="multipart/form-data">
		      				<div class="form-group">
		      					<label for="perfil" class="col-sm-2 control-label">Portada</label>
		      					<div class="col-sm-8">
		      					  <input type="file" name="file" class="form-control" >
		      					</div>
		      					<div class="col-sm-2">
						    		<input type="submit" value="Subir" class="btn btn-warning col-xs-12" name="submit">
		      					</div>
		      				</div>
							<input type="hidden" value="{{ csrf_token() }}" name="_token">
		      			</form>
		      			      	
		      			{!! Form::open(['id'=>'forinculo', 'enctype'=> 'multipart/form-data', 'method'=> 'POST']) !!}
		      				<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
		      				<input type="hidden" name="_url" id="url" value="/prueba">
		      			{!! Form::close() !!}
		      		</div>
		      		
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
	<script src="{{ asset('js/datatables.min.js')}}"></script>

	<script>
		$(document).ready(function() {
		    $('#reviewTb').DataTable();
		} );
	</script>

@endsection

