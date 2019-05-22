@extends('layouts.web')

@section('content')

    <div class="cover">
        <div class="content">
            <h1><span>Avance</span> de obra</h1>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet..</p>
        </div>
    </div>
    <div class="container-fluid">

        <div class="row logo">
            <div class="col">
                <img src="/img/brand-03.svg">
            </div>
        </div>

        <div class="row gallery">
            <div class="col-12 gallery-title">
                <h3><span>Diciembre</span> 2018</h3>
            </div>
            <div class="col-sm-8 gallery-1">
                <div class="gallery-item he1"><a href="/images/bosque/galeria/2.jpg"
                        style="background-image: url(/images/bosque/galeria/2.jpg);"></a></div>
                <div class="gallery-item wi2l he2"><a href="/images/bosque/galeria/3.jpg"
                        style="background-image: url(/images/bosque/galeria/3.jpg);"></a></div>
                <div class="gallery-item wi2r he2"><a href="/images/bosque/galeria/4.jpg"
                        style="background-image: url(/images/bosque/galeria/4.jpg);"></a></div>
            </div>
            <div class="col-sm-4 gallery-2">
                <div class="gallery-item he2"><a href="/images/bosque/galeria/5.jpg" style="background-image: url(/images/bosque/galeria/5.jpg);"></a>
                </div>
                <div class="gallery-item he3"><a href="/images/bosque/galeria/6.jpg" style="background-image: url(/images/bosque/galeria/6.jpg);"></a>
                </div>
                <div class="gallery-item he4"><a href="/images/bosque/galeria/7.jpg"
                        style="background-image: url(/images/bosque/galeria/7.jpg);"></a></div>
            </div>
            <div class="col-12 gallery-video">
                <div class="video-embed">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/lDU9mnCvuoQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="gallery-hide">
                <a href="/images/bosque/galeria/10.jpg"></a>
                <a href="/images/bosque/galeria/8.jpg"></a>
                <a href="/images/bosque/galeria/1.jpg"></a>
                <a href="/images/bosque/galeria/9.jpg"></a>
            </div>
        </div>

        <div class="row gallery">
            <div class="col-12 gallery-title">
                <h3><span>Mayo</span> 2019</h3>
            </div>
            <div class="col-sm-8 gallery-1">
                <div class="gallery-item he1"><a href="/images/bosque/galeria/2.jpg"
                        style="background-image: url(/images/bosque/galeria/2.jpg);"></a></div>
                <div class="gallery-item wi2l he2"><a href="/images/bosque/galeria/3.jpg"
                        style="background-image: url(/images/bosque/galeria/3.jpg);"></a></div>
                <div class="gallery-item wi2r he2"><a href="/images/bosque/galeria/4.jpg"
                        style="background-image: url(/images/bosque/galeria/4.jpg);"></a></div>
            </div>
            <div class="col-sm-4 gallery-2">
                <div class="gallery-item he2"><a href="/images/bosque/galeria/5.jpg" style="background-image: url(/images/bosque/galeria/5.jpg);"></a>
                </div>
                <div class="gallery-item he3"><a href="/images/bosque/galeria/6.jpg" style="background-image: url(/images/bosque/galeria/6.jpg);"></a>
                </div>
                <div class="gallery-item he4"><a href="/images/bosque/galeria/7.jpg"
                        style="background-image: url(/images/bosque/galeria/7.jpg);"></a></div>
            </div>
            <div class="gallery-hide">
                <a href="/images/bosque/galeria/10.jpg"></a>
                <a href="/images/bosque/galeria/8.jpg"></a>
                <a href="/images/bosque/galeria/1.jpg"></a>
                <a href="/images/bosque/galeria/9.jpg"></a>
            </div>
        </div>

    </div>


    @include('layouts.footer')

@stop

@push('styles')
    <link rel="stylesheet" href="../css/avance.css" type='text/css' media='all'>
@endpush

@push('scripts')

@endpush
