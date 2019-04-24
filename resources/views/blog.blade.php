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
            <div class="col-md-4 p-lg-4 py-4">
                <div class="box">
                    <div class="image" style="background-image: url(img/blog-img.jpg);"></div>
                    <h2>La casa de tu sueños</h2>
                    <p>Para esta época los empleadores consignan las cesantías a su personal. Aunque estas nacieron para momentos de desempleo, hoy ofrecen un gran soporte para la educación y la compra de vivienda. Los colombianos que trabajan anhelan por encima de todo tener casa propia. Eso queda claro al observar el uso que les dieron a sus. Cuando buscas vivienda a que les das más importancia?</p>
                    <div><a href="#">Leer más</a></div>
                </div>
            </div>
            <div class="col-md-4 p-lg-4 py-4">
                <div class="box">
                    <div class="image" style="background-image: url(img/blog-img.jpg);"></div>
                    <h2>Construyendo hogares</h2>
                    <p>Para esta época los empleadores consignan las cesantías a su personal. Aunque estas nacieron para momentos de desempleo, hoy ofrecen un gran soporte para la educación y la compra de vivienda.</p>
                    <div><a href="#">Leer más</a></div>
                </div>
            </div>
            <div class="col-md-4 p-lg-4 py-4">
                <div class="box">
                    <div class="image" style="background-image: url(img/blog-img.jpg);"></div>
                    <h2>La casa de tu sueños</h2>
                    <p>Para esta época los empleadores consignan las cesantías a su personal. Aunque estas nacieron para momentos de desempleo, hoy ofrecen un gran soporte para la educación y la compra de vivienda. Los colombianos que trabajan anhelan por encima de todo tener casa propia. Eso queda claro al observar el uso que les dieron a sus. Cuando buscas vivienda a que les das más importancia?</p>
                    <div><a href="#">Leer más</a></div>
                </div>
            </div>
            <div class="col-md-4 p-lg-4 py-4">
                <div class="box">
                    <div class="image" style="background-image: url(img/blog-img.jpg);"></div>
                    <h2>Construyendo hogares</h2>
                    <p>Para esta época los empleadores consignan las cesantías a su personal. Aunque estas nacieron para momentos de desempleo, hoy ofrecen un gran soporte para la educación y la compra de vivienda. Los colombianos que trabajan anhelan por encima de todo tener casa propia. Eso queda claro al observar el uso que les dieron a sus. Cuando buscas vivienda a que les das más importancia?</p>
                    <div><a href="#">Leer más</a></div>
                </div>
            </div>
            <div class="col-md-4 p-lg-4 py-4">
                <div class="box">
                    <div class="image" style="background-image: url(img/blog-img.jpg);"></div>
                    <h2>La casa de tu sueños</h2>
                    <p>Para esta época los empleadores consignan las cesantías a su personal. Aunque estas nacieron para momentos de desempleo, hoy ofrecen un gran soporte para la educación y la compra de vivienda. Los colombianos que trabajan anhelan por encima de todo tener casa propia. Eso queda claro al observar el uso que les dieron a sus. Cuando buscas vivienda a que les das más importancia?</p>
                    <div><a href="#">Leer más</a></div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')

@stop

@push('styles')
<link rel="stylesheet" href="css/blog.css" type='text/css' media='all'>
@endpush

@push('scripts')


 @endpush
