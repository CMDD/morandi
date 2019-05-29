@extends('layouts.web')
@section('content')
    <div class="cover to-left">
        <div class="outer">
            <div class="inner" style="background-image: url(/images/bosque/fachada.jpg);"></div>
        </div>
        <img class="logo" src="/img/brand-03.svg">
    </div>
    <div class="container-fluid">
        <div class="row align-items-center my-5">
            <div class="col-lg-7 col-xl-6 subtitle">
                <h3><span class="top">Tu Nuevo hogar en donde</span> la mejor decoración <span class="bottom">entra por la ventana</span>
                </h3>
            </div>
            <div class="col-lg-5 description">
                <p>Un condominio campestre ubicado contiguo a la zona forestal de Cajicá, que te permite disfrutar de la montaña, el bosque, el aire fresco y la calma de la sabana. En donde podrás practicar deportes al aire libre y disfrutar de todas las comodidades de un club.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col p-0 full-img">
                <!--<img src="img/img-proyecto-01.jpg">-->
                <div class="video-embed">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/lDU9mnCvuoQ" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 py-5 items">
                <h3>En Bosque Montaña <span>podrás disfrutar de</span></h3>
                <div class="slide-items">
                    
                    <div><img src="/images/bosque/icons/piscina adultos03.jpg"><span>Piscina</span></div>
                    <div><img src="/images/bosque/icons/cancha de tennis05.jpg"><span>Cancha de Tennis</span></div>
                    <div><img src="/images/bosque/icons/cancha multiple17.jpg"><span>Cancha de Multiple</span></div>
                    <div><img src="/images/bosque/icons/Gym47.jpg"><span>Gimnasio</span></div>
                    <div><img src="/images/bosque/icons/bbq11.jpg"><span>Zona BBQ</span></div>
                    <div><img src="/images/bosque/icons/parque infantil16.jpg"><span>Juegos Infantiles</span></div>
                   
                    <div><img src="/images/bosque/icons/sendero ecologico08.jpg"><span>Sendero Ecológico</span></div>
                    <div><img src="/images/bosque/icons/bioparque09.jpg"><span>Bio Parque</span></div>
                </div>

                <p class="info">* Las Zonas comunes no incluyen dotación.
             </p>

            </div>
            <div class="col-md-6 py-5 sites">
                <h3>Sitios de <span>interés</span></h3>
                <ul>
                    <li><img src="/images/bosque/icons/centro comercial_wh.png">Centro Comercial Fontanar</li>
                    <li><img src="/images/bosque/icons/universidad_wh.png">Universidad de la Sabana</li>
                    <li><img src="/images/bosque/icons/universidad_wh.png">Universidad Militar</li>
                    <li><img src="/images/bosque/icons/montana.png">Montaña la Cumbre: senderismo, ciclomontañismo</li>
                    <li><img src="/images/bosque/icons/termales.png">Termales de Tabio</li>
                    <li><img src="/images/bosque/icons/Jaime Duque_wh.png">Parque Jaime Duque</li>
                    <li><img src="/images/bosque/icons/iglesia_wh.png">Catedral de Zipaquirá</li>
                </ul>
                <a href="#" class="maps"><img src="/img/google-maps.svg"><span>Encuentra este proyecto en Google
                        Maps</span></a>
            </div>
        </div>
        <div class="row gallery">
            <div class="col-sm-8 gallery-1">
                <div class="gallery-item he1"><a href="/images/bosque/galeria/bambu.jpg"
                        style="background-image: url(/images/bosque/galeria/bambu.jpg);"></a></div>
                <div class="gallery-item wi2l he2"><a href="/images/bosque/galeria/fachada.jpg"
                        style="background-image: url(/images/bosque/galeria/fachada.jpg);"></a></div>
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
                <a href="/images/bosque/galeria/11.jpg"></a>
                <a href="/images/bosque/galeria/2.jpg"></a>
                <a href="/images/bosque/galeria/3.jpg"></a>
                <a href="/images/bosque/galeria/mont.jpg"></a>
            </div>
        </div>

        <div class="row">
            <div class="col models">
                <h3>Tipos de Casas</h3>
                <!-- <p>Selecciona un tipo de casa para ver la disponibilidad</p> -->
                <div class="tipos">
                    <div class="tabs">
                        <span data-tab="tipo1" class="txt active">Anís</span>
                        <span data-tab="tipo2" class="txt">Bambú</span>
                        <!-- <span data-tab="tipo3">3</span> -->
                        <span data-tab="urbanismo" class="txt">Urbanismo</span>
                    </div>
                    <div id="tipo1" class="tab-content active">
                        <div class="slider">
                            <div class="slide-type">
                                <div>
                                    <img src="/images/bosque/casatipoA.jpg">
                                </div>
                                 <div>
                                    <img src="/images/bosque/CASATIPOA2PISO.jpg">
                                </div>
                                <!-- <div>
                                    <img src="/img/modelo-1.jpg">
                                </div>  -->
                            </div> <br>
                            <p>Las imágenes son ilustrativas y pueden estar sujetas a cambios sin previo aviso.</p>
                        </div>
                        <table>
                            <tr>
                                <td>Habitaciones</td>
                                <td>2 + Family Room</td>
                            </tr>
                            <tr>
                                <td>Baños</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>Baño principal con tina</td>
                            </tr>
                            <tr>
                                <td>Sala y Comedor</td>
                            </tr>
                            <tr>
                                <td>Estudio</td>
                            </tr>
                            <tr>
                                <td>Cocina tipo americano</td>
                            </tr>
                            <tr>
                                <td>Parqueadero cubierto</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>Area Construida</td>
                                <td>145,45 m2</td>
                            </tr>
                            <tr>
                                <td>Area Privada</td>
                                <td>132,78 m2</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td><strong>Precio desde:</strong></td>
                                <td><strong>$720.000.000</strong></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td colspan="2"><a download="brochere" href="/images/bosque/brochure.pdf">Descarga PDF del brochure</a></td>
                            </tr>
                            <tr>
                                <td colspan="2"><a download="Plantas" href="/images/bosque/plantas.pdf">Descarga PDF de las plantas</a></td>
                            </tr>
                        </table>
                    </div>
                    <div id="tipo2" class="tab-content">
                        <div class="slider">
                            <div class="slide-type">
                                <div>
                                    <img src="/images/bosque/CASATIPOB.jpg">
                                </div>
                                <div>
                                    <img src="/images/bosque/CASATIPOB2PISO.jpg">
                                </div>
                                <!-- <div>
                                                        <img src="/img/modelo-1.jpg">
                                                    </div>  -->
                            </div> <br>
                            <p>* Las imágenes son ilustrativas y pueden estar sujetas a cambios sin previo aviso.</p>
                        </div>
                        <table>
                            <tr>
                                <td>Habitaciones</td>
                                <td>3 + Family Room</td>
                            </tr>
                            <tr>
                                <td>Baños</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>Baño principal con tina</td>
                            </tr>
                            <tr>
                                <td>Sala y Comedor</td>
                            </tr>
                            <tr>
                                <td>Estudio</td>
                            </tr>
                            <tr>
                                <td>Cocina tipo americano</td>
                            </tr>
                            <tr>
                                <td>Deposito</td>
                            </tr>
                            <tr>
                                <td>Parqueadero cubierto</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>Area Construida</td>
                                <td>180,20 m2</td>
                            </tr>
                            <tr>
                                <td>Area Privada</td>
                                <td>164,15 m2</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td><strong>Precio desde:</strong></td>
                                <td><strong>$875.500.000</strong></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td colspan="2"><a download="brochure" href="/images/bosque/brochure.pdf">Descarga PDF del brochure</a></td>
                            </tr>
                            <tr>
                                <td colspan="2"><a download="Plantas" href="/images/bosque/plantas.pdf">Descarga PDF de las plantas</a></td>
                            </tr>
                        </table>
                    </div>
                    <div id="urbanismo" class="tab-content">
                        <img src="/images/bosque/BM_GENERAL -BROCH.jpg">
                        <table>
                            <tr>
                                <td>102 Casas</td>
                            </tr>
                            <tr>
                                <td>Piscinas</td>
                            </tr>
                            <tr>
                                <td>Salón social</td>
                            </tr>
                            <tr>
                                <td>Cancha de tenis</td>
                            </tr>
                            <tr>
                                <td>Cancha múltiple</td>
                            </tr>
                            <tr>
                                <td>Juegos infantiles</td>
                            </tr>
                            <tr>
                                <td>Sendero Ecológico.</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </div>
                </div>
                @include('partials.bosque_disponible')
            </div>
        </div>
    
    
    <div class="row align-items-center contact">
        <div class="col-md-6 image" data-aos="fade-up">
            <img src="/img/contact.png">
        </div>
        <div class="col-md-6 form" data-aos="fade-up">
            <p class="title-form">Para saber mas de este proyecto…</p>
            <h3>Envíanos tus datos<br>y te contactaremos!</h3>
            <form>
                <input type="text" placeholder="NOMBRE">
                <input type="email" placeholder="EMAIL">
                <input type="tel" placeholder="TEL/CEL">
                <label>¿Como te enteraste del proyecto?
                    <select>
                        <option>Selecciona...</option>
                        <option>Redes sociales</option>
                        <option>Pagina web</option>
                        <option>Revistas</option>
                    </select>
                </label>
                <label><input type="checkbox"> Acepto política de tratamiento de datos</label>
                <input type="submit" class="btn" value="Enviar">
            </form>
        </div>
    </div>
        <div class="row">
            <div class="col p-0 work">
                <div class="box">
                    <h3>Avance de obra</h3>
                    <p>Ingresa para ver le progreso de tu futura vivienda, conoce los pormenores de la obra y mira las fotos
                        de los avances en este proyecto.</p>
                    <a href="/avance/bosque">Entrar</a>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
@stop

@push('styles')
<link rel="stylesheet" href="/css/proyecto.css" type='text/css' media='all'>
<link rel="stylesheet" href="/css/magnific-popup.css" type='text/css' media='all'>
<style>
   .sites h3{
       color: white;
   }
   .sites{
       background: #391700;
   }

   .info{
    font-size:10px;
    margin-top:8%;
    color:#b3b3b3;
    margin-left:15%;
}
   
</style>
@endpush
@push('scripts')


@endpush
