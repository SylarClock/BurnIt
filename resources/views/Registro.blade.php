@extends('layouts.RegistroLayout')


@section('head')
    <!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="favicon.ico" /> 
    <title>Burn it - Registrarse</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css')}}">
<link rel="stylesheet" href="{{ asset('css/registro.css')}}">


    <script src="{{ asset('js/jquery.js')}}"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
</head>
<body>
@endsection

@section('navbarUnload')
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