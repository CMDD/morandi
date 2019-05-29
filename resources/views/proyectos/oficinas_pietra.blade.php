@extends('layouts.web')
@section('content')
    <div class="cover to-left">
        <div class="outer">
            <div class="inner" style="background-image: url(/images/ofipietra/banner.jpg);"></div>
        </div>
        <img class="logo" src="/images/ofipietra/logo_page.png">
    </div>
    <div class="container-fluid">
        <div class="row align-items-center my-5">
            <div class="col-lg-7 col-xl-6 subtitle" data-aos-delay="100" data-aos="zoom-out-right">
                <h3><span class="top">LA MEJOR UBICACIÓN PARA   </span> TU NEGOCIO ESTA  <span class="bottom">en Pietra</span>
                </h3>
            </div>
            <div class="col-lg-5 description" data-aos-delay="200" data-aos="zoom-in-up">
                <p>Pietra oficinas integra el Conjunto Mixto Pietra compuesto por 3 torres: 1 de oficinas y 2 de apartamentos, inspirado en un estilo contemporáneo con atractivos diseños que imponen un estándar de vida urbana en Cajicá.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col p-0 full-img">
                <img src="/images/ofipietra/galeria/FachadainternaNoche.jpg">
                <!-- <div class="video-embed">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/F9VcZdGfjPg" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div> -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 py-5 items">
                <h3>En Pietra Oficinas <span>podrás disfrutar de</span></h3>
                <div class="slide-items">
                    <div><img src="/images/ofipietra/icons/lobby30.jpg"><span>Lobby doble altura</span></div>
                    <div><img src="/images/ofipietra/icons/biometrico31.jpg"><span>Control de Acceso Biométrico</span></div>
                    <div><img src="/images/ofipietra/icons/ascensores32.jpg"><span>Ascensores</span></div>
                    <div><img src="/images/ofipietra/icons/sala de reuniones33.jpg"><span>Salas de reuniones</span></div>
                    <div><img src="/images/ofipietra/icons/banos34.jpg"><span>Baños en cada piso</span></div>
                    <div><img src="/images/ofipietra/icons/circuito de cerrado de tv35.jpg"><span>Circuito cerrado de TV</span></div>
                    <div><img src="/images/ofipietra/icons/planta electrica36.jpg"><span>Planta eléctrica de emergencia</span></div>                  
                    <div><img src="/images/ofipietra/icons/terraza37.jpg"><span>Terraza panorámica</span></div>                  
                </div>

                <p class="info">* 2 Ascensores: Capacidad para 8 personas <br> * Baños para personas con movilidad reducida 
             </p>
                
            </div>
            <div class="col-md-6 py-5 sites">
                <h3>Sitios de <span>interés</span></h3>
                <ul>
                    <li><img src="/images/ofipietra/icons/Jaime Duque_wh.png">Parque Industrial y Comercial Cajicá</li>
                    <li><img src="/images/ofipietra/icons/universidad_wh.png">Zona Franca Sabana Centro</li>
                    <li><img src="/images/ofipietra/icons/universidad_wh.png">Vías 4G: Perimetral de Oriente, IP Accesos Norte</li>
                   
                    <li><img src="/images/ofipietra/icons/centro comercial_wh.png">Hoteles, Restaurantes</li>
                    <li><img src="/images/ofipietra/icons/centro comercial_wh.png">C.C. Fontanar, Centro Chía, Plaza Mayor</li>
                    <li><img src="/images/ofipietra/icons/Jaime Duque_wh.png">Clínica Marly, Concesionarios de automóviles</li>
                </ul>
                <a href="#" class="maps"><img src="/img/google-maps.svg"><span>Encuentra este proyecto en Google
                        Maps</span>
                </a>
            </div>
        </div>
        <div class="row gallery">
            <div class="col-sm-8 gallery-1">
                <div class="gallery-item he1"><a href="/images/ofipietra/galeria/FachadainternaNoche.jpg"
                        style="background-image: url(/images/ofipietra/galeria/FachadainternaNoche.jpg);"></a></div>
                <div class="gallery-item wi2l he2"><a href="/images/ofipietra/galeria/3.jpg"
                        style="background-image: url(/images/ofipietra/galeria/3.jpg);"></a></div>
                <div class="gallery-item wi2r he2"><a href="/images/ofipietra/galeria/4.jpg"
                        style="background-image: url(/images/ofipietra/galeria/4.jpg);"></a></div>
            </div>
            <div class="col-sm-4 gallery-2">
                <div class="gallery-item he2"><a href="/images/ofipietra/galeria/5.jpg" style="background-image: url(/images/ofipietra/galeria/5.jpg);"></a>
                </div>
                <div class="gallery-item he3"><a href="/images/ofipietra/galeria/6.jpg" style="background-image: url(/images/ofipietra/galeria/6.jpg);"></a>
                </div>
                <div class="gallery-item he4"><a href="/images/ofipietra/galeria/1.jpg"
                        style="background-image: url(/images/ofipietra/galeria/1.jpg);"></a>
                </div>
            </div>
            <div class="gallery-hide">
                <a href="/images/ofipietra/galeria/7.jpg"></a>
                <a href="/images/ofipietra/galeria/2.jpg"></a>
                <a href="/images/ofipietra/galeria/Plazoleta 3.jpg"></a>
                <a href="/images/ofipietra/galeria/Fachada principal torre Oficinas.jpg"></a>
                <a href="/images/ofipietra/galeria/Plazoleta 2.jpg"></a>
                <a href="/images/ofipietra/galeria/azotea restaurante pietra f 2.jpg"></a>
               
            </div>
            
        </div>
    
    
    <div class="row">
        <div class="col models">
            <h3>Planta tipo</h3>
            <!-- <p>Selecciona un tipo de apartamento para ver la disponibilidad</p> -->
            <div class="tipos">
                <div class="tabs">
                    
                    <!--<span data-tab="tipo4" class="txt">Urbanismo</span> -->
                </div>
                <div id="tipo1" class="tab-content active">
                    <div class="slider">
                        <div class="slide-type">
                            <div>
                                <img style="width:60%;" src="/images/ofipietra/plantaoficina.png">
                            </div>
                             <!-- <div>
                                <img src="/images/senior/planta2.png">
                            </div> -->
                            <!-- <div>
                                <img src="/img/modelo-1.jpg">
                            </div>  -->
                        </div>
                        <p>* Las imágenes son ilustrativas y pueden estar sujetas a cambios sin previo aviso.</p>
                    </div>
                    <table>
                        <tr>
                            <td>52 oficinas</td>
                            
                        </tr>
                        <tr>
                            <td>Baños en cada piso</td>
                            
                        </tr>
                        <tr>
                            <td>2 Ascensores</td>
                        </tr>
                        
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Área Construida</td>
                            <td>45 a 107 m2</td>
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
                            <td><strong>$392.171.000</strong></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2"><a download="brochure" href="/images/ofipietra/brochure.pdf">Descarga PDF del brochure</a></td>
                        </tr>
                        <!-- <tr>
                            <td colspan="2"><a download="plantas" href="/images/ofipietra/plantas.pdf">Descarga PDF de las plantas</a></td>
                        </tr> -->
                    </table>
                </div>

            </div>
            <h3>Disponibilidad</h3>
             <div class="torres">
                <div class="tabs">
                    <span data-tab="torre1" class="active">Piso 2</span>
                    <span data-tab="torre2">Piso 3</span>
                    <span data-tab="torre3">Piso 4</span>
                    <span data-tab="torre4">Piso 5</span>
                    <div class="about">
                        <div>Disponible</div>
                        <div class="sold">Vendido</div>
                    </div>
                </div>
                <div id="torre1" class="tab-content active">
                    <div class="floors">
                        <h4>Oficinas</h4>
                        <span class="sold">201</span><span class="sold">202</span><span class="sold">203</span><span class="sold">204</span><span class="sold">205</span><span class="sold">206</span><span class="sold">207</span><span class="sold">208</span><span class="sold">209</span><span class="sold">210</span><span class="sold">211</span><span class="sold">212</span><span class="sold">213</span>
                    </div>
                   

                </div>
                <div id="torre2" class="tab-content">
                    <div class="floors">
                        <h4>Oficinas</h4>
                        <span class="sold">301</span><span class="sold">302</span><span class="sold">303</span><span class="sold">304</span><span class="sold">305</span><span
                            class="sold">306</span><span class="sold">307</span><span
                            class="sold">308</span><span class="sold">309</span><span class="sold">310</span><span class="sold">311</span><span class="sold">312</span><span
                            class="sold">313</span>
                    </div>
                </div>
                <div id="torre3" class="tab-content">
                    <div class="floors">
                        <h4>Oficinas</h4>
                        <span class="sold">401</span><span class="sold">402</span><span class="sold">403</span><span class="sold">404</span><span
                            class="sold">405</span><span class="sold">406</span><span class="sold">407</span><span
                            class="sold">408</span><span class="sold">409</span><span>410</span><span
                            class="sold">411</span><span >412</span><span >413</span>
                    </div>
                </div>
                <div id="torre4" class="tab-content">
                    <div class="floors">
                        <h4>Oficinas</h4>
                        <span class="sold">501</span><span class="sold">502</span><span class="sold">503</span><span>504</span><span
                            class="sold">505</span><span class="sold">506</span><span class="sold">507</span><span
                            class="sold">508</span><span class="sold">509</span><span class="sold">510</span><span
                            class="sold">511</span><span >512</span><span>513</span>
                    </div>
                </div>
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
                    <a href="/avance/oficinas-pietra">Entrar</a>
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
        color: #00274B;
    }
    .subtitle h3 .bottom {
        /* color: #392b00; */
        color: #00274B;

    }
    .sites, .tabs span.active, .tab-content td a {
        /* background: #FCC500; */
        /* background: #FF961A; */
        background: #00274B;
    }
    .btn {
        background: #00274B;
    }
    .btn:hover {
        background: #00274B;
    }
    .tabs span.active {
        border-color: #00274B;
    }
    .logo{
        /* margin-top:7%; */
        width:14%;
    }

    .sites h3 {
   
    color: white;
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
