<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Constructora Morandi, Casas - Apartamentos - Oficinas en Bogota</title>
    <meta name="description" content="Bienvenido a Morandi, encuentre una amplia oferta de exclusivos proyectos de vivienda en bogotá, con excelentes ubicaciones. Norte de bogotá, cajicá, chía."/>
    <link rel="stylesheet" href="/css/bootstrap.min.css" type='text/css' media='all'>
    <link rel="stylesheet" href="/css/main.css" type='text/css' media='all'>
    <link rel="stylesheet" href="/css/magnific-popup.css" type='text/css' media='all'>
    <link rel="stylesheet" href="/css/slick.css" type='text/css' media='all'>
    <link rel="stylesheet" href="/css/aos.css" type='text/css' media='all'>
    @stack('styles')
    
    <!--Start of Zendesk Chat Script-->
    <script type="text/javascript">
    window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
    d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
    _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
    $.src="https://v2.zopim.com/?4r7ffS91l65nzrkUN6raAJZxkNmoj0nC";z.t=+new Date;$.
    type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
    </script>
    <!--End of Zendesk Chat Script-->

</head>

<body>
    <div id="app">

   
      <nav class="navbar navbar-expand-lg navbar-light justify-content-end">
            <a class="navbar-brand" href="/"><img src="/img/logo.svg" alt="Morandi"></a>
            <span class="navbar-text justify-content-end">
                <a href="#" class="show-menu open-menu">MENU</a><a  target="_blank"  href="https://www.facebook.com/MorandiConstrucciones/" class="icon"><img src="/img/facebook-head.svg"></a><a  target="_blank" href="https://www.instagram.com/morandiconstrucciones/" class="icon"><img src="/img/instagram-head.svg"></a>
            </span>
            <div class="menu-float">
                <ul>
                    <li><a href="/" class="active">Inicio</a></li>
                    <li><a href="{{url('nosotros')}}">Nosotros</a></li>
                    <li class="has-children"><a href="#">Proyectos en Venta</a>
                        <ul class="sub">
                             <li><a href="{{url('proyecto/senior')}}">Senior Suites Guaymaral</a></li>
                             <li><a href="{{url('proyecto/fique')}}">Fique</a></li>
                             <li><a href="{{url('proyecto/caney')}}">Caney</a></li>
                            <li><a href="/proyecto/bosque">Bosque Montaña</a></li>
                            <li><a href="{{url('proyecto/oficinas_pietra')}}">Oficinas Pietra</a></li>
                            
                        </ul>
                    </li>
                    <li class="has-children"><a href="#">Proyectos Realizados</a>
                        <ul class="sub">
                            <li><a href="/realizados/114">114 Street</a></li>     
                            <li><a href="{{url('/realizados/pietra-apartamento')}}">Pietra Apartamentos</a></li>
                             <li><a href="{{url('/realizados/canelon')}}">Canelón</a></li>
                             <li><a href="{{url('/realizados/bambu')}}">Bambu</a></li>
                             <li><a href="{{url('/realizados/san-felipe')}}">San Felipe Reservado</a></li>
                             <li><a href="{{url('/realizados/hacienda-san-luis')}}">Hacienda San Luis</a></li>
                             <li><a href="{{url('/realizados/guaymaral')}}">Guaymaral reservado</a></li>  
                              <li><a href="{{url('/realizados/villas-san-felipe')}}">Villas de San Felipe</a></li>
                               <li><a href="{{url('/realizados/san-diego')}}">San Diego</a></li>
                                             
                        </ul>
                    </li>
                    
                    <li class="has-children"><a href="#">Avance de obra</a>
                        <ul class="sub">
                            <li><a href="/avance/bosque">Bosque Montaña</a></li>
                            <li><a href="{{url('/avance/senior')}}">Senior Suites Guaymaral</a></li>
                            <li><a href="{{url('/avance/caney')}}">Caney</a></li>
                            <li><a href="{{url('/avance/fique')}}">Fique</a></li>
                            <li><a href="{{url('/avance/oficinas-pietra')}}">Oficinas Pietra</a></li>
                            
                        </ul>
                    </li>
                    <li><a href="{{url('blog')}}">Blog Morandi</a></li>
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
