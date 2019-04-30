@extends('layouts.web')
@section('content')
    <div class="cover to-left" style="background-image: url(/images/senior/banner.jpg);">
        <img class="logo" src="/images/senior/logo_home.png">
    </div>
    <div class="container-fluid">
        <div class="row align-items-center my-5">
            <div class="col-lg-7 col-xl-6 subtitle" data-aos-delay="100" data-aos="zoom-out-right">
                <h3><span class="top">La elegancia y el confort </span> de vivir en un lugar <span class="bottom">diseñado para ti</span>
                </h3>
            </div>
            <div class="col-lg-5 description" data-aos-delay="200" data-aos="zoom-in-up">
                <p>Proyecto Residencial enfocado en el adulto mayor activo e independiente, donde la única condición para habitarlo es ser mayor de 50 años.
                    Se encuentra ubicado cerca de la ciudad de Bogotá, en una zona afortunada de Guaymaral con un entorno único, natural y tranquilo, como solo lo ofrece la sabana norte.
                    Nuestra propuesta logra entender las necesidades de personas que buscan un lugar tranquilo, elegante, con todas las comodidades y espacios de recreación y socialización que promueven su independencia y autonomía.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col p-0 full-img">
                <!--<img src="img/img-proyecto-01.jpg">-->
                <div class="video-embed">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/F9VcZdGfjPg" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 py-5 items">
                <h3>En Senior Suites <span>podrás disfrutar de</span></h3>
                <div class="slide-items">
                    <div><img src="/images/senior/icons/Biblioteca y zona de computo 43.jpg"><span>Biblioteca</span></div>
                    <div><img src="/images/senior/icons/Lobby38.jpg"><span>Lobby</span></div>
                    <div><img src="/images/senior/icons/Auditorio39.jpg"><span>Auditorio</span></div>
                    <div><img src="/images/senior/icons/Terraza40.jpg"><span>Terraza</span></div>
                    <div><img src="/images/senior/icons/Salon de reuniones 41.jpg"><span>Salón de reuniones</span></div>
                    <div><img src="/images/senior/icons/Sala de juegos42.jpg"><span>Sala de juegos</span></div>
                    <div><img src="/images/senior/icons/restaurante44.jpg"><span>Restaurante</span></div>
                    <div><img src="/images/senior/icons/oratorio45.jpg"><span>Oratorio</span></div>
                    <div><img src="/images/senior/icons/piscina46.jpg"><span>Piscina</span></div>
                    <div><img src="/images/senior/icons/Gym47.jpg"><span>Gimnasio</span></div>
                    <div><img src="/images/senior/icons/sauna y turco48.jpg"><span>Sauna</span></div>
                    <div><img src="/images/senior/icons/zona de masajes49.jpg"><span>Zona de Masajes</span></div>
                    <div><img src="/images/senior/icons/enfermeria primeros auxilios50.jpg"><span>Enfermería</span></div>
                    <div><img src="/images/senior/icons/zonas verdes con cenderos peatonales51.jpg"><span>Zonas verdes</span></div>
                   
                </div>
            </div>
            <div class="col-md-6 py-5 sites">
                <h3>Sitios de <span>interés</span></h3>
                <ul>
                    <li><img src="/images/senior/icons/restaurante.png">Restaurante Andres Carne de Res</li>
                    <li><img src="/images/senior/icons/universidad.png">Universidad de la Sabana</li>
                    <li><img src="/images/senior/icons/centro comercial.png">Centro Comercial Fontanar</li>
                    <li><img src="/images/senior/icons/clinica.png">Clínica Marly</li>
                    <li><img src="/images/senior/icons/centro comercial.png">Centro Chía</li>
                    
                </ul>
                <a href="#" class="maps"><img src="/img/google-maps.svg"><span>Encuentra este proyecto en Google
                        Maps</span></a>
            </div>
        </div>
        <div class="row gallery">
            <div class="col-sm-8 gallery-1">
                <div class="gallery-item he1"><a href="/images/senior/galeria/8.jpg"
                        style="background-image: url(/images/senior/galeria/8.jpg);"></a></div>
                <div class="gallery-item wi2l he2"><a href="/images/senior/galeria/3.jpg"
                        style="background-image: url(/images/senior/galeria/3.jpg);"></a></div>
                <div class="gallery-item wi2r he2"><a href="/images/senior/galeria/4.jpg"
                        style="background-image: url(/images/senior/galeria/4.jpg);"></a></div>
            </div>
            <div class="col-sm-4 gallery-2">
                <div class="gallery-item he2"><a href="/images/senior/galeria/5.jpg" style="background-image: url(/images/senior/galeria/5.jpg);"></a>
                </div>
                <div class="gallery-item he3"><a href="/images/senior/galeria/6.jpg" style="background-image: url(/images/senior/galeria/6.jpg);"></a>
                </div>
                <div class="gallery-item he4"><a href="/images/senior/galeria/7.jpg"
                        style="background-image: url(/images/senior/galeria/7.jpg);"></a></div>
            </div>
            <div class="gallery-hide">
                <a href="/images/senior/galeria/8.jpg"></a>
                <a href="/images/senior/galeria/seniorHOME.jpg"></a>
                
                <a href="/images/senior/galeria/11.jpg"></a>
                <a href="/images/senior/galeria/10.jpg"></a>
               
            </div>
            
        </div>
    
    
    <div class="row">
        <div class="col models">
            <h3>Tipos de Suites</h3>
            <!-- <p>Selecciona un tipo de apartamento para ver la disponibilidad</p> -->
            <div class="tipos">
                <div class="tabs">
                    <span data-tab="tipo1" class="active">1</span>
                    <span data-tab="tipo2">2</span>
                    <!-- <span data-tab="tipo3">3</span>
                    <span data-tab="tipo4" class="txt">Urbanismo</span> -->
                </div>
                <div id="tipo1" class="tab-content active">
                    <div class="slider">
                        <div class="slide-type">
                            <div>
                                <img src="/images/senior/planta1.png">
                            </div>
                             <!-- <div>
                                <img src="/images/senior/planta2.png">
                            </div> -->
                            <!-- <div>
                                <img src="/img/modelo-1.jpg">
                            </div>  -->
                        </div>
                    </div>
                    <table>
                        <tr>
                            <td>Habitaciones</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Baños</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Sala - Comedor</td>
                        </tr>
                        <tr>
                            <td>Cocina abierta</td>
                        </tr>
                        <tr>
                            <td>Estufa y calentador eléctrico</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Area Construida</td>
                            <td>60.12 m2</td>
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
                            <td><strong>$305.570.000</strong></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2"><a download="brochure" href="/images/senior/SeniorSuites_Brochure.pdf">Descarga PDF del brochure</a></td>
                        </tr>
                        <tr>
                            <td colspan="2"><a download="plantas" href="/images/senior/plantas.pdf">Descarga PDF de las plantas</a></td>
                        </tr>
                    </table>
                </div>
                <div id="tipo2" class="tab-content">
                    <div class="slider">
                        <div class="slide-type">
                            <div>
                            <img src="/images/senior/planta3.png">
                            </div>
                            <!-- <div>
                                <img src="/img/modelo-1.jpg">
                            </div>
                            <div>
                                <img src="/img/modelo-1.jpg">
                            </div> -->
                        </div>
                    </div>
                    <table>
                        <tr>
                            <td>Habitaciones</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Baños</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Sala - Comedor</td>
                        </tr>
                        <tr>
                            <td>Cocina abierta</td>
                        </tr>
                        <tr>
                            <td>Estufa y calentador eléctrico</td>
                        </tr>

                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Area Construida</td>
                            <td>37.23 m2</td>
                        </tr>

                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><strong>Precio desde:</strong></td>
                            <td><strong>$205.457.000</strong></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2"><a download="brochure" href="/images/senior/SeniorSuites_Brochure.pdf">Descarga PDF del brochure</a></td>
                        </tr>
                        <tr>
                            <td colspan="2"><a download="plantas" href="/images/senior/plantas.pdf">Descarga PDF de las plantas</a></td>
                        </tr>
                    </table>
                </div>
            </div>
            <h3>Disponibilidad</h3>
            <div class="torres">
                <div class="tabs">
                    <span data-tab="torre1" class="active">Torre 1</span>
                    <span data-tab="torre2">Torre 2</span>
                    <div class="about">
                        <div>Disponible</div>
                        <div class="sold">Vendido</div>
                    </div>
                </div>
                <div id="torre1" class="tab-content active">
                    <div class="floors">
                        <h4>Piso 2</h4>
                        <span>201</span><span>202</span><span class="">203</span><span>204</span><span>205</span><span>206</span><span class="">207</span><span>208</span><span>209</span><span>210</span><span class="">211</span><span class="">212</span><span>213</span><span class="">214</span><span>215</span><span class="sold">216</span><span>217</span><span>218</span><span>219</span><span class="sold">220</span><span>221</span><span>222</span><span>223</span><span>224</span>
                    </div>
                    <div class="floors">
                        <h4>Piso 3</h4>
                        <span class="sold">301</span><span>302</span><span>303</span><span>304</span><span >305</span><span class="sold">306</span><span class="sold">307</span><span class="sold">308</span><span>309</span><span>310</span><span class="sold">311</span><span>312</span><span class="sold">313</span><span>314</span><span>315</span><span >316</span><span>317</span><span>318</span><span>319</span><span>320</span><span>321</span><span class="sold">322</span><span>323</span><span>324</span>
                    </div>
                    <div class="floors">
                        <h4>Piso 4</h4>
                        <span class="sold">401</span><span class="sold">402</span><span>403</span><span>404</span><span>405</span><span>406</span><span >407</span><span class="sold">408</span><span class="sold">409</span><span class="sold">410</span><span>411</span><span >412</span><span>413</span><span>414</span><span>415</span><span>416</span><span>417</span><span>418</span><span>419</span><span>420</span><span>421</span><span>422</span><span>423</span><span>424</span>
                    </div>

                </div>
                <div id="torre2" class="tab-content">
                    <div class="floors">
                        <h4>Piso 2</h4>
                        <span class="sold">201</span><span>202</span><span>203</span><span>204</span><span >205</span><span>206</span><span class="sold">207</span><span class="sold">208</span><span class="sold">209</span><span class="sold">210</span><span class="sold">211</span><span class="sold">212</span><span class="sold">213</span><span class="sold">214</span><span class="sold">215</span><span class="sold">216</span><span class="sold">217</span><span class="sold">218</span><span class="sold">219</span><span class="sold">220</span><span class="sold">221</span><span class="sold">222</span><span class="sold">223</span><span class="sold">224</span>
                    </div>
                    <div class="floors">
                        <h4>Piso 3</h4>
                        <span>301</span><span>302</span><span class="sold">303</span><span class="sold">304</span><span>305</span><span class="sold">306</span><span>307</span><span>308</span><span>309</span><span class="sold">310</span><span class="sold">311</span><span class="sold">312</span><span class="sold">313</span><span class="sold">314</span><span class="sold">315</span><span class="sold">316</span><span class="sold">317</span><span class="sold">318</span><span class="sold">319</span><span class="sold">320</span><span class="sold">321</span><span class="sold">322</span><span class="sold">323</span><span class="sold">324</span>
                    </div>

                    <div class="floors">
                        <h4>Piso 4</h4>
                        <span class="sold">401</span><span
                            class="sold">402</span><span class="sold">403</span><span>404</span><span class="sold">405</span><span class="sold">406</span><span class="sold">407</span><span
                            class="sold">408</span><span class="sold">409</span><span
                            class="sold">410</span><span class="sold">411</span><span class="sold">412</span><span class="sold">413</span><span class="sold">414</span><span class="sold">415</span><span class="sold">416</span><span class="sold">417</span><span class="sold">418</span><span class="sold">419</span><span class="sold">420</span><span class="sold">421</span><span class="sold">422</span><span class="sold">423</span><span class="sold">424</span>
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
<style>
    .subtitle h3, .items h3, .models h3, .tabs span, .tab-content td strong, .floors h4, .contact h3 {
        color:#C1A458;
    }
    .subtitle h3 .bottom {
        color: #392b00;
    }
    .sites, .tabs span.active, .tab-content td a {
        background: #c1a458c2;
    }
    .btn {
        background: #392b00;
    }
    .btn:hover {
        background: #C1A458;
    }
    .tabs span.active {
        border-color: #C1A458;
    }
</style>
@endpush
@push('scripts')


@endpush
