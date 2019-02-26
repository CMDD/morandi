@extends('layouts.web')
@section('content')
<div class="slide-home">
          <h2>Tenemos el lugar<br>donde siempre haz <span>soñado vivir</span></h2>
          <img class="go-to" src="img/arrow.svg">
      </div>
      <div id="projects" class="container-fluid">
          <div class="row">
              <h2 class="subtitle">Proyectos <span>en venta</span></h2>
          </div>
          <div class="row">
              <div class="col-lg-6">
                  <div class="project-box">
                      <a href="#"><img src="img/img-01.jpg"></a>
                      <div class="info">
                          <div class="logo">
                              <img src="img/brand-01.svg">
                          </div><div class="desc">
                              <p>Suites con áreas desde 35 m2</p>
                              <p>Guaymaral, Cundinamarca</p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="project-box">
                      <a href="#"><img src="img/img-01.jpg"></a>
                      <div class="info">
                          <div class="logo">
                              <img src="img/brand-01.svg">
                          </div><div class="desc">
                              <p>Suites con áreas desde 35 m2</p>
                              <p>Guaymaral, Cundinamarca</p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="project-box">
                      <a href="#"><img src="img/img-01.jpg"></a>
                      <div class="info">
                          <div class="logo">
                              <img src="img/brand-01.svg">
                          </div><div class="desc">
                              <p>Suites con áreas desde 35 m2</p>
                              <p>Guaymaral, Cundinamarca</p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="project-box">
                      <a href="#"><img src="img/img-01.jpg"></a>
                      <div class="info">
                          <div class="logo">
                              <img src="img/brand-01.svg">
                          </div><div class="desc">
                              <p>Suites con áreas desde 35 m2</p>
                              <p>Guaymaral, Cundinamarca</p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="project-box">
                      <a href="#"><img src="img/img-01.jpg"></a>
                      <div class="info">
                          <div class="logo">
                              <img src="img/brand-01.svg">
                          </div><div class="desc">
                              <p>Suites con áreas desde 35 m2</p>
                              <p>Guaymaral, Cundinamarca</p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="project-box">
                      <a href="#"><img src="img/img-01.jpg"></a>
                      <div class="info">
                          <div class="logo">
                              <img src="img/brand-01.svg">
                          </div><div class="desc">
                              <p>Suites con áreas desde 35 m2</p>
                              <p>Guaymaral, Cundinamarca</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    @include('layouts.footer')
@stop

@push('styles')
<link rel="stylesheet" href="css/home.css" type='text/css' media='all'>
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
