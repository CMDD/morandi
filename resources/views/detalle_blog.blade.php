@extends('layouts.web')
@section('content')

    <div class="container">
        <div class="content">
            <img src="/{{$blog->image}}" alt="">
            <h1>{{$blog->titulo}}</h1>
            <p>{!!$blog->descripcion!!}</p>
        </div>
    </div>
   

    @include('layouts.footer')

@stop

@push('styles')
<link rel="stylesheet" href="css/blog.css" type='text/css' media='all'>
<style>
    .container{
        margin-top: 10%;
    }

</style>
@endpush

@push('scripts')


 @endpush
