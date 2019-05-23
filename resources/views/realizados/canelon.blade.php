@extends('layouts.web')
@section('content')
    <div class="cover to-left">
        <div class="outer">
            <div class="inner" style="background-image: url(/images/canelon/banner.jpg);"></div>
        </div>
        <img class="logo" src="/images/canelon/logo-01.png">
    </div>
    <div class="container-fluid">
        <div class="row align-items-center my-5">
            <div class="col-lg-7 col-xl-6 subtitle">
                <h3><span class="top"></span>  <span class="bottom"></span>
                </h3>
            </div>
            <div class="col-lg-5 description">
                <p>Conjunto residencial referente en la zona, su arquitectura mezcla modernidad con un concepto campestre, ofrece un espacio para todo tipo de familias, cuenta con salones sociales, carril de nada, sauna y turco, zona para gimnasio y parque infantil.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col p-0 full-img">
                <!--<img src="img/img-proyecto-01.jpg">-->
                <div class="video-embed">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/lDU9mnCvuoQ" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
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
   .logo{
       width: 10%;
   }
   
</style>
@endpush
@push('scripts')


@endpush
