@extends('layouts.Main')

@section('title')
	<title>Agregar Post</title>
@endsection

@section('estilos')
	<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')

	   <div class="slideshow">
            <ul class="slider">
            @if(count($bests)>0)
            	@foreach ($bests as $best)
                	<li>
                	    <img src="{{ asset('uploads/Review/'. $best->portada) }}">
                	    <section class="caption">
                	        <h1>{!! $best->title !!}</h1>
                	        <p>{!! $best->description !!}</p>
                	        <div>
                	        @if($best->perfil !="")
                	        	<img class="img-circle" src="{!! asset('uploads/perfil/' . $best->perfil) !!}"><strong>{!! $best->nombre !!}</strong>
                	        @else
                	        	<img class="img-circle" src="{{ asset('resources/Profile.jpg') }}"><strong>{!! $best->nombre !!}</strong>
                	        @endif
                	        </div>
                	        <a href="/Review/{!! $best->id !!}" class="btn btn-warning">
                	        	<span class="glyphicon glyphicon-eye-open"></span>
                	        </a>
                	    </section>
                	</li>
          		@endforeach
          	@endif
                
                <!-- <li>
                    <div id="vid"><video muted autoplay loop><source src="resources/DestructibleBP1%20Vista%20preliminar%20del%20juego%20Standalone%20(64-bit_PCD3D_SM5)%2014_04_2017%2010_24_33.mp4"></video></div>
                    <section class="caption">
                        <h1>Lorem ipsum</h1>
                        <p>Loremsalkd alksjdaj  aksld askdjlajsdl  askd asdkla asdja  asd sdlkfj  sdkfjs ds</p>
                    </section>
                </li> -->
            </ul>
            <ol class="pagination">
            </ol>
        </div>

	   <!-- END OF SLIDERLION -->

	   <div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 text-center">
					<h2 style="color: gold">Ultimos Agregados</h2>
				</div>
				<div class="col-xs-12 mstView-ctnr">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ctnr-view">
						<div class="todo col-lg-12">

					@if(count($lastest)>0)
						@foreach ($lastest as $last)
							<div class="item-mst-list col-lg-12" style="background-image: url('{!! asset('uploads/Review/' . $last->portada) !!}');">
								<div class="col-xs-2 col-md-2 col-sm-2 col-lg-2 img-ctr-list item-mst-prof">
									@if($last->perfil !="")
										<img class="img-circle" src="{!! asset('uploads/perfil/' . $last->perfil) !!}">
									@else
										<img class="img-circle" src="{!! asset('resources/Profile.jpg') !!}">
									@endif
								</div>
								<div class="col-xs-10 col-md-10 col-sm-10 col-lg-10">
					
									<h5> {!! $last->title !!}</h5>
									<p> {!! $last->description !!}</p>

									<span class="fire_letter">
										<span></span>
										@switch($last->rate)
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
										     
										@endswitch
									
									</span>
									
									<label class="pull-right">Comentarios: {!! $last->comentarios !!}</label><br>
									<a href="/Review/{!! $last->id !!}" class="btn btn-warning col-lg-1 col-md-1 col-sm-1 col-xs-12" style="margin-top: 5px;"><span class="glyphicon glyphicon-eye-open"></span></a>
								</div>
							</div>
						@endforeach
					@endif



						</div>
						
						
						
					</div>
				</div>
			</div>
	   		
	   </div>

@endsection

@section('scripts')
	<script src="{{ asset('js/lastlanding.js')}}"></script>
@endsection

