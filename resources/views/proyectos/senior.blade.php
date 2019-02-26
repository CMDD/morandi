@extends('layouts.web')
@section('content')
    <div class="cover" style="background-image: url(/img/cover-example-01.jpg);">
        <img class="logo" src="/img/brand-02.svg">
    </div>
    <div class="container-fluid">
        <div class="row align-items-center my-3">
            <div class="col-lg-7">
                <img src="/img/draw.png">
            </div>
            <div class="col-lg-4">
                <h3 class="subtitle"><span class="top">Disfruta de un lugar</span> privilegiado <span class="bottom">en la ciudad</span></h3>
                <p>Ubicado estratégicamente en el sector residencial de chico-navarra. Rodeado de un paisaje urbano y zonas verdes que invitan a disfrutar de la ciudad.<br>Es un edificio de 6 pisos, con 19 apartamentos a partir del 2do nivel y terraza panorámica en el séptimo, ascensor y zona para gimnasio. 4 tipos de apartamentos en cada nivel en los que se destacan modernos espacios abiertos, ventanas piso techo y vista exterior en todos los apartamentos.</p>
            </div>
        </div>
        <div class="row align-items-center list-video">
            <div class="col-md-4 list">
                <h3>SITIOS DE INTERÉS</h3>
                <ul>
                    <li>Sala de reuniones</li>
                    <li>Sala de juegos*</li>
                    <li>Biblioteca y zona de computo*</li>
                    <li>Restaurante</li>
                    <li>Oratorio*</li>
                    <li>Piscina</li>
                    <li>Gimnasio*</li>
                    <li>Sauna</li>
                    <li>Turco</li>
                </ul>
            </div>
            <div class="col-md-8 p-0">
                <div class="video-embed">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/lDU9mnCvuoQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col icons-list">
                <div class="icons"><img src="/img/icon-lobby.svg"><span>Lobby</span></div>
                <div class="icons"><img src="/img/icon-piscina.svg"><span>Piscina</span></div>
                <div class="icons"><img src="/img/icon-oratorio.svg"><span>Oratorio</span></div>
                <div class="icons"><img src="/img/icon-terraza.svg"><span>Terraza</span></div>
                <div class="icons"><img src="/img/icon-gimnasio.svg"><span>Gimnasio</span></div>
                <div class="icons"><img src="/img/icon-lobby.svg"><span>Lobby</span></div>
                <div class="icons"><img src="/img/icon-piscina.svg"><span>Piscina</span></div>
                <div class="icons"><img src="/img/icon-oratorio.svg"><span>Oratorio</span></div>
                <div class="icons"><img src="/img/icon-terraza.svg"><span>Terraza</span></div>
                <div class="icons"><img src="/img/icon-gimnasio.svg"><span>Gimnasio</span></div>
                <div class="icons"><img src="/img/icon-lobby.svg"><span>Lobby</span></div>
                <div class="icons"><img src="/img/icon-piscina.svg"><span>Piscina</span></div>

            </div>
        </div>
        <div class="row maps py-3">
            <div class="col">
                <img src="/img/google-maps.svg"><p>Encuentra este proyecto en Google Maps</p>
            </div>
        </div>
        <div class="row">
            <div class="col p-0">
                <div class="gallery grid">
                    <div class="grid-size"></div>
                    <div class="grid-gutter"></div>
                    <div class="grid-item grid-first"><a href="/img/cover-example-01.jpg" style="background-image: url(/img/cover-example-01.jpg);"></a></div>
                    <div class="grid-item grid-h2"><a href="/img/cover-example-01.jpg" style="background-image: url(/img/cover-example-01.jpg);"></a></div>
                    <div class="grid-item"><a href="/img/img-01.jpg" style="background-image: url(/img/img-01.jpg);"></a></div>
                    <div class="grid-item grid-w2 grid-h2"><a href="/img/slide-example.jpg" style="background-image: url(/img/slide-example.jpg);"></a></div>
                    <div class="grid-item grid-w2 grid-h2"><a href="/img/video-cover-example.jpg" style="background-image: url(/img/video-cover-example.jpg);"></a></div>
                    <div class="gallery-hide">
                        <a href="/img/brand-02.svg"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col models">
                <h3>Tipos de apartamentos</h3>
                <p>Selecciona un tipo de apartamento para ver la disponibilidad</p>
                <div class="tabs">
                    <span data-tab="tipo1" class="active">1</span>
                    <span data-tab="tipo2">2</span>
                    <span data-tab="tipo3">3</span>
                </div>
                <div id="tipo1" class="tab-content active">
                    <img src="/img/modelo-1.jpg">
                    <table>
                        <tr><td>Habitaciones</td><td>3</td></tr>
                        <tr><td>Baños</td><td>3</td></tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr><td>Area</td><td>124.3 m2</td></tr>
                        <tr><td>Area terraza</td><td>6.5 m2</td></tr>
                        <tr><td>Area total</td><td>130.3 m2</td></tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr><td colspan="2"><a href="#">Descarga PDF del brochure</a></td></tr>
                        <tr><td colspan="2"><a href="#">Descarga PDF de las plantas</a></td></tr>
                    </table>
                    <h3>Disponibles</h3>
                    <div class="floors">
                        <span class="vacant">201</span><span class="sold">202</span><span>203</span><span class="vacant">204</span>
                        <span class="vacant">301</span><span>302</span><span class="sold">303</span><span class="vacant">304</span>
                        <span class="sold">401</span><span class="sold">402</span><span>403</span><span>404</span>
                        <span class="vacant">501</span><span class="sold">502</span><span>503</span><span class="sold">504</span>
                        <span class="vacant">601</span><span class="sold">602</span><span class="sold">603</span><span class="sold">604</span>
                        <div class="about"><div class="vacant">Disponible</div><div class="sold">Vendido</div></div>
                    </div>
                </div>
                <div id="tipo2" class="tab-content">
                    <img src="/img/modelo-1.jpg">
                    <table>
                        <tr><td>Habitaciones</td><td>3</td></tr>
                        <tr><td>Baños</td><td>3</td></tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr><td>Area</td><td>124.3 m2</td></tr>
                        <tr><td>Area terraza</td><td>6.5 m2</td></tr>
                        <tr><td>Area total</td><td>130.3 m2</td></tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr><td colspan="2"><a href="#">Descarga PDF del brochure</a></td></tr>
                        <tr><td colspan="2"><a href="#">Descarga PDF de las plantas</a></td></tr>
                    </table>
                    <h3>Disponibles</h3>
                    <div class="floors">
                        <span class="vacant">201</span><span class="sold">202</span><span>203</span><span class="vacant">204</span>
                        <span class="vacant">301</span><span>302</span><span class="sold">303</span><span class="vacant">304</span>
                        <span class="sold">401</span><span class="sold">402</span><span>403</span><span>404</span>
                        <span class="vacant">501</span><span class="sold">502</span><span>503</span><span class="sold">504</span>
                        <span class="vacant">601</span><span class="sold">602</span><span class="sold">603</span><span class="sold">604</span>
                        <div class="about"><div class="vacant">Disponible</div><div class="sold">Vendido</div></div>
                    </div>
                </div>
                <div id="tipo3" class="tab-content">
                    <img src="/img/modelo-1.jpg">
                    <table>
                        <tr><td>Habitaciones</td><td>3</td></tr>
                        <tr><td>Baños</td><td>3</td></tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr><td>Area</td><td>124.3 m2</td></tr>
                        <tr><td>Area terraza</td><td>6.5 m2</td></tr>
                        <tr><td>Area total</td><td>130.3 m2</td></tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr><td colspan="2"><a href="#">Descarga PDF del brochure</a></td></tr>
                        <tr><td colspan="2"><a href="#">Descarga PDF de las plantas</a></td></tr>
                    </table>
                    <h3>Disponibles</h3>
                    <div class="floors">
                        <span class="vacant">201</span><span class="sold">202</span><span>203</span><span class="vacant">204</span>
                        <span class="vacant">301</span><span>302</span><span class="sold">303</span><span class="vacant">304</span>
                        <span class="sold">401</span><span class="sold">402</span><span>403</span><span>404</span>
                        <span class="vacant">501</span><span class="sold">502</span><span>503</span><span class="sold">504</span>
                        <span class="vacant">601</span><span class="sold">602</span><span class="sold">603</span><span class="sold">604</span>
                        <div class="about"><div class="vacant">Disponible</div><div class="sold">Vendido</div></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center contact">
            <div class="col-md-6 image">
                <img src="/img/contacto.png">
            </div>
            <div class="col-md-6 form">
                <p>Para saber mas de este proyecto…</p>
                <h3>Envíanos tus datos<br>y te contactaremos!</h3>
                <form>
                    <input type="text" placeholder="NOMBRE">
                    <input type="email" placeholder="EMAIL">
                    <input type="tel" placeholder="TEL/CEL">
                    <label>¿Como te enteraste del proyecto?
                    <select>
                        <option></option>
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
                    <p>Ingresa para ver le progreso de tu futura vivienda, conoce los pormenores de la obra y mira las fotos de los avances en este proyecto.</p>
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
<script type="text/javascript" src="/js/main.js"></script>
<script type="text/javascript" src="/js/isotope.min.js"></script>
<script type="text/javascript" src="/js/jquery.magnific-popup.min.js"></script>

@endpush
