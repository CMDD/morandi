@extends('layouts.web')
@section('content')
    <div class="go-contact">CONTACTO</div>
    <div class="cover to-left">
        <div class="outer">
            <div class="inner" style="background-image: url(/images/caney/banner_caney.jpg;"></div>
        </div>
        <img class="logo" src="/images/caney/logo Caney.png">
    </div>
    <div class="container-fluid">
        <div class="row align-items-center my-5">
            <div class="col-lg-7 col-xl-6 subtitle" data-aos-delay="100" data-aos="zoom-out-right">
                <h3><span class="top">Un lugar para compartir en  </span> <span class="bottom">familia</span>
                </h3>
            </div>
            <div class="col-lg-5 description" data-aos-delay="200" data-aos="zoom-in-up">
                <p>Caney Condominio Residencial, se encuentra ubicado en el municipio de Chía, en la vereda Bojacá, integrado por  64 casas de 2 niveles +altillo, con zonas sociales en las que disfrutaras momentos inolvidables, por su ubicación cuenta con excelentes vías de acceso como la carrera 9 y la vía principal Chía – Cajicá.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col p-0 full-img">
                <!--<img src="img/img-proyecto-01.jpg">-->
                <div class="video-embed">
                    

                        <iframe width="560" height="315" src="https://www.youtube.com/embed/tcDZz7JWI-Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 py-5 items">
                <h3>En Caney <span>podrás disfrutar de</span></h3>
                <div class="slide-items">
                    <div><img src="/images/caney/icons/salon de eventos10.jpg"><span>Salón Comunal</span></div>
                    <div><img src="/images/caney/icons/bbq11.jpg"><span>Zona para BBQ</span></div>
                    <div><img src="/images/caney/icons/terraza para juegos de mesa12.jpg"><span>Terraza para juegos</span></div>
                    <div><img src="/images/caney/icons/salon_ninos.jpg"><span>Salon para niños</span></div>
                    <div><img src="/images/caney/icons/gym15.jpg"><span>Zona para GYM</span></div>
                    <div><img src="/images/caney/icons/parque infantil16.jpg"><span>Parque Infantil</span></div>
                    <div><img src="/images/caney/icons/teatrino.jpg"><span>Teatrino</span></div>
                    <div><img src="/images/caney/icons/sauna o turco25.jpg"><span>Sauna y Turco</span></div>
                    <div><img src="/images/caney/icons/zona de masajes49.jpg"><span>Zona de relajación</span></div>
                    <div><img src="/images/caney/icons/zonas verdes con cenderos peatonales51.jpg"><span>Zonas verdes</span></div>
                    <div><img src="/images/caney/icons/cancha multiple06.jpg"><span>Cancha múltiple</span></div>
                       
                </div>
                <p class="info">* Las zonas comunes no incluyen dotación <br> * Las canchas son de uso recreativo  para microfutbol y voleibol, no tienen medidas reglamentarias.
             </p>
            </div>
            <div class="col-md-6 py-5 sites">
                <h3>Sitios de <span>interés</span></h3>
                <ul>
                    <li><img src="/images/senior/icons/clinica.png">Clinica Marly</li>
                    <li><img src="/images/caney/icons/colegio.png">Colegio Maryland</li>
                    <li><img src="/images/senior/icons/centro comercial.png">Centro comercial Fontanar</li>
                    <li><img src="/images/senior/icons/centro comercial.png">Centro comercial Bazar</li>
                    <li><img src="/images/senior/icons/universidad.png">Universidad Manuela Beltrán </li>
                    <li><img src="/images/senior/icons/universidad.png">Universidad de la Sabana</li>
                    <!-- <li><img src="/images/caney/icons/gym.png">Gimnasio BodyTech</li> -->
                </ul>
                <a href="#" class="maps"><img src="/img/google-maps.svg"><span>Encuentra este proyecto en Google
                        Maps</span>
                </a>
            </div>
        </div>
        <div class="row gallery">
            <div class="col-sm-8 gallery-1">
                <div class="gallery-item he1"><a href="/images/caney/galeria/8.jpg"
                        style="background-image: url(/images/caney/galeria/8.jpg);"></a></div>
                <div class="gallery-item wi2l he2"><a href="/images/caney/galeria/2.jpg"
                        style="background-image: url(/images/caney/galeria/2.jpg);"></a></div>
                <div class="gallery-item wi2r he2"><a href="/images/caney/galeria/3.jpg"
                        style="background-image: url(/images/caney/galeria/3.jpg);"></a></div>
            </div>
            <div class="col-sm-4 gallery-2">
                <div class="gallery-item he2"><a href="/images/caney/galeria/4.jpg" style="background-image: url(/images/caney/galeria/4.jpg);"></a>
                </div>
                <div class="gallery-item he3"><a href="/images/caney/galeria/5.jpg" style="background-image: url(/images/caney/galeria/5.jpg);"></a>
                </div>
                <div class="gallery-item he4"><a href="/images/caney/galeria/6.jpg"
                        style="background-image: url(/images/caney/galeria/6.jpg);"></a></div>
            </div>
            <div class="gallery-hide">
                <a href="/images/caney/galeria/7.jpg"></a>
                <a href="/images/caney/galeria/1.jpg"></a>
                <a href="/images/caney/galeria/9.jpg"></a>
                <a href="/images/caney/galeria/10.jpg"></a>
                <a href="/images/caney/galeria/11.jpg"></a>

               
            </div>
            
        </div>
    
    
    <div class="row">
        <div class="col models">
            <h3>Plantas</h3>
            <!-- <p>Selecciona un tipo de apartamento para ver la disponibilidad</p> -->
            <div class="tipos">
                <div class="tabs">
                    <span data-tab="tipo1" class="txt active">Piso 1</span>
                    <span data-tab="tipo2" class="txt">Piso 2</span>
                    <span data-tab="tipo3" class="txt">Altillo</span>
                    <span data-tab="urbanismo" class="txt">Urbanismo</span>
                </div>
                <div id="tipo1" class="tab-content active">
                    <div class="slider">
                        <div class="slide-type">
                            <div>
                                <img src="/images/caney/piso1.jpg">
                            </div>
                             <!-- <div>
                                <img src="/images/senior/planta2.png">
                            </div> -->
                            <!-- <div>
                                <img src="/img/modelo-1.jpg">
                            </div>  -->
                        </div> <br>
                        <p>* Las imágenes son ilustrativas y pueden estar sujetas a cambios sin previo aviso.</p>
                    </div>
                    <table>
                        <tr>
                            <td>Habitaciones</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Baños</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>Sala - Comedor</td>
                        </tr>
                        <tr>
                            <td>Patio interior</td>
                        </tr>
                        <tr>
                            <td>Terraza en altillo</td>
                        </tr>
                        
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Área construida</td>
                            <td>96,33 m2</td>
                        </tr>
                        <!-- <tr>
                            <td>Area Privada</td>
                            <td>6.5 m2</td>
                        </tr> -->
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><strong>Precio desde:</strong></td>
                            <td><strong>$409.000.000</strong></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2"><a download="brochure" href="/images/caney/brochure.pdf">Descarga PDF del brochure</a></td>
                        </tr>
                        <!-- <tr>
                            <td colspan="2"><a download="plantas" href="/images/caney/plantas.pdf">Descarga PDF de las plantas</a></td>
                        </tr> -->
                    </table>
                </div>
                <div id="tipo2" class="tab-content">
                    <div class="slider">
                        <div class="slide-type">
                            <div>
                            <img src="/images/caney/piso2.jpg">
                            </div>
                            <!-- <div>
                                <img src="/img/modelo-1.jpg">
                            </div>
                            <div>
                                <img src="/img/modelo-1.jpg">
                            </div> -->
                        </div>
                        <br>
                        <p>* Las imágenes son ilustrativas y pueden estar sujetas a cambios sin previo aviso.</p>
                    </div>
                    <table>
                        <tr>
                            <td>Habitaciones</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Baños</td>
                            <td>4</td>
                        </tr>
                       <tr>
                            <td>Sala - Comedor</td>
                        </tr>
                        <tr>
                            <td>Patio interior</td>
                        </tr>
                        <tr>
                            <td>Terraza en altillo</td>
                        </tr>
                        
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Área construida</td>
                            <td>96,33 m2</td>
                        </tr>
                        <!-- <tr>
                            <td>Area Privada</td>
                            <td>6.5 m2</td>
                        </tr> -->
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><strong>Precio desde:</strong></td>
                            <td><strong>$409.000.000</strong></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2"><a download="brochure" href="/images/caney/brochure.pdf">Descarga PDF del brochure</a></td>
                        </tr>
                        <!-- <tr>
                            <td colspan="2"><a download="plantas" href="/images/caney/plantas.pdf">Descarga PDF de las plantas</a></td>
                        </tr> -->
                    </table>
                </div>

                <div id="tipo3" class="tab-content">
                    <div class="slider">
                        <div class="slide-type">
                            <div>
                                <img src="/images/caney/piso3.jpg">
                            </div>
                            <!-- <div>
                                                <img src="/img/modelo-1.jpg">
                                            </div>
                                            <div>
                                                <img src="/img/modelo-1.jpg">
                                            </div> -->
                        </div>
                        <br>
                        <p>* Las imágenes son ilustrativas y pueden estar sujetas a cambios sin previo aviso.</p>
                    </div>
                    <table>
                        <tr>
                            <td>Habitaciones</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Baños</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>Sala - Comedor</td>
                        </tr>
                        <tr>
                            <td>Patio interior</td>
                        </tr>
                        <tr>
                            <td>Terraza en altillo</td>
                        </tr>
                        
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Área construida</td>
                            <td>96,33 m2</td>
                        </tr>
                        <!-- <tr>
                                            <td>Area Privada</td>
                                            <td>6.5 m2</td>
                                        </tr> -->
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><strong>Precio desde:</strong></td>
                            <td><strong>$409.000.000</strong></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2"><a download="brochure" href="/images/caney/brochure.pdf">Descarga PDF del brochure</a></td>
                        </tr>
                        <!-- <tr>
                            <td colspan="2"><a download="plantas" href="/images/caney/plantas.pdf">Descarga PDF de las plantas</a></td>
                        </tr> -->
                    </table>
                   
                </div>
                <div id="urbanismo" class="tab-content">

                        
                    <img style="max-width: 500px" src="/images/caney/urbanismo.jpg">
                
                    <table>
                        <tr>
                            <td>64 casas</td>
                        </tr>
                        <tr>
                            <td>Conjunto Cerrado</td>
                        </tr>
                        <tr>
                            <td>Deportes al aire libre</td>
                        </tr>
                        <tr>
                            <td>Juegos infantiles</td>
                        </tr>
                        
                
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                
                
                
                
                    </table>
                
                </div>
            </div>
            <h3>Disponibilidad</h3>
            <div class="torres">
                <div class="tabs">
                    <span data-tab="torre1" class="active">Etapa 1</span>
                    <span data-tab="torre2">Etapa 2</span>
                    <span data-tab="torre3">Etapa 3</span>
                    <span data-tab="torre4">Etapa 4</span>
                    <div class="about">
                        <div>Disponible</div>
                        <div class="sold">Vendido</div>
                    </div>
                </div>
                <div id="torre1" class="tab-content active">
                    <div class="floors">
                        <h4>Casas</h4>
                        <span class="sold">1</span><span class="sold">2</span><span class="sold">3</span><span class="sold">4</span><span class="sold">5</span><span class="sold">6</span><span class="sold">7</span><span class="sold">8</span><span class="sold">9</span><span class="sold">10</span><span class="sold">11</span><span class="sold">12</span><span class="">13</span><span class="sold">14</span><span class="sold">15</span><span class="sold">16</span>
                    </div>

                </div>
                <div id="torre2" class="tab-content">
                    <div class="floors">
                        <h4>Casas</h4>
                        <span class="sold">17</span><span class="sold">18</span><span class="sold">19</span><span class="sold">20</span><span class="sold">21</span><span class="">22</span><span class="sold">23</span><span class="sold">24</span><span class="sold">25</span><span class="sold">26</span><span class="sold">27</span><span class="sold">28</span><span class="sold">29</span><span class="">30</span><span class="">31</span><span class="sold">32</span>
                    </div>
                    
                </div>
                <div id="torre3" class="tab-content">
                    <div class="floors">
                        <h4>Casas</h4>
                        <span class="sold">33</span><span class="">34</span><span class="sold">35</span><span class="sold">36</span><span class="sold">37</span><span class="sold">38</span><span class="sold">39</span><span class="sold">40</span><span class="">41</span><span class="sold">42</span><span class="sold">43</span><span class="sold">44</span><span class="sold">45</span><span class="sold">46</span><span class="sold">47</span><span class="sold">48</span>
                    </div>
                    
                </div>
                <div id="torre4" class="tab-content">
                    <div class="floors">
                        <h4>Casas</h4>
                        <span class="sold">49</span><span class="sold">50</span><span class="sold">51</span><span class="sold">52</span><span class="sold">53</span><span class="sold">54</span><span class="sold">55</span><span class="sold">56</span><span class="sold">57</span><span class="sold">58</span><span class="">59</span><span class="">60</span><span class="sold">61</span><span class="sold">62</span><span class="">63</span><span class="sold">64</span>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
        
    
    
        <div id="contact" class="row align-items-center contact">
            <div class="col-md-6 image" data-aos="fade-up">
                <img src="/img/contact.png">
            </div>
        <div class="col-md-6 form" data-aos="fade-up">
            <p class="title-form">Para saber mas de este proyecto…</p>
            <h3>Envíanos tus datos<br>y te contactaremos!</h3>
            <form action="{{url('email-proyect')}}" method="POST">
                {!!csrf_field()!!}
                <input required type="text" name="nombre" placeholder="NOMBRE">
                <input type="email" name="email" placeholder="EMAIL">
                <input type="tel" name="tel" placeholder="TEL/CEL">
                <input type="hidden" name="proyecto" value="Caney">
                <label>¿Como te enteraste del proyecto?
                    <select name="enteraste">
                         <option>Selecciona...</option>
                        <option>Facebook</option>
                        <option>Instagram</option>
                        <option>Google</option>
                        <option>Estrenar Vivienda</option>
                        <option>Metro Cuadrado</option>
                        <option>Properati</option>
                    </select>
                </label>
                <label><input name="politicas" required type="checkbox"> Acepto <a href="{{url('politicas')}}" target="_blank">política de tratamiento de datos</a></label>
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
                    <a href="/avance/caney">Entrar</a>
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
    .subtitle h3, .items h3, .models h3, .tabs span, .tab-content td strong, .floors h4, .contact h3 {
        color: #673b15;
    }
    .subtitle h3 .bottom {
        /* color: #392b00; */
        color: #673b15;

    }
    .sites, .tabs span.active, .tab-content td a {
        background: #FCC500;
    }
    .btn {
        background: #392b00;
    }
    .btn:hover {
        background: #FCC500;
    }
    .tabs span.active {
        border-color: #FCC500;
    }

    .sites h3 {
   
    color: #673b15;
}
    .sites li {
   
    color: #673b15;
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
