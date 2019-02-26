<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Morandi</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css" type='text/css' media='all'>
    <link rel="stylesheet" href="/css/main.css" type='text/css' media='all'>
    @stack('styles')
</head>

<body>
        <nav class="navbar navbar-expand-lg navbar-light px-lg-5">
            <a class="navbar-brand" href="#"><img src="/img/logo.svg" width="70" alt="Morandi"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbarSupportedContent" class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item  {{request()->is('/') ? 'active':''}}">
                        <a class="nav-link" href="/">Inicio</a>
                    </li>
                    <li class="nav-item {{request()->is('nosotros') ? 'active':''}}">
                        <a class="nav-link" href="/nosotros">Nosotros</a>
                    </li>
                    <li class="nav-item dropdown {{request()->is('proyecto/senior-suites') ? 'active':''}}">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Proyectos</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/proyecto/senior-suites">Senior Suites</a>
                            <a class="dropdown-item" href="proyecto.html">Haus 114</a>
                            <a class="dropdown-item" href="proyecto.html">Bosque Montana</a>
                            <a class="dropdown-item" href="proyecto.html">Pietra - Oficinas</a>
                            <a class="dropdown-item" href="proyecto.html">Fique</a>
                            <a class="dropdown-item" href="proyecto.html">Caney</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Realizados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Avances obra</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Noticias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Postventa</a>
                    </li>
                </ul>
            </div>
        </nav>

           @yield('content')
            <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
            <script type="text/javascript" src="/js/bootstrap.bundle.min.js"></script>
            @stack('scripts')

        </body>

        </html>
