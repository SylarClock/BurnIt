@extends('layouts.Main')


@section('title')
	<title>Agregar Post</title>
@endsection

@section('estilos')
   <link rel="stylesheet" href="{{ asset('css/themes/fontawesome-stars.css') }}">
   <link rel="stylesheet" href="{{ asset('css/themes/bars-1to10.css') }}">
   <link rel="stylesheet" href="{{ asset('css/themes/bars-movie.css') }}">
   <link rel="stylesheet" href="{{ asset('css/themes/bars-horizontal.css') }}">
	<link rel="stylesheet" href="{{ asset('css/CrearCritica.css')}}">
@endsection

@section('content')

   {!!Form::open(['route' =>'Review.store', 'method' => 'POST', 'enctype'=>'multipart/form-data'])!!}  
   <button type="button" class="btn btn-success guardarbtn" data-toggle="modal" data-target="#myModal">Guardar</button>

   <div class="container-fluid" style="margin-top: 70px;">

   	<div class="col-lg-12 col-md-12 col-xs-12 text-center">
         @if(Auth::user()->perfil == "")
            <img src="{{ asset('resources/Profile.jpg') }}" class="img-circle " style="height: 15px;">
         @else
            <img src="{{ asset('uploads/perfil/'. Auth::user()->perfil) }}" class="img-circle" style="height: 15px;">
         @endif
   		<label style="color: white">Nombre Usuario</label>

   	</div>
   </div>

	<input type="file" name="portada1" id="backCover" required>
   <div class="portada-critica" style="background-image: url({{ asset('resources/here.jpg') }});" id="bckg_1">
   	
   	<div style="color:white; font-size: 35px; position: absolute; top: 25px; left: 10px;
   	">
   		<span class="glyphicon glyphicon-camera"></span>
   	</div>

   	<div class="Title-cr">
   		<div class="tooltip" role="tooltip" style="top:25%; right: 50%; transform: translateX(50%); opacity: 1;">
   			<div class="tooltip-arrow" style="left: 50%"></div>
   			<div class="tooltip-inner">Titulo</div>
   		</div>
   		<input type="text" name="title" id="Titulo" required>
   		
   	</div>
   </div>

   <div class="container-fluid cuerpo-cr">
 		<div class="row panel1">
 			<div class="col-xs-12 col-md-12 col-lg-10 col-lg-offset-1 ">
 				<div class="col-lg-6">
 					<textarea placeholder="Requerido" name="bloq1" class="panel1txt" id="bloqTxt1" required></textarea>
 				</div>
 				<div class="col-lg-6 img-panel" style="height: 450px;">
 					<div class="center-img-file">
 						<img src="{{ asset('resources/here.jpg') }}" id="img_1">
 					</div>
 					<input type="file" name="file1" id="imgFile1"required>
 					
 				</div>
 			</div>
 			<div class="col-lg-1"></div>
 		</div>
 		<div class="row panel2">
 			<div class="col-xs-12 col-md-12 col-lg-10 col-lg-offset-1 ">
 				
 				<div class="col-lg-6 img-panel" style="height: 450px;">
 					<div class="center-img-file">
 						<img src="{{ asset('resources/here.jpg') }}" id="img_2">
 					</div>
 					<input type="file" name="file2" id="imgFile2">
 					
 				</div>
 				<div class="col-lg-6">
 					<textarea placeholder="opcional" name="bloq2" class="panel1txt" id="bloqTxt2"></textarea>
 				</div>
 			</div>
 			<div class="col-lg-1"></div>
 		</div>
 		<div class="row panel3">
 			<div class="col-xs-12 col-md-12 col-lg-10 col-lg-offset-1 ">
 				<div class="col-lg-6">
 					<textarea placeholder="opcional" name="bloq3" class="panel1txt" id="bloqTxt3"></textarea>
 				</div>
 				<div class="col-lg-6 img-panel" style="height: 450px;">
 					<div class="center-img-file">
 						<img src="{{ asset('resources/here.jpg') }}" id="img_3">
 					</div>
 					<input type="file" name="file3" id="imgFile3">
 					
 				</div>
 			</div>
 			<div class="col-lg-1"></div>
 		</div>
   </div>

   <div class="container-fluid resultado">
   	<div class="row">
   		<div class="col-lg-6 col-lg-offset-5 col-md-6 col-md-offset-5 col-sm-6 col-sm-offset-5 col-xs-12 col-xs-offset-2 cal-cont" >
            <select id="example2" name="calificacion" autocomplete="off">
               <option value="1">Malo</option>
               <option value="2">Mediocre</option>
               <option value="3">OK</option>
               <option value="4">Bueno</option>
               <option value="5">Asombroso</option>
            </select>

   		</div>
   		<div class="col-lg-3"></div>
   	</div>
   </div>
   

   <div class="bottom-portada" style="background-image: url(resources/prueba2.jpg); " id="bckg_2"></div>


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
					      <input type="text" class="form-control" id="descrip" name="descripcion" required>
					    </div>
	      			</div>
	      		</div>
               <div class="form-horizontal">
                  <div class="form-group">
                     <label for="nombre" class="col-sm-2 control-label">Categoria</label>
                   <div class="col-sm-10">
                     <select id="example2" name="categoria" class="form-control col-xs-12" autocomplete="off">
                     
                     @if(count($categories)>0)
                     @foreach ($categories as $categoria)
                        <option value="{!! $categoria->id !!}">{!! $categoria->name !!}</option>
                     @endforeach
                     @endif
                     </select>
                   </div>
                  </div>
                  
               </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
	        <button type="submit" class="btn btn-primary" id="publicar">Publicar Critica</button>
	      </div>
	    </div>
	  </div>
	</div>
   {!!Form::close()!!}
@endsection


@section('scripts')
	<script src="{{ asset('js/makeReview.js')}}"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
   <script src="{{ asset('js/jquery.barrating.min.js') }}"></script>
   <script type="text/javascript">
     $(function() {
        $('#example').barrating({
          theme: 'bars-movie',
          initialRating: '1',
          showSelectedRating: true,
        });
      });
     $(function() {
        $('#example2').barrating({
          theme: 'bars-1to10',
          
        });
      });
   </script>

	 <script src="{{ asset('js/validacionesForm.js')}}"></script>

@endsection