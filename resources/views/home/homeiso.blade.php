@extends('layout.app-master')

@section('tittle', 'Sistema de evaluación ISO 270001');

@section('content')
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">

                                <small>
                                    <div class="card-header">
                                        <strong>CASA ISO 27032</strong>
                                    </div>
                                    <img src="images/icon/logo richard.jpg" alt="John Doe" />

                                </small>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong>Politica de datos</strong>
                            </div>
                            <div class="card-body">
                                <p class="text-muted m-b-15">Este sitio web utiliza cookies propias y de terceros con el
                                    propósito de garantizar el correcto funcionamiento y la
                                    óptima visualización del contenido por parte de los usuarios. Además, las cookies nos
                                    permiten recopilar estadísticas que contribuyen a mejorar nuestros servicios,
                                    como se detalla en nuestra política de cookies disponible en la sección "Finalidad". Al
                                    continuar navegando en nuestro sitio, aceptas el uso de estas cookies.
                                    Si deseas cambiar tus preferencias de cookies o obtener más información sobre cómo las
                                    utilizamos,
                                    te invitamos a explorar nuestra política de cookies en la sección correspondiente.

                                    <button type="button" class="btn btn-danger m-l-10 m-b-15">
                                        <li>

                                            <a href="{{ url('/ayuda') }}">Enlace a la Política de Cookies</a>
                                        </li>

                                        <span class="badge badge-light"></span>
                                    </button>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <img src="images/icon/iso27032.jpg" alt="John Doe" />

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTAINER-->

    @endsection
