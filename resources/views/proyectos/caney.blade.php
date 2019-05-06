@extends('layouts.web')
@section('content')
    <div class="cover to-left" style="background-image: url(/images/caney/caney_home.jpg);">
        <img class="logo" src="/images/caney/logo Caney.png">
    </div>
    <div class="container-fluid">
        <div class="row align-items-center my-5">
            <div class="col-lg-7 col-xl-6 subtitle" data-aos-delay="100" data-aos="zoom-out-right">
                <h3><span class="top">DESCUBRE EL HOGAR QUE  </span> SIEMPRE HAS ESPERADO TENER <span class="bottom"></span>
                </h3>
            </div>
            <div class="col-lg-5 description" data-aos-delay="200" data-aos="zoom-in-up">
                <p>Casas en conjunto cerrado, de 2 niveles + altillo, 3 alcobas con baño privado, en el altillo encuentras la alcoba principal completamente privada con terraza. El proyecto está ubicado en el municipio de Chía, vereda bojaca.
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
                <h3>En Caney <span>podrás disfrutar de</span></h3>
                <div class="slide-items">
                    <div><img src="/images/caney/icons/salon de eventos10.jpg"><span>Salón Comunal</span></div>
                    <div><img src="/images/caney/icons/bbq11.jpg"><span>Zona para BBQ</span></div>
                    <div><img src="/images/caney/icons/terraza para juegos de mesa12.jpg"><span>Terraza para juegos</span></div>
                    <div><img src="/images/caney/icons/salon para niñoa13.jpg"><span>Salon para niños</span></div>
                    <div><img src="/images/caney/icons/gym15.jpg"><span>Zona para GYM</span></div>
                    <div><img src="/images/caney/icons/parque infantil16.jpg"><span>Parque Infantil</span></div>
                    <div><img src="/images/caney/icons/teatrino18.jpg"><span>Teatrino</span></div>
                       
                </div>
            </div>
            <div class="col-md-6 py-5 sites">
                <h3>Sitios de <span>interés</span></h3>
                <ul>
                    <li><img src="/images/senior/icons/universidad.png">Universidad Manuela Beltrán</li>
                    <li><img src="/images/senior/icons/restaurante.png">Universidad Militar</li>
                    <li><img src="/images/senior/icons/universidad.png">Universidad de la Sabana</li>
                    <li><img src="/images/senior/icons/centro comercial.png">Centro Comercial Fontanar</li>
                    <li><img src="/images/caney/icons/puente_comun.png">Puente del Común </li>
                    <li><img src="/images/caney/icons/Jaime Duque.png">Parque Jaime Duque</li>
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
                <div class="gallery-item wi2l he2"><a href="/images/caney/galeria/3.jpg"
                        style="background-image: url(/images/caney/galeria/3.jpg);"></a></div>
                <div class="gallery-item wi2r he2"><a href="/images/caney/galeria/4.jpg"
                        style="background-image: url(/images/caney/galeria/4.jpg);"></a></div>
            </div>
            <div class="col-sm-4 gallery-2">
                <div class="gallery-item he2"><a href="/images/caney/galeria/5.jpg" style="background-image: url(/images/caney/galeria/5.jpg);"></a>
                </div>
                <div class="gallery-item he3"><a href="/images/caney/galeria/6.jpg" style="background-image: url(/images/caney/galeria/6.jpg);"></a>
                </div>
                <div class="gallery-item he4"><a href="/images/caney/galeria/7.jpg"
                        style="background-image: url(/images/caney/galeria/7.jpg);"></a></div>
            </div>
            <div class="gallery-hide">
                <a href="/images/caney/galeria/2.jpg"></a>
                <a href="/images/caney/galeria/1.jpg"></a>

               
            </div>
            
        </div>
    
    
    <div class="row">
        <div class="col models">
            <h3>Pisos</h3>
            <!-- <p>Selecciona un tipo de apartamento para ver la disponibilidad</p> -->
            <div class="tipos">
                <div class="tabs">
                    <span data-tab="tipo1" class="active">1</span>
                    <span data-tab="tipo2">2</span>
                    <span data-tab="tipo3">3</span>
                    <!--<span data-tab="tipo4" class="txt">Urbanismo</span> -->
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
                        </div>
                    </div>
                    <table>
                        <tr>
                            <td>Habitaciones</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Baños</td>
                            <td>4</td>
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
                            <td>Area Total</td>
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
                        <tr>
                            <td colspan="2"><a download="plantas" href="/images/caney/plantas.pdf">Descarga PDF de las plantas</a></td>
                        </tr>
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
                    </div>
                    <table>
                        <tr>
                            <td>Habitaciones</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Baños</td>
                            <td>4</td>
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
                            <td>Area Total</td>
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
                        <tr>
                            <td colspan="2"><a download="plantas" href="/images/caney/plantas.pdf">Descarga PDF de las plantas</a></td>
                        </tr>
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
                    </div>
                    <table>
                        <tr>
                            <td>Habitaciones</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Baños</td>
                            <td>4</td>
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
                            <td>Area Total</td>
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
                        <tr>
                            <td colspan="2"><a download="plantas" href="/images/caney/plantas.pdf">Descarga PDF de las plantas</a></td>
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
                        <span class="sold">401</span><span class="sold">402</span><span>403</span><span>404</span><span>405</span><span>406</span><span >407</span><span class="sold">408</span><span class="sold">409</span><span class="sold">410</span><span>411</span><span >412</span><span>413</span><span>414</span><span>415</span><span>416</span><span>417</span><span>418</span><span class="sold">419</span><span class="sold">420</span><span>421</span><span>422</span><span>423</span><span>424</span>
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
    .logo{
        /* margin-top:7%; */
        width:18%;
    }

    .sites h3 {
   
    color: #673b15;
}
</style>
@endpush
@push('scripts')


@endpush
