<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SOT-NET</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased" style="background-color:#bdd5ff">
    <div class="container text-center m-2 p-2">
        <div class="row">
            <div class="col-1">
            
            </div>
            <div class="col-11">
                <nav class="navbar navbar-expand-lg" >
                    <div class="container-fluid">
                        <nav class="navbar bg-body-tertiary">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="{{ url('/') }}">
                                <img src="{{asset('images/logo.jpg')}}" alt="Logo" width="180" height="80" class="d-inline-block align-text-top">
                                </a>
                            </div>
                        </nav>
                        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                        <ul class="navbar-nav ">
                            <li class="nav-item">
                            <a class="nav-link text-muted" href="{{url('inicio/ofertas')}}">Ofertas</a>
                            </li>
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Acerca de
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{url('inicio/informacion')}}">Información</a></li>
                                <li><a class="dropdown-item" href="{{url('inicio/mapa')}}">Mapa de cobertura</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="{{url('inicio/licencias')}}">Licencias y detalles</a></li>
                            </ul>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link active text-muted" href="{{ route('services.index') }}">Servicios</a>
                            </li>
                        </ul>
                        </div>
                    </div>
                    
                </nav>
            </div>
        </div>
    </div>
    <div class="pt-5 text-center" style="background-color:#bdd5ff">
    <div class="container">
      <div class="row">
        <div class="col-md-9 mx-auto">
          <h1 class="display-4">SOT-NET</h1>
          <p class="lead">Sot-net es una empresa que ofrece servicios de internet de alta velocidad.<br>Te ofrecemos diferentes paquetes:</p>
        </div>
      </div>
    </div>
  </div>
    <div class="text-center" style="background-color:#bdd5ff">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">Básico</h4>
            </div>
            <div class="card-body">
              <h1><b>$300&nbsp;</b><small class="text-muted">/ mes</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>10 MB de velocidad</li>
                <li>Seguridad de navegación</li>
                <li>Descargas ilimitadas</li>
                <li>Costo de instalación a partir de $1500</li>
              </ul>
              <button type="button" class="btn btn-lg btn-block btn-primary">Contratar</button>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">Intermedio</h4>
            </div>
            <div class="card-body">
              <h1><b>$400&nbsp;</b><small class="text-muted">/ mes</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>20 MB de velocidad</li>
                <li>Seguridad de navegación</li>
                <li>Descargas ilimitadas</li>
                <li>Servicio de television</li>
              </ul>
              <button type="button" class="btn btn-lg btn-block btn-primary">Contratar</button>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">De negocio</h4>
            </div>
            <div class="card-body">
              <h1><b>$600&nbsp;</b><small class="text-muted">/ mes</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>30 MB de veocidad</li>
                <li>Servicio de televisión</li>
                <li>Equipo para conectar varios dispositivos</li>
                <li>Seguridad de navegación</li>
              </ul>
              <button type="button" class="btn btn-lg btn-block btn-primary">Contratar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container text-center m-2 p-2">
        <div class="row">
            <div class="col-2">
            
            </div>
            <div class="col-10 text-center" style="background-color:#bdd5ff">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <h3>Conexión rápida</h3>
                    <p>Sot-net te ofrece internet de la mejor calidad</p>
                <img src="{{asset('images/navegacion.jpg')}}" class="d-block w-100" alt="...">
                    
                </div>
                <div class="carousel-item">
                <h3>Descargas ilimitadas</h3>
                    <p>Descarga cualquier cosa, el único límite es el cielo.</p>
                <img src="{{asset('images/navegador.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <h3>Seguridad de navegación</h3>
                    <p>Navega con seguridad, sin preocuparte de ataques ciberneticos</p>
                <img src="{{asset('images/seguridad.jpg')}}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
         </div>
            </div>
            <div class="col-1">
            </div>
        </div>
    </div>
        
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="btn btn-outline-info">Inicio</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-info">Iniciar sesión</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-outline-info">Registro</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </body>
</html>
