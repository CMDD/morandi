@extends('layouts.web')
@section('content')
  <div class="cover"></div>
        <div class="container-fluid contact-box">
            <div class="row title">
                <div class="col">
                    <h2>¿Tienes alguna solicitud sobre tu nuevo <span>hogar?</span></h2>
                    <h3>Comunícate con nosotros y uno de nuestros asesores te brindará más información</h3>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6 info">
                    <p><strong>OFICINA PRINCIPAL</strong><br>CALLE 117 NRO. 11 A - 62<br><span>PBX:</span> 213 0105</p>
                    <p><strong>SALA DE VENTAS CAJICÁ</strong><br>KM 28 VÍA CAJICÁ, 50 MTS. ANTES DE HELADOS SAN JERÓNIMO<br><span>CEL.</span> 314 218 3203<br><span class="padd">310 791 7326</span></p>
                    <p><span>L - V:</span> 10AM - 5PM<br><span>SABADO:</span> 10AM - 6PM<br><span>DOMINGO:</span> CERRADO</p>
                </div>
                <div class="col-md-6 form">
                    <form>
                        <input type="text" placeholder="NOMBRE">
                        <input type="email" placeholder="EMAIL">
                        <input type="tel" placeholder="TEL/CEL">
                        <label>
                            <span>PROYECTO</span><select>
                                <option>Seleccione...</option>
                                <option>Proyecto 1</option>
                                <option>Proyecto 2</option>
                                <option>Proyecto 3</option>
                            </select>
                        </label>
                        <label>
                            <span>TIPO DE INMUEBLE</span><select>
                                <option>Seleccione...</option>
                                <option>Tipo 1</option>
                                <option>Tipo 2</option>
                                <option>Tipo 3</option>
                            </select>
                        </label>
                        <textarea placeholder="MENSAJE"></textarea>
                        <strong>DATOS DEL INMUEBLE</strong>
                        <input type="text" placeholder="PROPIETARIO">
                        <input type="text" placeholder="TORRE (SI APLICA)">
                        <input type="text" placeholder="APARTAMENTO / CASA / OFICINA">
                        <label>
                            <span>FECHA DE ENTREGA DEL INMUEBLE</span><select>
                                <option>Seleccione...</option>
                                <option>Fecha 1</option>
                                <option>Fecha 2</option>
                                <option>Fecha 3</option>
                            </select>
                        </label>
                        <div class="submit">
                            <label><input type="checkbox"> Acepto política de tratamiento de datos</label><span><input type="submit" class="btn" value="Enviar"></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>    
    @include('layouts.footer')
@stop

@push('styles')
<link rel="stylesheet" href="/css/postventa.css">
<link rel="stylesheet" href="/css/magnific-popup.css" type='text/css' media='all'>
@endpush
@push('scripts')
<script type="text/javascript" src="/js/isotope.min.js"></script>
<script type="text/javascript" src="/js/jquery.magnific-popup.min.js"></script>

@endpush
