@extends('layouts.web')
@section('content')
  <div class="cover">
            <div class="text">
                <h2>Conoce más<br>sobre <span>nosotros</span></h2>
                <p>
                    MORANDI es una empresa dedicada al diseño, construcción y venta de proyectos de ingeniería y arquitectura, nos destacamos por la innovación y alta calidad de nuestros productos, estamos comprometidos con la búsqueda del bienestar de accionistas y colaboradores que nos permita mantenernos como una empresa líder del sector.
                </p>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row align-items-center stats">
                <svg class="top" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <polygon fill="#011238" points="0,100 100,0 100,100"/>
                </svg>
                <div class="col-lg-7">
                    <div class="circle">
                        <div class="top"><span class="count">791</span><span>Inmuebles<br>residenciales<br>construidos</span></div>
                        <div class="right"><span class="count">13</span><span>Proyectos<br>realizados</span></div>
                        <div class="bottom"><span class="count">127003</span></div>
                        <div class="left"><span class="count">52</span><span>Inmuebles<br>comerciales<br>construidos</span></div>
                    </div>
                </div>
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <img src="img/draw-2.svg">
                </div>
                <svg class="bottom" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <polygon fill="#011238" points="0 0,100 100,100 0"/>
                </svg>
            </div>
            <div class="row history">
                <div class="col p-0">
                    <h2>Nuestra <span>historia</span></h2>
                    <div class="slide-history">
                        <div>
                            <div class="box">
                                <h3>2009</h3>
                                <h4>Lanzamientos</h4>
                                <p>Lanzamos a ventas 3 nuevos proyectos en Chía y Cajicá; San Felipe Reservado, Guaymaral Reservado y Hacienda San Luis respectivamente, e iniciamos la construcción de estos 3 proyectos en 2010 consolidando nuestra presencia en 2 de los municipios más destacados de la sabana norte de la ciudad de Bogotá.</p>
                                <span>Metros cuadrados de área construida</span>
                            </div>
                        </div>
                        <div>
                            <div class="box">
                                <h3>2015</h3>
                                <h4>Lanzamientos</h4>
                                <p>Lanzamos a ventas 3 nuevos proyectos en Chía y Cajicá; San Felipe Reservado, Guaymaral Reservado y Hacienda San Luis respectivamente, e iniciamos la construcción de estos 3 proyectos en 2010 consolidando nuestra presencia en 2 de los municipios más destacados de la sabana norte de la ciudad de Bogotá.</p>
                                <span>Metros cuadrados de área construida</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footer')
@stop

@push('styles')
<link rel="stylesheet" href="css/nosotros.css" type='text/css' media='all'>
  <link rel="stylesheet" href="css/slick.css" type='text/css' media='all'>
@endpush

@push('scripts')
<script type="text/javascript" src="js/slick.min.js"></script>

 @endpush   