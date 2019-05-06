@extends('layouts.web')
@section('content')
    <div class="cover to-left" style="background-image: url(/images/bosque/banner.jpg);">
        <img class="logo" src="/img/brand-03.svg">
    </div>
    <div class="container-fluid">
        <div class="row align-items-center my-5">
            <div class="col-lg-7 col-xl-6 subtitle">
                <h3><span class="top">Tu Nuevo hogar en donde</span> la mejor decoración <span class="bottom">entra por la ventana</span>
                </h3>
            </div>
            <div class="col-lg-5 description">
                <p>Se encuentra ubicado contiguo a la zona forestal de Cajicá, 
                    lo que garantiza la protección de un ambiente natural para ser disfrutado 
                    visualmente y en donde se puede practicar senderismo, ciclomontañismo y cabalgatas.
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
                    <div><img src="/images/bosque/icons/terraza02.jpg"><span>Terraza</span></div>
                    <div><img src="/images/bosque/icons/piscina adultos03.jpg"><span>Piscina</span></div>
                    <div><img src="/images/bosque/icons/cancha de tennis05.jpg"><span>Cancha de Tennis</span></div>
                    <div><img src="/images/bosque/icons/cancha multiple17.jpg"><span>Cancha de Multiple</span></div>
                    <div><img src="/images/bosque/icons/circuito de trote07.jpg"><span>Circuito de Trote</span></div>
                    <div><img src="/images/bosque/icons/sendero ecologico08.jpg"><span>Sendero Ecológico</span></div>
                    <div><img src="/images/bosque/icons/bioparque09.jpg"><span>Bio Parque</span></div>
                </div>
            </div>
            <div class="col-md-6 py-5 sites">
                <h3>Sitios de <span>interés</span></h3>
                <ul>
                    <li><img src="/images/senior/icons/universidad.png">Universidad de la Sabana</li>
                    <li><img src="/images/senior/icons/universidad.png">Universidad Manuela Beltrán</li>
                    <li><img src="/images/senior/icons/universidad.png">Universidad Militar</li>
                    <li><img src="/images/bosque/icons/puente_comun.png">Puente del Común </li>
                    <li><img src="/images/bosque/icons/Jaime Duque.png">Parque Jaime Duque</li>
                    <li><img src="/images/bosque/icons/iglesia.png">Catedral de sal de Zipaquirá</li>
                </ul>
                <a href="#" class="maps"><img src="/img/google-maps.svg"><span>Encuentra este proyecto en Google
                        Maps</span></a>
            </div>
        </div>
        <div class="row gallery">
            <div class="col-sm-8 gallery-1">
                <div class="gallery-item he1"><a href="/images/bosque/galeria/2.jpg"
                        style="background-image: url(/images/bosque/galeria/2.jpg);"></a></div>
                <div class="gallery-item wi2l he2"><a href="/images/bosque/galeria/3.jpg"
                        style="background-image: url(/images/bosque/galeria/3.jpg);"></a></div>
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
                <a href="/images/bosque/galeria/8.jpg"></a>
                <a href="/images/bosque/galeria/8.jpg"></a>
            </div>
        </div>
    
    
        <div class="row">
            <div class="col models">
                <h3>Disponibles</h3>
                <p>Selecciona un tipo de casa para ver la disponibilidad</p>
                <div class="tabs">
                    <span data-tab="tipo1" class="txt active">Anís</span>
                    <span data-tab="tipo2" class="txt">Bambú</span>
                    <!-- <span data-tab="tipo3">3</span> -->
                    <span data-tab="urbanismo" class="txt">Urbanismo</span>
                </div>
                <div id="tipo1" class="tab-content active">
                    <img src="/images/bosque/casatipoA.jpg">
                    <table>
                        <tr> 
                            <td>Habitaciones</td>
                            <td>2 + Family Room</td>
                        </tr>
                        <tr>
                            <td>Baños</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Area Total</td>
                            <td>145 m2</td>
                        </tr>
                        
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><strong>Precio desde:</strong></td>
                            <td><strong>$694.000.000</strong></td>
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
                    @include('partials.bosque_disponible')
                </div>
                <div id="tipo2" class="tab-content">
                    <img src="/images/bosque/CASATIPOA2PISO.jpg">
                    <table>
                        <tr>
                            <td>Habitaciones</td>
                            <td>3 + Family Room</td>
                        </tr>
                        <tr>
                            <td>Baños</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Area Total</td>
                            <td>180 m2</td>
                        </tr>
                        
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><strong>Precio desde:</strong></td>
                            <td><strong>$694.000.000</strong></td>
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
                <!-- <div id="tipo3" class="tab-content">
                    <img src="/images/bosque/plantas.pdf">
                    <table>
                        <tr>
                            <td>Habitaciones</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Baños</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Area Construida</td>
                            <td>124.3 m2</td>
                        </tr>
                        <tr>
                            <td>Area Privada</td>
                            <td>6.5 m2</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><strong>Precio desde:</strong></td>
                            <td><strong>$409.500.000</strong></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2"><a href="#">Descarga PDF del brochure</a></td>
                        </tr>
                        <tr>
                            <td colspan="2"><a href="#">Descarga PDF de las plantas</a></td>
                        </tr>
                    </table>
                    <h3>Disponibles</h3>
                    <div class="floors">
                        <span class="vacant">201</span><span class="sold">202</span><span>203</span><span
                            class="vacant">204</span>
                        <span class="vacant">301</span><span>302</span><span class="sold">303</span><span
                            class="vacant">304</span>
                        <span class="sold">401</span><span class="sold">402</span><span>403</span><span>404</span>
                        <span class="vacant">501</span><span class="sold">502</span><span>503</span><span
                            class="sold">504</span>
                        <span class="vacant">601</span><span class="sold">602</span><span class="sold">603</span><span
                            class="sold">604</span>
                        <div class="about">
                            <div class="vacant">Disponible</div>
                            <div class="sold">Vendido</div>
                        </div>
                    </div>
                </div> -->
                <div id="urbanismo" class="tab-content">
                    <img src="/images/bosque/BM_GENERAL -BROCH.jpg">
                   
                </div>
            </div>
        </div>
    
    
    <div class="row align-items-center contact">
        <div class="col-md-6 image" data-aos="fade-up">
            <img src="/img/contact.png">
        </div>
        <div class="col-md-6 form" data-aos="fade-up">
            <p>Para saber mas de este proyecto…</p>
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
                    <a href="#">Entrar</a>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
@stop

@push('styles')
<link rel="stylesheet" href="/css/proyecto.css" type='text/css' media='all'>
<link rel="stylesheet" href="/css/magnific-popup.css" type='text/css' media='all'>
@endpush
@push('scripts')


@endpush
