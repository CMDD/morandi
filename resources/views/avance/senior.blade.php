@extends('layouts.web')

@section('content')

    <div class="cover">
        <div class="content">
            <h1><span>Avance</span> de obra</h1>
        </div>
    </div>
    <div class="container-fluid">

        <div class="row logo">
            <div class="col">
                <img src="/images/senior/logo_home.png">
            </div>
        </div>

        <div class="row gallery">
            <div class="col-12 gallery-title">
                <h3><span>Lote</span></h3>
            </div>
            <div class="col-sm-8 gallery-1">
                <div class="gallery-item he1"><a href="/images/senior/avances/lote.jpg"
                        style="background-image: url(/images/senior/avances/lote.jpg);"></a></div>
                <!-- <div class="gallery-item wi2l he2"><a href="/images/bosque/avances/2019/2.jpg"
                        style="background-image: url(/images/bosque/avances/2019/2.jpg);"></a></div>
                <div class="gallery-item wi2r he2"><a href="/images/bosque/avances/2019/3.jpg"
                        style="background-image: url(/images/bosque/avances/2019/3.jpg);"></a></div> -->
            </div>
            <div class="col-sm-4 gallery-2">
                <!-- <div class="gallery-item he2"><a href="/images/bosque/avances/2019/4.jpg" style="background-image: url(/images/bosque/avances/2019/4.jpg);"></a>
                </div>
                <div class="gallery-item he3"><a href="/images/bosque/avances/2019/5.jpg" style="background-image: url(/images/bosque/avances/2019/5.jpg);"></a>
                </div> -->
                <!-- <div class="gallery-item he4"><a href="/images/bosque/avances/2019/1.jpg"
                        style="background-image: url(/images/bosque/avances/2019/1.jpg);"></a></div> -->
            </div>
            <!-- <div class="col-12 gallery-video">
                <div class="video-embed">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/lDU9mnCvuoQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div> -->
            <!-- <div class="gallery-hide">
                <a href="/images/bosque/galeria/10.jpg"></a>
                <a href="/images/bosque/galeria/8.jpg"></a>
                <a href="/images/bosque/galeria/1.jpg"></a>
                <a href="/images/bosque/galeria/9.jpg"></a>
            </div> -->
        </div>

       

        

        


       

    </div>


    @include('layouts.footer')

@stop

@push('styles')
    <link rel="stylesheet" href="../css/avance.css" type='text/css' media='all'>
@endpush

@push('scripts')

@endpush
