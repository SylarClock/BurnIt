

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="favicon.ico" /> 
    @yield('title')
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css')}}">
	@yield('estilos')


    <script src="{{ asset('js/jquery.js')}}"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
</head>
<body style="padding-top:53px">
	@yield('navbar')
	@yield('content')

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>