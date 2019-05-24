@extends('layouts.web')
@section('content')

    <div class="cover">
        <div class="content">
            <h1>Blog Morandi</h1>
            <p>En este apartado encontrarás noticias de la actualidad relacionadas con el sector de la construcción.</p>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row blog">

            @foreach($blogs as $blog)
            <div class="col-md-4 p-lg-4 py-4">
                <div class="box">
                    <div class="image" style='background-image: url({{$blog->image}});'></div>
                    <h2>{{$blog->titulo}}</h2>
                    <p>{{$blog->descripcion_corta}}</p>
                    
                    <div><a href="#">Leer más</a></div>
                </div>
            </div>
            @endforeach
          
            
            
            
        </div>
    </div>

    @include('layouts.footer')

@stop

@push('styles')
<link rel="stylesheet" href="css/blog.css" type='text/css' media='all'>
@endpush

@push('scripts')


 @endpush
