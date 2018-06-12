@yield('head')
    <!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="favicon.ico" /> 
    <title>Burn it</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css')}}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css')}}">

    <script src="{{ asset('js/jquery.js')}}"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
</head>
<body>
<script>
  $(document).ready(function(){
    $("#iniSesBtn").click(function(){
      $(".InicioSession").slideToggle('slow');
    });
  });
    
</script>
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
                <img class="BurnItIcon" src="resources/BurnItGradientColors.svg">
                
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
         <img class="BurnItIcon" src="resources/BurnItGradientColors.svg">
         
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
              <img src="resources/Profile.jpg" onclick="window.location.href = '/';" class="img-circle ">
              <span>{{ Auth::user()->name }}</span>
            </a></li>
            <li><a alt="Cerrar session" href="/logout" style="cursor: pointer;"><i class="fas fa-sign-out-alt"></i></a></li>
            </ul>
         
       </div>
    </div>
   </nav>
@endif

  


  <div class="jumbotron parallax" style="margin-bottom: 0">
    <div class="">
       <h3>Critica?</h3><h1 data-text="BURNIT" class="bg-img-txt">BURNIT</h1>
      <p>haz tu critica de una forma llamativa y compartela</p>
@if(!Auth::user())
      <p><a class="btn btn-warning btn-lg" href="usuario/create" role="button">Registrarse</a></p>
@endif
    </div>
   
</div>

<div id="c-mid" style="position: relative; margin-top: 0; height: 95vh;" class="invisble-sm visble-sm visible-md  visible-lg">
  <div class="container-fluid ">
    <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-md-12">
      <h1 class="h1-dmd text-center">Crea y busca reseñas de <a id="h-tt"></a> </h1>
    </div>
  </div>
    <div class="row">

      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="crystal-grid">
          <ul>
            <li class="item1" name="Libros"     ><div name="Libros"      class="bg"></div></li>
            <li class="item2" name="Comics"     ><div name="Comics"        class="bg"></div></li>
            <li class="item3" name="Videojuegos"><div name="Videojuegos"  class="bg"></div></li>
            <li class="item4" name="Peliculas"  ><div name="Peliculas"     class="bg"></div></li>
            <li class="item5" name="Series"     ><div name="Series"        class="bg"></div></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid visible-sm visible-xs invisble-lg invisble-md">
    <div class="row">
      <div class="col-sm-12 col-sm-12 rowImg">
        <img src="resources/p1.jpg">
        <h3>Libros </h3>
      </div>
      <div class="col-sm-12 col-sm-12 rowImg">
        <img src="resources/p2.png">
        <h3>Comics</h3>
      </div>
      <div class="col-sm-12 col-sm-12 rowImg">
        <img src="resources/prueba6.jpg">
        <h3>Videojuegos</h3>
      </div>
      <div class="col-sm-12 col-sm-12 rowImg">
        <img src="resources/p4.jpg">
        <h3>Peliculas</h3>
      </div>
      <div class="col-sm-12 col-sm-12 rowImg">
        <img src="resources/p5.jpg">
        <h3>Series</h3>
      </div>
      
    </div>
  </div>
<div style="height: 95vh;  margin-top: 20px;" class="bg-grey">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 analiza-lnd">
        <svg class="svg-lines-cnt" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 595.28 595.28" enable-background="new 0 0 595.28 595.28" xml:space="preserve">
        <g id="Capa_2">
        </g>
        <g id="Capa_1">
          <g>
            <path class="svg-lines" fill="none" stroke="#000000" stroke-miterlimit="10" d="M259.749,530.299C89.68,458.19,132.538,312.611,168.592,256.149"/>
            <path class="svg-lines" fill="none" stroke="#000000" stroke-miterlimit="10" d="M178.116,312.611c-25.17-14.971-7.268-56.462-9.524-56.462"/>
            <path class="svg-lines" fill="none" stroke="#000000" stroke-miterlimit="10" d="M178.116,312.611c19.728-117.006,165.306-132.313,87.755-264.625"/>
            <path class="svg-lines" fill="none" stroke="#000000" stroke-miterlimit="10" d="M265.871,47.986c71.428,78.912,76.191,75.85,127.891,151.701"/>
            <path class="svg-lines" fill="none" stroke="#000000" stroke-miterlimit="10" d="M393.762,199.687c0,6.368,17.688-31.292-4.081-54.422"/>
            <path class="svg-lines" fill="none" stroke="#000000" stroke-miterlimit="10" d="M389.681,145.265c118.367,101.361,67.347,256.463,55.782,276.19"/>
            <path class="svg-lines" fill="none" stroke="#000000" stroke-miterlimit="10" d="M445.463,421.455c-20.408,47.619-70.979,71.883-73.47,108.844"/>
            <path class="svg-lines" fill="none" stroke="#000000" stroke-miterlimit="10" d="M371.993,530.299c4.082-60.544,20.396-57.823,36.735-108.844"/>
            <path class="svg-lines" fill="none" stroke="#000000" stroke-miterlimit="10" d="M408.729,421.455c2.721-65.306-36.735-131.973-56.463-148.299"/>
            <path class="svg-lines" fill="none" stroke="#000000" stroke-miterlimit="10" d="M352.266,273.156c14.285,116.327-170.068,166.667-92.517,257.143"/>
            <path class="svg-lines" fill="none" stroke="#000000" stroke-miterlimit="10" d="M186.279,230.299c9.713-21.156,47-37.415,54.35-50"/>
            <path class="svg-lines" fill="none" stroke="#000000" stroke-miterlimit="10" d="M240.628,180.299c-34.712-28.363-8.526-77.869-36.905-88.784"/>
            <path class="svg-lines" fill="none" stroke="#000000" stroke-miterlimit="10" d="M203.724,91.515c16.609,13.533-10.737,65.416-17.445,138.784"/>
          </g>
        </g>
        </svg>
        <h1>ANALIZA</h1>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 up-lnd">
          <svg style="opacity: 0" class="svg-lines-cnt" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 595.28 595.28" enable-background="new 0 0 595.28 595.28" xml:space="preserve">
              <g id="Capa_2">
              </g>
              <g id="Capa_1">
                <g>
                  <path class="svg-lines" fill="none" stroke="#000000" stroke-miterlimit="10" d="M259.749,530.299C89.68,458.19,132.538,312.611,168.592,256.149"/>
                  <path class="svg-lines" fill="none" stroke="#000000" stroke-miterlimit="10" d="M178.116,312.611c-25.17-14.971-7.268-56.462-9.524-56.462"/>
                  <path class="svg-lines" fill="none" stroke="#000000" stroke-miterlimit="10" d="M178.116,312.611c19.728-117.006,165.306-132.313,87.755-264.625"/>
                  <path class="svg-lines" fill="none" stroke="#000000" stroke-miterlimit="10" d="M265.871,47.986c71.428,78.912,76.191,75.85,127.891,151.701"/>
                  <path class="svg-lines" fill="none" stroke="#000000" stroke-miterlimit="10" d="M393.762,199.687c0,6.368,17.688-31.292-4.081-54.422"/>
                  <path class="svg-lines" fill="none" stroke="#000000" stroke-miterlimit="10" d="M389.681,145.265c118.367,101.361,67.347,256.463,55.782,276.19"/>
                  <path class="svg-lines" fill="none" stroke="#000000" stroke-miterlimit="10" d="M445.463,421.455c-20.408,47.619-70.979,71.883-73.47,108.844"/>
                  <path class="svg-lines" fill="none" stroke="#000000" stroke-miterlimit="10" d="M371.993,530.299c4.082-60.544,20.396-57.823,36.735-108.844"/>
                  <path class="svg-lines" fill="none" stroke="#000000" stroke-miterlimit="10" d="M408.729,421.455c2.721-65.306-36.735-131.973-56.463-148.299"/>
                  <path class="svg-lines" fill="none" stroke="#000000" stroke-miterlimit="10" d="M352.266,273.156c14.285,116.327-170.068,166.667-92.517,257.143"/>
                  <path class="svg-lines" fill="none" stroke="#000000" stroke-miterlimit="10" d="M186.279,230.299c9.713-21.156,47-37.415,54.35-50"/>
                  <path class="svg-lines" fill="none" stroke="#000000" stroke-miterlimit="10" d="M240.628,180.299c-34.712-28.363-8.526-77.869-36.905-88.784"/>
                  <path class="svg-lines" fill="none" stroke="#000000" stroke-miterlimit="10" d="M203.724,91.515c16.609,13.533-10.737,65.416-17.445,138.784"/>
                </g>
              </g>
        </svg>
          <img src="resources/BurnItGradientColors.svg" class="img-circle svg-clip" style="width: 90%; background: black;">
          <h1>SUBELO</h1>
       
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 bi-lnd text-center up-lnd" style="position: relative;">
          <svg style="opacity: 0" class="svg-lines-cnt" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
            x="0px" y="0px" viewBox="0 0 595.28 595.28" enable-background="new 0 0 595.28 595.28" xml:space="preserve">
                <g id="Capa_2">
                </g>
                <g id="Capa_1">
                  <g>
                    <path class="svg-lines" fill="none" stroke="#000000" stroke-miterlimit="10" d="M259.749,530.299C89.68,458.19,132.538,312.611,168.592,256.149"/>
                    <path class="svg-lines" fill="none" stroke="#000000" stroke-miterlimit="10" d="M178.116,312.611c-25.17-14.971-7.268-56.462-9.524-56.462"/>
                    <path class="svg-lines" fill="none" stroke="#000000" stroke-miterlimit="10" d="M178.116,312.611c19.728-117.006,165.306-132.313,87.755-264.625"/>
                    <path class="svg-lines" fill="none" stroke="#000000" stroke-miterlimit="10" d="M265.871,47.986c71.428,78.912,76.191,75.85,127.891,151.701"/>
                    <path class="svg-lines" fill="none" stroke="#000000" stroke-miterlimit="10" d="M393.762,199.687c0,6.368,17.688-31.292-4.081-54.422"/>
                    <path class="svg-lines" fill="none" stroke="#000000" stroke-miterlimit="10" d="M389.681,145.265c118.367,101.361,67.347,256.463,55.782,276.19"/>
                    <path class="svg-lines" fill="none" stroke="#000000" stroke-miterlimit="10" d="M445.463,421.455c-20.408,47.619-70.979,71.883-73.47,108.844"/>
                    <path class="svg-lines" fill="none" stroke="#000000" stroke-miterlimit="10" d="M371.993,530.299c4.082-60.544,20.396-57.823,36.735-108.844"/>
                    <path class="svg-lines" fill="none" stroke="#000000" stroke-miterlimit="10" d="M408.729,421.455c2.721-65.306-36.735-131.973-56.463-148.299"/>
                    <path class="svg-lines" fill="none" stroke="#000000" stroke-miterlimit="10" d="M352.266,273.156c14.285,116.327-170.068,166.667-92.517,257.143"/>
                    <path class="svg-lines" fill="none" stroke="#000000" stroke-miterlimit="10" d="M186.279,230.299c9.713-21.156,47-37.415,54.35-50"/>
                    <path class="svg-lines" fill="none" stroke="#000000" stroke-miterlimit="10" d="M240.628,180.299c-34.712-28.363-8.526-77.869-36.905-88.784"/>
                    <path class="svg-lines" fill="none" stroke="#000000" stroke-miterlimit="10" d="M203.724,91.515c16.609,13.533-10.737,65.416-17.445,138.784"/>
                  </g>
                </g>
          </svg>
        <h1>BURNIT</h1>
      </div>
    </div>
    
  </div>
</div>

<script type="text/javascript">
  $(".crystal-grid ul li").hover(function(){
      
      var txt = $(this).find('div').attr('name');
      var bg = $(this).find('.bg').css('background-image');
      bg = bg.replace('url(','').replace(')','');
      var bgimg= bg.split("/");
      var num = bgimg.length - 1;
      var path = "url('resources/" + bgimg[num].replace('"', '')+ "')";

      $("#c-mid").css({'background-image': path, 'background-size': 'cover'});

       $("#h-tt").html(txt);
     
  });
</script>
  

</body>
</html>