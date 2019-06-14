@extends('layouts.web')
@section('content')
    <div class="cover to-left">
        <div class="outer">
            <div class="inner" style="background-image: url(/images/canelon/banner2.jpg);"></div>
        </div>
        <img class="logo" src="/images/canelon/logo-01.png">
    </div>
    <div class="container-fluid">
        <div class="row align-items-center my-5">
            <div class="col-lg-7 col-xl-6 subtitle" data-aos-delay="100" data-aos="zoom-out-right">
                
                <h3><span class="top">La armonía se vive </span> donde se construyen <span class="bottom">tus sueños</span>
                </h3>
            </div>
            <div class="col-lg-5 description" data-aos-delay="200" data-aos="zoom-in-up">
                <p>Un Conjunto Residencial referente en el municipio de Cajicá con una arquitectura que permite vivir en espacios diseñados especialmente para todo tipo de familias.
                </p>
                 <ul>
                    <li>74 Casas de 117 y 130 m2 de 3 niveles</li>
                    <li>2 Parqueaderos por casa</li>
                    <p>Características del conjunto</p>
                    <li>Club house: Piscina, sauna, turco, zona para masajes y zona para gimnasio</li>
                    <li>Salón social</li>
                    <li>Salón de juegos</li>
                    <li>Parque infantil</li>
                    <li>Finalizado en Diciembre de 2016</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col p-0 full-img">
                <!--<img src="img/img-proyecto-01.jpg">-->
                <div class="video-embed">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/EOKeUyKfsvs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <br>
                
            </div>
        </div>
        
        <div class="row gallery">
            <div class="col-sm-8 gallery-1">
                <div class="gallery-item he1"><a href="/images/canelon/1.jpg"
                        style="background-image: url(/images/canelon/1.jpg);"></a></div>
                <div class="gallery-item wi2l he2"><a href="/images/canelon/2.jpg"
                        style="background-image: url(/images/canelon/2.jpg);"></a></div>
                <div class="gallery-item wi2r he2"><a href="/images/canelon/3.jpg"
                        style="background-image: url(/images/canelon/3.jpg);"></a></div>
            </div>
            <div class="col-sm-4 gallery-2">
                <div class="gallery-item he2"><a href="/images/canelon/4.jpg" style="background-image: url(/images/canelon/4.jpg);"></a>
                </div>
                <div class="gallery-item he3"><a href="/images/canelon/5.jpg" style="background-image: url(/images/canelon/5.jpg);"></a>
                </div>
                <div class="gallery-item he4"><a href="/images/canelon/6.jpg"
                        style="background-image: url(/images/canelon/6.jpg);"></a></div>
            </div>
            <!-- <div class="gallery-hide">
                <a href="/images/bosque/galeria/10.jpg"></a>
                <a href="/images/bosque/galeria/8.jpg"></a>
                <a href="/images/bosque/galeria/1.jpg"></a>
                <a href="/images/bosque/galeria/9.jpg"></a>
                <a href="/images/bosque/galeria/11.jpg"></a>
                <a href="/images/bosque/galeria/12.jpg"></a>
                <a href="/images/bosque/galeria/13.jpg"></a>
            </div> -->
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
