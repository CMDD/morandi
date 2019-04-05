@extends('layouts.web')
@section('content')
    <div class="cover" style="background-image: url(/images/caney/banner.jpg);">
        <img class="logo" src="/images/caney/caney.png">
    </div>
    <div class="container-fluid">
        <div class="row align-items-center my-3">
            <div class="col-lg-7">
                <img src="/images/sketch/caney.png">
            </div>
            <div class="col-lg-4">
                <h3>Descubre el hogar que siempre has esperado tener</h3>
                <p>Casas en conjunto cerrado, de 2 niveles + altillo, 3 alcobas con baño privado, en el altillo encuentras la alcoba principal completamente privada con terraza. El proyecto está ubicado en el municipio de Chía, vereda bojacá.</p>
            </div>
        </div>
        <div class="row align-items-center list-video">
            <div class="col-md-4 list">
                <h3>SITIOS DE INTERÉS</h3>
                <ul>
                    <li>Universidad de la sabana</li>
                    <li>Universidad Manuela beltrán</li>
                    <li>Universidad militar</li>
                    <li>Puente del común </li>
                    <li>Parque Jaime duque</li>
                    <li>Catedral de sal de zipaquirá</li>
                    <li>Panaca</li>
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
                <div class="icons"><img src="/images/caney/icons/bbq11.jpg"><span>Barbecue</span></div>
                <div class="icons"><img src="/images/caney/icons/cancha multiple17.jpg"><span>Cancha Multiple</span></div>
                <div class="icons"><img src="/images/caney/icons/gym15.jpg"><span>Gimnasio</span></div>
                <div class="icons"><img src="/images/caney/icons/parque infantil16.jpg"><span>Parque Infantil</span></div>
                <div class="icons"><img src="/images/caney/icons/salon de eventos10.jpg"><span>Salon de Eventos</span></div>
                <div class="icons"><img src="/images/caney/icons/salon para niñoa13.jpg"><span>Salon para Niños</span></div>
                <div class="icons"><img src="/images/caney/icons/sauna y turco14.jpg"><span>Sauna y Turco</span></div>
                <div class="icons"><img src="/images/caney/icons/teatrino18-18.jpg"><span>Teatrino</span></div>
                <div class="icons"><img src="/images/caney/icons/terraza para juegos de mesa12.jpg"><span>Terraza para Juegos</span></div>
                <div class="icons"><img src="/images/caney/icons/zonas verdes19.jpg"><span>Zonas Verdes</span></div>
                
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
                    <div class="grid-item grid-first"><a href="/images/caney/galeria/2.jpg" style="background-image: url(/images/caney/galeria/2.jpg);"></a></div>
                    <div class="grid-item grid-h2"><a href="/images/caney/galeria/3.jpg" style="background-image: url(/images/caney/galeria/3.jpg);"></a></div>
                    <div class="grid-item"><a href="/images/caney/galeria/4.jpg" style="background-image: url(/images/caney/galeria/4.jpg);"></a></div>
                    <div class="grid-item grid-w2 grid-h2"><a href="/images/caney/galeria/5.jpg" style="background-image: url(/images/caney/galeria/5.jpg);"></a></div>
                    <div class="grid-item grid-w2 grid-h2"><a href="/images/caney/galeria/6.jpg" style="background-image: url(/images/caney/galeria/6.jpg);"></a></div>
                    <div class="gallery-hide">
                        <a href="/images/caney/galeria/7.jpg"></a>
                    </div>
                    <div class="gallery-hide">
                        <a href="/images/caney/galeria/8.jpg"></a>
                    </div>
                    <div class="gallery-hide">
                        <a href="/images/caney/galeria/9.jpg"></a>
                    </div>
                    <div class="gallery-hide">
                        <a href="/images/caney/galeria/1.jpg"></a>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col models">
                <h3>Plantas</h3>
                <p>Selecciona un piso para conocer la distribucion de la casa</p>
                <div class="tabs">
                    <span data-tab="tipo1" class="active">1</span>
                    <span data-tab="tipo2">2</span>
                    <span data-tab="tipo2">3</span>
                </div>
                
                <div id="tipo1" class="tab-content active">
                    <img src="/images/caney/piso1.jpg">
                    <table>
                        <tr><td>Habitaciones</td><td>3</td></tr>
                        <tr><td>Baños</td><td>4</td></tr>
                        <tr><td>Parqueadero</td><td>1</td></tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr><td>Area Construida</td><td>96,33 m2</td></tr>
                        <tr><td>Area Privada</td><td>90,49 m2</td></tr>
                        <tr><td> <b>Precio Desde:</b>  </td><td>$ 409.500.000</td></tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr><td colspan="2"><a download="Brochure Caney" href="/images/caney/brochure.pdf">Descarga PDF del brochure</a></td></tr>
                        <tr><td colspan="2"><a download="Plantas Caney" href="/images/caney/plantas.pdf">Descarga PDF de las plantas</a></td></tr>
                    </table>
                    
                </div>
                <div id="tipo2" class="tab-content">
                    <img src="/images/caney/piso2.jpg">
                    <table>
                        <tr><td>Habitaciones</td><td>3</td></tr>
                        <tr><td>Baños</td><td>4</td></tr>
                        <tr><td>Parqueadero</td><td>1</td></tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr><td>Area Construida</td><td>96,33 m2</td></tr>
                        <tr><td>Area Privada</td><td>90,49 m2</td></tr>
                        <tr><td>Precio Desde:</td><td>$ 409.500.000</td></tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr><td colspan="2"><a download="Brochure Caney" href="/images/caney/brochure.pdf">Descarga PDF del brochure</a></td></tr>
                        <tr><td colspan="2"><a download="Plantas Caney" href="/images/caney/plantas.pdf">Descarga PDF de las plantas</a></td></tr>
                    </table>
                    
                    
                </div>
                <div id="tipo3" class="tab-content">
                    <img src="/images/caney/piso3.jpg">
                    <table>
                       <tr><td>Habitaciones</td><td>3</td></tr>
                        <tr><td>Baños</td><td>4</td></tr>
                        <tr><td>Parqueadero</td><td>1</td></tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr><td>Area Construida</td><td>96,33 m2</td></tr>
                        <tr><td>Area Privada</td><td>90,49 m2</td></tr>
                        <tr><td>Precio Desde:</td><td>$ 409.500.000</td></tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr><td colspan="2"><a download="Brochure Caney" href="/images/caney/brochure.pdf">Descarga PDF del brochure</a></td></tr>
                        <tr><td colspan="2"><a download="Plantas Caney" href="/images/caney/plantas.pdf">Descarga PDF de las plantas</a></td></tr>
                    </table>
                   
                </div>
                <h3>Disponibilidad</h3>
                <div class="floors">
                    <span class="sold">1</span><span class="sold">2</span><span class="sold">3</span><span class="sold">4</span>
                    <span class="sold">9</span><span class="sold">10</span><span class="sold">11</span><span class="sold">12</span>
                    <span class="sold">17</span><span class="sold">18</span><span class="sold">19</span><span class="sold">20</span>
                    <span class="sold">25</span><span class="sold">26</span><span class="sold">27</span><span class="sold">28</span>
                    <span class="sold">33</span><span class="sold">34</span><span class="sold">35</span><span class="sold">36</span>
                    <span class="vacant">41</span><span class="sold">42</span><span class="sold">43</span><span class="sold">44</span>
                    <span class="sold">49</span><span class="sold">50</span><span class="sold">51</span><span class="sold">52</span>
                    <span class="sold">57</span><span class="sold">58</span><span class="vacant">59</span><span class="sold">60</span>
                </div>
                
                <div class="floors">
                    <span class="sold">5</span><span class="sold">6</span><span class="sold">7</span><span class="sold">8</span>
                    <span class="sold">13</span><span class="sold">14</span><span class="sold">15</span><span class="sold">16</span>
                    <span class="sold">21</span><span class="sold">22</span><span class="sold">23</span><span class="sold">24</span>
                    <span class="sold">29</span><span class="sold">30</span><span class="sold">31</span><span class="sold">32</span>
                    <span class="sold">37</span><span class="sold">38</span><span class="sold">39</span><span class="sold">40</span>
                    <span class="sold">45</span><span class="sold">46</span><span class="sold">47</span><span class="sold">48</span>
                    <span class="sold">53</span><span class="sold">54</span><span class="sold">55</span><span class="sold">56</span>
                    <span class="sold">61</span><span class="sold">62</span><span class="vacant">63</span><span class="sold">64</span>
                    <div class="about">
                        <div class="vacant">Disponible</div>
                        <div class="sold">Vendido</div>
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
