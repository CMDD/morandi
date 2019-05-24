@extends('layouts.web')
@section('content')
<div class="slide-home">
    <div class="outer">
        <div class="inner"></div>
    </div>
    <img class="go-to" src="img/arrow.svg">
</div>
<div id="projects" class="container-fluid">
            <div class="row" data-aos="zoom-in">
                <h2 class="subtitle">Proyectos en <span>venta</span></h2>
            </div>
            <div class="row">
                <div class="col-12 p-0">
                    <div class="slide-projects">
                        <div>
                            <div class="box" style="background-image: url(/images/bosque/home.jpg);">
                                <a href="{{url('proyecto/bosque')}}">
                                <div class="info">
                                    <div class="brand brand-bosque">
                                        <img src="/images/bosque/logo_home.png">
                                    </div>
                                    <div class="text text-bosque">
                                        <span>Casas campestres de 145,45 m2</span><strong>Desde $720.000.000</strong>
                                        <span>Vereda Chuntame, Barrio Santa Inés, Sobre la vía Cajicá - Tabio</span>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="box" style="background-image: url(images/senior/imagen_home.jpg);">
                                <a href="{{'proyecto/senior'}}">
                                <div class="info">
                                    <div class="brand brand-senior">
                                        <img src="img/brand-01.svg">
                                    </div>
                                    <div class="text text-senior">
                                        <span>Suite de 37m2 y 60m2</span><strong>Desde $195.457.000</strong>
                                        <span>
                                            Vía Guaymaral, Vereda la balsa, Sector las Juntas, Chía – Cundinamarca.
                                        </span>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>

                        <div>
                            <div class="box" style="background-image: url(images/caney/caney_home.jpg);">
                                <a href="{{'proyecto/caney'}}">
                                <div class="info">
                                    <div class="brand brand-caney">
                                        <img src="/images/caney/logo_home.png">
                                    </div>
                                    <div class="text text-caney">
                                        <span>Casas de 96 m2 y 33 m2 </span><strong>Desde $409.000.000</strong>
                                        <span>  Ubicado en chía en la vereda bojacá. &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                                        </span>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="box" style="background-image: url(images/fique/fique_home.jpg);">
                                <a href="{{'proyecto/fique'}}">
                                <div class="info">
                                    <div class="brand brand-caney">
                                        <img src="/images/fique/logobanner_Mesa de trabajo 1.png">
                                    </div>
                                    <div class="text text-caney">
                                        <span>Casas de 103 m2 y 26 m2 </span><strong>Desde $420.000.000</strong>
                                        <span> Ubicado en Chía Cundinamarca &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                                        </span>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="box" style="background-image: url(images/ofipietra/banner.jpg);">
                                <a href="{{'proyecto/oficinas_pietra'}}">
                                    <div class="info">
                                        <div class="brand brand-caney">
                                            <img src="/images/ofipietra/logo_page.png">
                                        </div>
                                        <div class="text text-caney">
                                            <span>Oficinas de 45 m2 a 107 m2 </span><strong>Desde $392.171.000</strong>
                                            <span> Ubicado en Cajicá, Cundinamarca &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                                                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                                                &nbsp;&nbsp;&nbsp;&nbsp;
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- <div>
                            <div class="box" style="background-image: url(img/proyecto-home-1.jpg);">
                                <div class="info">
                                    <div class="brand">
                                        <img src="img/brand-01.svg">
                                    </div>
                                    <div class="text">
                                        <span>Suites con áreas desde 35 m2</span><strong>Desde $584.000.000</strong><span>Guaymaral, Cundinamarca</span>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

    @include('layouts.footer')
@stop

@push('styles')
<link rel="stylesheet" href="css/home.css" type='text/css' media='all'>

<style>
.slide-projects .brand-bosque {
    background: #e2dede94; 
}
.slide-projects .brand-senior {
    background: #000; 
}

.slide-projects .text-bosque {  
    background: rgb(226, 223, 220);
}
.slide-projects .text-senior {  
    background: rgba(193, 164, 88, 0.6);
}

.slide-projects .brand-caney {
    background: #e2dede94; 
}
.slide-projects .text-caney {  
    background: rgb(226, 223, 220);
}
a{
    color:black !important;
}
</style>
@endpush

@push('scripts')
<script type="text/javascript">
var $ = jQuery;     
$(document).ready(function () {
    $('.go-to').click(function () {
		$("html, body").delay(200).animate({scrollTop: $('#projects').offset().top }, 1500);
		return false;
	});
});
</script>
@endpush
