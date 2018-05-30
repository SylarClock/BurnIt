

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="{{ asset('resources/favicon.ico') }}" /> 
    @yield('title')
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css')}}">
	@yield('estilos')


</head>
<body style="padding-top:53px">
    @if(!Auth::user())
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <img class="BurnItIcon" onclick="window.location.href = '/';" src="{{asset('resources/BurnItGradientColors.svg')}}">
                    
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    
                        <ul class="nav navbar-nav navbar-right">
                            <li><a id="iniSesBtn" style="cursor: pointer;">Iniciar Sesion</a></li>
                        </ul>
                    
                </div>
            </div>
        </nav>
      <div class="InicioSession">

        {!!Form::open(['route' =>'autent.store', 'method' => 'POST'])!!}

          <div class="form-group">
            <label  for="IniCorreo">Correo</label>
            <div class="input-group">
              <div class="input-group-addon" style="color: orange; background-color: black; border: black;"><i class="fa fa-user"></i></div>
                <input type="email" class="form-control" name="email" id="IniCorreo" placeholder="Correo">
            </div>
          </div>
          <div class="form-group">
            <label  for="IniPass">Contraseña</label>
            <div class="input-group">
              <div class="input-group-addon" style="color: orange; background-color: black; border: black;"><i class="fas fa-lock"></i></div>
                <input type="password" class="form-control" name="pass" id="IniPass" placeholder="Contraseña">

            </div>
          </div>
          <button type="submit" class="btn btn-success col-xs-12"><i class="fas fa-check-circle"></i></button>
      
        {!!Form::close()!!}
      </div>
    @else
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
             </button>
             <img class="BurnItIcon" onclick="window.location.href = '/';" src="{{asset('resources/BurnItGradientColors.svg')}}">
             
           </div>
           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div class="col-sm-6 col-md-6 col-lg-8">
                  <form class="navbar-form" role="search">
                  <div class="input-group" style="width: 100%;">
                      <input type="text" class="form-control" placeholder="Search" name="q">
                      <div class="input-group-btn">
                          <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                      </div>
                  </div>
                  </form>
              </div>
                <ul class="nav navbar-nav navbar-right">
                  <li><a href=""><span>+</span></a></li>
                <li><a href="#" class="profile">
                  <img src="{{ asset('resources/Profile.jpg') }}" class="img-circle ">
                  <span>{{ Auth::user()->name }}</span>
                </a></li>
                <li><a alt="Cerrar session" style="cursor: pointer;"><i class="fas fa-sign-out-alt"></i></a></li>
                </ul>
             
           </div>
        </div>
       </nav>
    @endif
	@yield('content')

    <script src="{{ asset('js/jquery.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>


    @yield('scripts')

</body>
</html>