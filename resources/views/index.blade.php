@extends('layouts.web')
@section('content')
<div class="slide-home">
    <h2>Tenemos el lugar<br>donde siempre haz <span>soñado vivir</span></h2>
    <img class="go-to" src="img/arrow.svg">
</div>
     <web-home></web-home>
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
