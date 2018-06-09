@extends('layouts.Main')

@section('estilos')
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
      <link rel="stylesheet" href="{{ asset('css/themes/fontawesome-stars.css') }}">
      <link rel="stylesheet" href="{{ asset('css/themes/bars-1to10.css') }}">
      <link rel="stylesheet" href="{{ asset('css/themes/bars-movie.css') }}">
      <link rel="stylesheet" href="{{ asset('css/themes/bars-horizontal.css') }}">
		<link rel="stylesheet" href="{{ asset('css/CrearCritica.css') }}">
		<link rel="stylesheet" href="{{ asset('css/Critica.css') }}">
@endsection

@section('title')
	<title>{!! $review[0]->title !!}</title>
@endsection

@section('content')
<style type="text/css">
   .br_selected{
      background-color: #f0ad4e !important;
   }
</style>

   <div class="container-fluid" style="margin-top: 70px;">

   	<div class="col-lg-12 text-center">
   		@if($maker[0]->perfil == "")
   		<img src="{{ asset('resources/Profile.jpg') }}" class="img-circle " style="height: 15px;">
   		@else
   		<img src="{{ asset('uploads/perfil/'.$maker[0]->perfil) }}" class="img-circle " style="height: 15px;">
   		@endif

   		<label style="color: white"><a href="/usuario/{!! $maker[0]->id !!}">{!! $maker[0]->name . ' ' . $maker[0]->last_name !!}</a></label>

   	</div>
   </div>

	
   <div class="portada-critica" style="background-image: url({!! asset('uploads/Review/' . $review[0]->portada) !!}); ">

   	<div class="Title-cr">
   		
   		<h1>{!! $review[0]->title !!}</h1>
   		
   	</div>
   </div>

   <div class="container-fluid cuerpo-crt">
 		<div class="row panel1">
 			<div class="col-xs-12 col-md-12 col-lg-10 col-lg-offset-1 ">
 				<div class="col-lg-6">
 					<label>
 						{!! $review[0]->block !!}
 					</label>
 				</div>
 				<div class="col-lg-6 img-panel" style="height: 450px;">
 					<div class="center-img-file">
 						<img src="{!! asset('uploads/Review/' . $review[0]->path_media) !!}" style="width: 100%;">
 					</div>
 				</div>
 			</div>
 			<div class="col-lg-1"></div>
 		</div>
 		<div class="row panel2">
 			<div class="col-xs-12 col-md-12 col-lg-10 col-lg-offset-1 ">
 				
 				<div class="col-lg-6 img-panel" style="height: 450px;">
 					<div class="center-img-file">
 						@if($review[0]->path_media2 !="")
 							<img src="{!! asset('uploads/Review/' . $review[0]->path_media2) !!}" style="width: 100%;">
 						@endif
 					</div>
 					
 				</div>
 				<div class="col-lg-6">
 					<label>
 						@if($review[0]->block2 !="")
 							{!! $review[0]->block2 !!}
 						@endif
 					</label>
 				</div>
 			</div>
 			<div class="col-lg-1"></div>
 		</div>
 		<div class="row panel3">
 			<div class="col-xs-12 col-md-12 col-lg-10 col-lg-offset-1 ">
 				<div class="col-lg-6">
 					<label>
 						@if($review[0]->block3 !="")
 							{!! $review[0]->block2 !!}
 						@endif
 					</label>
 				</div>
 				<div class="col-lg-6 img-panel" style="height: 450px;">
 					<div class="center-img-file">
 						@if($review[0]->path_media3 !="")
 							<img src="{!! asset('uploads/Review/' . $review[0]->path_media3) !!}" style="width: 100%;">
 						@endif
 					</div>
 				</div>
 			</div>
 			<div class="col-lg-1"></div>
 		</div>
   </div>

   <div class="container-fluid resultado">
   	<div class="row">
   		<div class="col-lg-6 col-lg-offset-3 cal-cont bi-lnd" >
   			<h1>{!! $review[0]->rate !!}/5</h1>
   			<h1 style="font-size: 15px; padding-top: 0">
               @switch($review[0]->rate)
                  @case(1)
                     Quemenlo y tirenlo al rio
                     @break
                  @case(2)
                     Carbonizado
                     @break 
                  @case(3)
                        Tibio...
                        @break
                  @case(4)
                     bien rostizado
                     @break
                  @case(5)
                     bien cocido!
                     @break
                  @default
                     Default case...
               @endswitch
               
            </h1>
   		</div>
   		<div class="col-lg-3"></div>
   	</div>
   </div>
   
   <div class="container-fluid">
   	<div class="row">
   		<div class="col-lg-offset-1 col-lg-10">
   			<div class="col-lg-12 rateflame">
   				

   			</div>
   		</div>
   	</div>
   </div>

   <div class="bottom-portada" style="background-image: url({!! asset('uploads/Review/' . $review[0]->portada) !!}); "></div>

   <div class="Comentarios-panel">
   	<div class="container-fluid">
   		<div class="row">
   			<div class="col-lg-12">
   				<div class="col-lg-12">
   				<div class="col-lg-12 comentarios-contenedor">
   					<div class="comentar">
                  {!!Form::open(['route' =>'Comment.store', 'method' => 'POST'])!!}

   						<textarea placeholder="Comenta" name="comentario"></textarea>
   						<button type="submit" class="btn pull-right btn-warning">OK</button>
                     <input type="hidden" name="post_id" value="{!! $review[0]->id !!}">
   						
                     <select id="example2" name="rating" name="rate" autocomplete="off">
                        <option value="1">Malo</option>
                        <option value="2">Mediocre</option>
                        <option value="3">OK</option>
                        <option value="4">Bueno</option>
                        <option value="5">Asombroso</option>
                     </select>

                  {!!Form::close()!!}

   					</div>


                  

   					@if(count($comentarios)>0)
   					@foreach ($comentarios as $comentario)

   					<div class="row comentario">
   						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 imgpnl">
   							<img class="img-circle" src="{!! asset('uploads/perfil/'. $comentario->perfil) !!}">
   						</div>
   						<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
   							<span class="pull-right">{!! $comentario->created_at !!}</span>
   							<h5><strong><a href="/usuario/{!! $comentario->user_id !!}">{!! $comentario->name !!}</a></strong></h5>
                        <div><h5><strong style="color: gold;">
                           @switch($comentario->rate)
                              @case(1)
                                 Malo
                                 @break
                              @case(2)
                                 Mediocre
                                 @break 
                              @case(3)
                                 OK
                                 @break
                              @case(4)
                                 Bueno
                                 @break
                              @case(5)
                                 Asombroso!
                                 @break
                              @default
                                 Default case...
                           @endswitch
                        </strong></h5></div>
   							
   							<p>{!! $comentario->description !!}</p>
   						</div>
   					</div>

   					@endforeach
   					@endif

   				</div>
   				</div>
   			</div>
   		</div>
   	</div>
   </div>

@endsection

@section('scripts')
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

	

@endsection
