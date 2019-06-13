@extends('layouts.web')
@section('content')
    <div class="cover to-left">
        <div class="outer">
            <div class="inner" style="background-image: url(/images/bambu/banner.jpg);"></div>
        </div>
        <img class="logo" src="/images/bambu/logo-01.png">
    </div>
    <div class="container-fluid">
        <div class="row align-items-center my-5">
            <div class="col-lg-7 col-xl-6 subtitle" data-aos-delay="100" data-aos="zoom-out-right">
                
                <h3><span class="top">vive en un ambiente de</span>  <span class="bottom">armonía</span>
                </h3>
            </div>
            <div class="col-lg-5 description" data-aos-delay="200" data-aos="zoom-in-up">
                <p>Conjunto Residencial de casas en lotes independientes en el que se destacan el diseño de espacios abiertos, con ventilación e iluminación natural, que lo hacen único en el municipio de cajicá.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!--<img src="img/img-proyecto-01.jpg">-->
                <br>
                <br>
                <div class="video-embed">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/pVD2yR0jmyc" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            
                </div>
                <br>
                <br>
                <br>
            </div>
        </div>
        
        
        <div class="row gallery">
            <div class="col-sm-8 gallery-1">
                <div class="gallery-item he1"><a href="/images/bambu/1.jpg"
                        style="background-image: url(/images/bambu/1.jpg);"></a></div>
                <div class="gallery-item wi2l he2"><a href="/images/bambu/2.jpg"
                        style="background-image: url(/images/bambu/2.jpg);"></a></div>
                <div class="gallery-item wi2r he2"><a href="/images/bambu/3.jpg"
                        style="background-image: url(/images/bambu/3.jpg);"></a></div>
            </div>
            <div class="col-sm-4 gallery-2">
                <div class="gallery-item he2"><a href="/images/bambu/4.jpg" style="background-image: url(/images/bambu/4.jpg);"></a>
                </div>
                <div class="gallery-item he3"><a href="/images/bambu/5.jpg" style="background-image: url(/images/bambu/5.jpg);"></a>
                </div>
                <div class="gallery-item he4"><a href="/images/bambu/6.jpg"
                        style="background-image: url(/images/bambu/6.jpg);"></a></div>
            </div>
            <div class="gallery-hide">
                <a href="/images/bosque/galeria/7.jpg"></a>
                <a href="/images/bosque/galeria/8.jpg"></a>
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
   
</style>
@endpush
@push('scripts')


@endpush
