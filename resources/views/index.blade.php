@extends('layouts.web')
@section('content')
<div class="slide-home">
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
                                        <span>Casas campestres de 145m2 y 189m2</span><strong>Desde $694.000.000</strong>
                                        <span>Vereda Chuntame, Barrio Santa Inés, Sobre la vía Cajicá - tabio</span>
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
