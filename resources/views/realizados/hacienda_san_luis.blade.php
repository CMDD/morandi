@extends('layouts.web')
@section('content')
    <div class="cover to-left">
        <div class="outer">
            <div class="inner" style="background-image: url(/images/sanluis/banner.jpg);"></div>
        </div>
        <img class="logo" src="/images/sanluis/logo-01.png">
    </div>
    <div class="container-fluid">
        <div class="row align-items-center my-5">
            <div class="col-lg-7 col-xl-6 subtitle">
                
                <h3><span class="top"> El placer de regresar a</span>  <span class="bottom">casa</span>
                </h3>
            </div>
            <div class="col-lg-5 description">
                <p>Ubicado frente al club La Hacienda de Cajicá, el condominio cuenta con 54 casas campestres de 2 niveles en lotes con zonas verdes privadas, club house dotado con sauna, turco, jacuzzi, zona para gym y masajes, salón de eventos y cinema. Amplias zonas verdes cancha de tenis y parques recreativos infantiles.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col p-0 full-img">
                <!--<img src="img/img-proyecto-01.jpg">-->
                
                <br>
                <br>
                
            </div>
        </div>
        
        <div class="row gallery">
            <div class="col-sm-8 gallery-1">
                <div class="gallery-item he1"><a href="/images/sanluis/1.jpg"
                        style="background-image: url(/images/sanluis/1.jpg);"></a></div>
                <div class="gallery-item wi2l he2"><a href="/images/sanluis/2.jpg"
                        style="background-image: url(/images/sanluis/2.jpg);"></a></div>
                <div class="gallery-item wi2r he2"><a href="/images/sanluis/3.jpg"
                        style="background-image: url(/images/sanluis/3.jpg);"></a></div>
            </div>
            <div class="col-sm-4 gallery-2">
                <div class="gallery-item he2"><a href="/images/sanluis/4.jpg" style="background-image: url(/images/sanluis/4.jpg);"></a>
                </div>
                <div class="gallery-item he3"><a href="/images/sanluis/5.jpg" style="background-image: url(/images/sanluis/5.jpg);"></a>
                </div>
                <div class="gallery-item he4"><a href="/images/sanluis/6.jpg"
                        style="background-image: url(/images/sanluis/6.jpg);"></a></div>
            </div>
            <div class="gallery-hide">
                <a href="/images/sanluis/7.jpg"></a>
                <!-- <a href="/images/sanluis/galeria/8.jpg"></a>
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
       width: 17%;
   }
   
</style>
@endpush
@push('scripts')


@endpush
