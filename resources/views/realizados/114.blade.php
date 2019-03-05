@extends('layouts.web')
@section('content')
    <div class="cover" style="background-image: url(/img/cover-example-01.jpg);">
        <img class="logo" src="/img/brand-02.svg">
    </div>
    <div class="container-fluid">
        <div class="row align-items-center my-3">
            <div class="col-lg-7">
                <img src="/img/draw.png">
            </div>
            <div class="col-lg-4">
                <h3 class="subtitle"><span class="top">Disfruta de un lugar</span> privilegiado <span class="bottom">en la ciudad</span></h3>
                <p>Ubicado estratégicamente en el sector residencial de chico-navarra. Rodeado de un paisaje urbano y zonas verdes que invitan a disfrutar de la ciudad.<br>Es un edificio de 6 pisos, con 19 apartamentos a partir del 2do nivel y terraza panorámica en el séptimo, ascensor y zona para gimnasio. 4 tipos de apartamentos en cada nivel en los que se destacan modernos espacios abiertos, ventanas piso techo y vista exterior en todos los apartamentos.</p>
            </div>
        </div>
        <div class="row align-items-center list-video">
            <div class="col-md-4 info-realizados">
                <h2>EL LUGAR DONDE SIEMPRE SOÑASTE VIVIR!</h2
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tristique, nisl non maximus imperdiet, nisi diam pharetra sem, vel fermentum libero ante eu ex. Aliquam eu egestas augue, eu ornare diam.</p>
            </div>
            <div class="col-md-8 p-0">
                <div class="video-embed">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/lDU9mnCvuoQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
        
   
        <div class="row caja-galeria">
            <div class="col p-0">
                <div class="gallery grid">
                    <div class="grid-size"></div>
                    <div class="grid-gutter"></div>
                    <div class="grid-item grid-first"><a href="/img/cover-example-01.jpg" style="background-image: url(/img/cover-example-01.jpg);"></a></div>
                    <div class="grid-item grid-h2"><a href="/img/cover-example-01.jpg" style="background-image: url(/img/cover-example-01.jpg);"></a></div>
                    <div class="grid-item"><a href="/img/img-01.jpg" style="background-image: url(/img/img-01.jpg);"></a></div>
                    <div class="grid-item grid-w2 grid-h2"><a href="/img/slide-example.jpg" style="background-image: url(/img/slide-example.jpg);"></a></div>
                    <div class="grid-item grid-w2 grid-h2"><a href="/img/video-cover-example.jpg" style="background-image: url(/img/video-cover-example.jpg);"></a></div>
                    <div class="gallery-hide">
                        <a href="/img/brand-02.svg"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            
        </div>
     
        
    </div>
    @include('layouts.footer')
@stop

@push('styles')
<link rel="stylesheet" href="/css/proyecto.css" type='text/css' media='all'>
<link rel="stylesheet" href="/css/realizados.css" type='text/css' media='all'>
<link rel="stylesheet" href="/css/magnific-popup.css" type='text/css' media='all'>
@endpush
@push('scripts')
<script type="text/javascript" src="/js/main.js"></script>
<script type="text/javascript" src="/js/isotope.min.js"></script>
<script type="text/javascript" src="/js/jquery.magnific-popup.min.js"></script>

@endpush
