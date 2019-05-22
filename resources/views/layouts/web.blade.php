<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Morandi</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css" type='text/css' media='all'>
    <link rel="stylesheet" href="/css/main.css" type='text/css' media='all'>
    <link rel="stylesheet" href="/css/magnific-popup.css" type='text/css' media='all'>
    <link rel="stylesheet" href="/css/slick.css" type='text/css' media='all'>
    <link rel="stylesheet" href="/css/aos.css" type='text/css' media='all'>
    @stack('styles')
    
</head>

<body>
    <div id="app">

   
      <nav class="navbar navbar-expand-lg navbar-light justify-content-end">
            <a class="navbar-brand" href="/"><img src="/img/logo.svg" alt="Morandi"></a>
            <span class="navbar-text justify-content-end">
                <a href="#" class="show-menu open-menu">MENU</a><a href="#" class="icon"><img src="/img/facebook-head.svg"></a><a href="#" class="icon"><img src="/img/instagram-head.svg"></a>
            </span>
            <div class="menu-float">
                <ul>
                    <li><a href="/" class="active">Inicio</a></li>
                    <li><a href="{{url('nosotros')}}">Nosotros</a></li>
                    <li class="has-children"><a href="#">Proyectos</a>
                        <ul class="sub">
                            <li><a href="/proyecto/bosque">Bosque Montaña</a></li>
                            <li><a href="{{url('proyecto/senior')}}">Senior Suites</a></li>
                            <li><a href="{{url('proyecto/caney')}}">Caney</a></li>
                            <li><a href="{{url('proyecto/fique')}}">Fique</a></li>
                            <li><a href="{{url('proyecto/oficinas_pietra')}}">Oficinas Pietra</a></li>
                            
                        </ul>
                    </li>
                    <li class="has-children"><a href="#">Proyectos Realizados</a>
                        <ul class="sub">
                            <li><a href="/realizados/114">114</a></li>
                            <li><a href="{{url('/realizados/canelon')}}">Canelon</a></li>
                            <li><a href="{{url('/realizados/san-diego')}}">San Diego</a></li>
                            <li><a href="{{url('/realizados/bambu')}}">Bambu</a></li>
                            <li><a href="{{url('/realizados/villas-san-felipe')}}">Villas de san felipe</a></li>
                            <li><a href="{{url('/realizados/san-felipe')}}">san felipe</a></li>
                            <li><a href="{{url('/realizados/guaymaral')}}">Guaymaral</a></li>
                            <li><a href="{{url('/realizados/hacienda-san-luis')}}">Hacienda san luis</a></li>                       
                        </ul>
                    </li>
                    
                    <li><a href="#">Avances obra</a></li>
                    <li><a href="/blog">Blog Morandi</a></li>
                    <li><a href="{{url('postventa')}}">Postventa</a></li>
                </ul>
            </div>
        </nav>

           @yield('content')
        </div>
             <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
            <script type="text/javascript" src="/js/bootstrap.bundle.min.js"></script>
            <script type="text/javascript" src="/js/main.js"></script>
              <script type="text/javascript" src="/js/jquery.magnific-popup.min.js"></script>
            <script type="text/javascript" src="/js/slick.min.js"></script>
            <script type="text/javascript" src="/js/aos.js"></script>
            <script src="/js/app.js"></script>
            @stack('scripts')

        </body>

        </html>
