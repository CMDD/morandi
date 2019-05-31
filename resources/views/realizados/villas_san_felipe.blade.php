@extends('layouts.web')
@section('content')
    <div class="cover to-left">
        <div class="outer">
            <div class="inner" style="background-image: url(/images/villasanfelipe/banner.jpg);"></div>
        </div>
        <img class="logo" src="/images/villasanfelipe/logo-01.png">
    </div>
    <div class="container-fluid">
        <div class="row align-items-center my-5">
            <div class="col-lg-7 col-xl-6 subtitle" data-aos-delay="100" data-aos="zoom-out-right">
                
                <h3><span class="top">el nuevo aire de  </span>  <span class="bottom">Chía</span>
                </h3>
            </div>
            <div class="col-lg-5 description" data-aos-delay="200" data-aos="zoom-in-up">
                <p>Conjunto de 76 casas de 3 niveles, un diseño atractivo con una excelente distribución de los espacios, motivo por el cual se lanzó una segunda etapa de este proyecto. El conjunto cuenta con salón social y parque infantil.

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
                <div class="gallery-item he1"><a href="/images/villasanfelipe/1.jpg"
                        style="background-image: url(/images/villasanfelipe/1.jpg);"></a></div>
                <div class="gallery-item wi2l he2"><a href="/images/villasanfelipe/2.jpg"
                        style="background-image: url(/images/villasanfelipe/2.jpg);"></a></div>
                <div class="gallery-item wi2r he2"><a href="/images/villasanfelipe/3.jpg"
                        style="background-image: url(/images/villasanfelipe/3.jpg);"></a></div>
            </div>
            <div class="col-sm-4 gallery-2">
                <div class="gallery-item he2"><a href="/images/villasanfelipe/4.jpg" style="background-image: url(/images/villasanfelipe/4.jpg);"></a>
                </div>
                <div class="gallery-item he3"><a href="/images/villasanfelipe/2.jpg" style="background-image: url(/images/villasanfelipe/2.jpg);"></a>
                </div>
                <div class="gallery-item he4"><a href="/images/villasanfelipe/1.jpg"
                        style="background-image: url(/images/villasanfelipe/1.jpg);"></a></div>
            </div>
            <div class="gallery-hide">
                <!-- <a href="/images/bosque/galeria/7.jpg"></a>
                <a href="/images/bosque/galeria/8.jpg"></a> -->
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
