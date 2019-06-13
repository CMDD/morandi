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
                        <div class="top"><span class="count" data-count="791">0</span><span>Inmuebles<br>residenciales<br>construidos</span></div>
                        <div class="right"><span class="count" data-count="13">0</span><span>Proyectos<br>realizados</span></div>
                        <div class="bottom"><span class="count" data-count="127003">0</span><span>Metros cuadrados<br>de área construida</span></div>
                        <div class="left"><span class="count" data-count="52">0</span><span>Inmuebles<br>comerciales<br>construidos</span></div>
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
                                <h3>2005</h3>
                                <h4>Nacimiento</h4>
                                <p>Nos Constituimos como Mandal Construcciones Ltda y lanzamos a ventas nuestros primeros proyectos San Diego y Villas de
                                San Felipe en el municipio de Chía.</p>
                            </div>
                        </div>
                        <div>
                            <div class="box">
                                <h3>2007</h3>
                                <h4>Inicios</h4>
                                <p>Iniciamos construcción de los proyectos San Diego y Villas de San Felipe, paralelo a esto lanzamos a ventas una 2da
                                etapa del proyecto San Diego gracias al éxito y la acogida que tuvo por su diseño y ubicación.</p>
                            </div>
                        </div>
                        <div>
                            <div class="box">
                                <h3>2009</h3>
                                <h4>Lanzamientos</h4>
                                <p>Lanzamos a ventas 3 nuevos proyectos en Chía y Cajicá; San Felipe Reservado, Guaymaral Reservado y Hacienda San Luis
                                respectivamente, e iniciamos la construcción de estos 3 proyectos en 2010 consolidando nuestra presencia en 2 de los
                                municipios más destacados de la sabana norte de la ciudad de Bogotá.</p>
                            </div>
                        </div>
                        <div>
                            <div class="box">
                                <h3>2013</h3>
                                <h4>Evolución</h4>
                                <p>Evolucionamos como marca a Morandi Construcciones S.A.S, bajo el slogan “Calidad que se Construye”, cuyo objetivo es
                                mostrar la imagen moderna y cálida que día a día imprimimos a nuestros proyectos.</p>
                                <!-- <span>Metros cuadrados de área construida</span> -->
                            </div>
                        </div>
                        <div>
                            <div class="box">
                                <h3>2014</h3>
                                <h4>Modernidad</h4>
                                <p>Iniciamos 2 nuevos proyectos en el municipio de Cajicá, Canelón y Bambú, referentes en la zona por sus diseños modernos
                                y por contar con Club house, lo que permite sus habitantes disfrutar de un ambiente de relajación y descanso en su
                                hogar.</p>
                                <!-- <span>Metros cuadrados de área construida</span> -->
                            </div>
                        </div>
                        <div>
                            <div class="box">
                                <h3>2016</h3>
                                <h4>Innovación</h4>
                                <p>Incursionamos en la construcción de Apartamentos y Oficinas con el proyecto Pietra, un complejo de 3 torres de 5 pisos,
                                el lugar ideal para quienes buscan un diseño urbano e innovador en el ambiente de tranquilidad que brinda el municipio
                                de Cajicá. <br> <br>
                                
                                En este mismo año hemos lanzado a ventas un 2do edificio, esta vez en la ciudad de Bogotá, un mercado inexplorado hasta
                                ese momento pero que ha recibido con excelentes resultados a 114 street en un exclusivo sector de la ciudad,
                                apartamentos con el sello de modernidad y lujo que ya es característico en Morandi. <br> <br>
                                
                                En alianza con Inversiones Milenium, una reconocida Constructora de la sabana norte de Bogotá, hemos estructurado y
                                empezado la construcción de Bosque de la Montaña, un proyecto de casas campestres con un paisaje único gracias a su
                                ubicación contigua a la zona forestal de Cajicá un ambiente para ser disfrutado naturalmente.</p>
                                <!-- <span>Metros cuadrados de área construida</span> -->
                            </div>
                        </div>
                        <div>
                            <div class="box">
                                <h3>2017</h3>
                                <h4>Consolidación</h4>
                                <p>En nuestra constante búsqueda por nuevos mercados y satisfacer la necesidades de vivienda a cada vez más Colombianos,
                                este año estamos presentando 2 nuevos proyectos; Monteverde, 7 torres de apartamentos en alianza con Corac
                                Construcciones en el segmento VIS ubicado en la ciudad de Tunja y Caney conjunto residencial 64 casas que nace en
                                alianza con NT Group en la ciudad de Chía.</p>
                                <!-- <span>Metros cuadrados de área construida</span> -->
                            </div>
                        </div>
                        <div>
                            <div class="box">
                                <h3>2018</h3>
                                <h4>Nuevos Mercados</h4>
                                <p>Porque sabemos que nuestros clientes y sus necesidades son diferentes en cada etapa de la vida, nuestros diseños se
                                adaptan para crear una verdadera experiencia al vivir en un inmueble de Morandi. Es así cómo se estructura Senior Suites
                                Guaymaral, un proyecto especializado en el adulto mayor activo e independiente, de esta misma forma seguiremos
                                incursionando en nuevos mercados para entregar propuestas innovadoras en la ciudad de Bogotá y los municipios de la
                                sabana norte</p>
                                <!-- <span>Metros cuadrados de área construida</span> -->
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
<script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
 @endpush
