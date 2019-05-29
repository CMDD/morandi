@extends('layouts.web')
@section('content')
    <div class="cover to-left">
        <div class="outer">
            <div class="inner" style="background-image: url(/images/guaymaral/banner.jpg);"></div>
        </div>
        <img class="logo" src="/images/guaymaral/logo-01.png">
    </div>
    <div class="container-fluid">
        <div class="row align-items-center my-5">
            <div class="col-lg-7 col-xl-6 subtitle">
                
                <h3><span class="top">un Ambiente campestre muy  </span> cerca de la <span class="bottom">ciudad</span>
                </h3>
            </div>
            <div class="col-lg-5 description">
                <p> Conjunto de 99 casas de 3 niveles con 2 tipos de diseño, en donde se destacaban los amplios espacios, terrazas en todo el rededor del 3er piso de las casas. En el conjunto se puede disfrutar de club house con sauna, turco, salón de eventos, zonas verdes, cancha de tenis, parque infantil y cinema.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col p-0 full-img">
                <!--<img src="img/img-proyecto-01.jpg">-->
                <!-- <div class="video-embed">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/lDU9mnCvuoQ" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div> -->
                <br>
                
            </div>
        </div>
        
        <div class="row gallery">
            <div class="col-sm-8 gallery-1">
                <div class="gallery-item he1"><a href="/images/guaymaral/1.jpg"
                        style="background-image: url(/images/guaymaral/1.jpg);"></a></div>
                <div class="gallery-item wi2l he2"><a href="/images/guaymaral/2.jpg"
                        style="background-image: url(/images/guaymaral/2.jpg);"></a></div>
                <div class="gallery-item wi2r he2"><a href="/images/guaymaral/3.jpg"
                        style="background-image: url(/images/guaymaral/3.jpg);"></a></div>
            </div>
            <div class="col-sm-4 gallery-2">
                <div class="gallery-item he2"><a href="/images/guaymaral/4.jpg" style="background-image: url(/images/guaymaral/4.jpg);"></a>
                </div>
                <div class="gallery-item he3"><a href="/images/guaymaral/5.jpg" style="background-image: url(/images/guaymaral/5.jpg);"></a>
                </div>
                <div class="gallery-item he4"><a href="/images/guaymaral/6.jpg"
                        style="background-image: url(/images/guaymaral/6.jpg);"></a></div>
            </div>
            <div class="gallery-hide">
                <!-- <a href="/images/bosque/galeria/7.jpg"></a> -->
                <!-- <a href="/images/bosque/galeria/8.jpg"></a> -->
                <!-- <a href="/images/bosque/galeria/1.jpg"></a>
                <a href="/images/bosque/galeria/9.jpg"></a>
                <a href="/images/bosque/galeria/11.jpg"></a>
                <a href="/images/bosque/galeria/12.jpg"></a>
                <a href="/images/bosque/galeria/13.jpg"></a> -->

            </div>
        </div>

        
    </div>
    @include('layouts.footer')
@stop

@push('styles')
<link rel="stylesheet" href="/css/proyecto.css" type='text/css' media='all'>
<link rel="stylesheet" href="/css/magnific-popup.css" type='text/css' media='all'>
<style>
   .sites h3{
       color: white;
   }
   .sites{
       background: #391700;
   }
   .logo{
       width: 15%;
   }
   
</style>
@endpush
@push('scripts')


@endpush
