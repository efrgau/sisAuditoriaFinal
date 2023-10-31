@extends('layout.app-master')

@section('template_title')
    Listado Categorías
@endsection

@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>HOMEIT-ISO</h3>
                        </div>
                        <div class="card-body">
                            <div class="custom-tab">

                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="custom-nav-home-tab" data-toggle="tab"
                                            href="#custom-nav-home" role="tab" aria-controls="custom-nav-home"
                                            aria-selected="true">IEC 27001:2013</a>
                                        <a class="nav-item nav-link" id="custom-nav-profile-tab" data-toggle="tab"
                                            href="#custom-nav-profile" role="tab" aria-controls="custom-nav-profile"
                                            aria-selected="false">ISO/IEC 27002:2013</a>
                                        <a class="nav-item nav-link" id="custom-nav-contact-tab" data-toggle="tab"
                                            href="#custom-nav-contact" role="tab" aria-controls="custom-nav-contact"
                                            aria-selected="false">ISO/IEC 27005:2018</a>
                                        <a class="nav-item nav-link" id="custom-nav-home1-tab" data-toggle="tab"
                                            href="#custom-nav-home1" role="tab" aria-controls="custom-nav-home1"
                                            aria-selected="false">ISO/IEC 27017:2015</a>
                                        <a class="nav-item nav-link" id="custom-nav-profile1-tab" data-toggle="tab"
                                            href="#custom-nav-profile1" role="tab" aria-controls="custom-nav-profile1"
                                            aria-selected="false">ISO/IEC 27018:2019</a>
                                        <a class="nav-item nav-link" id="custom-nav-home2-tab" data-toggle="tab"
                                            href="#custom-nav-home2" role="tab" aria-controls="custom-nav-home2"
                                            aria-selected="false">ISO/IEC 27032:2012</a>
                                        <a class="nav-item nav-link" id="custom-nav-profile2-tab" data-toggle="tab"
                                            href="#custom-nav-profile2" role="tab" aria-controls="custom-nav-profile2"
                                            aria-selected="false">ISO/IEC 27035:2016</a>
                                    </div>
                                </nav>
                                <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="custom-nav-home" role="tabpanel"
                                        aria-labelledby="custom-nav-home-tab">
                                        <p> La norma ISO/IEC 27001 :2013 establece los requisitos para la implementación de
                                            un Sistema de Gestión de Seguridad de la Información (SGSI) en una organización.
                                            El SGSI es un enfoque sistemático para gestionar y proteger la seguridad de la
                                            información. A continuación, se presenta un resumen de los principales elementos
                                            y requisitos de la norma:</p>

                                        <p>
                                        <h5>1. Alcance y Contexto: </h5>
                                        </p>

                                        <p>
                                        <h5>2. Liderazgo y Compromiso:</h5>
                                        </p>

                                        <p>
                                        <h5>3. Planificación:</h5>
                                        </p>

                                        <p>
                                        <h5>4. Apoyo:</h5>
                                        </p>
                                        </N>

                                        <p>
                                        <h5>5. Operación: </h5>
                                        </p>

                                        <p>
                                        <h5>7. Evaluación de Desempeño: </h5>
                                        </p>

                                        <p>
                                        <h5>8. Mejora: </h5>
                                        </p>

                                        <p>
                                        <h5>9. Relación con las Normas de Seguridad de la Información: </h5>
                                        </p>

                                        <p>
                                        <h5>10. Documentación: </h5>
                                        </p>

                                        <p>
                                        <h5>11. Certificación: </h5>
                                        </p>
                                    </div>
                                    <div class="tab-pane fade" id="custom-nav-profile" role="tabpanel"
                                        aria-labelledby="custom-nav-profile-tab">
                                        <p>La norma ISO 27002 es un estándar internacional que proporciona directrices y
                                            mejores prácticas para la gestión de la seguridad de la información en una
                                            organización.
                                            Su objetivo principal es ayudar a proteger la confidencialidad, integridad y
                                            disponibilidad de la información.
                                            En resumen, la ISO 27002 se centra en:</p>

                                        <p>
                                        <h5> 1. Identificar y evaluar riesgos de seguridad de la información.</h5>
                                        </p>
                                        <p>
                                        <h5> 2. Establecer políticas y procedimientos de seguridad.</h5>
                                        </p>
                                        <p>
                                        <h5> 3. Implementar medidas de seguridad técnicas y organizativas.
                                            <p>
                                            <h5> 4. Monitorear y mejorar continuamente la seguridad de la información.</h5>
                                            </p>
                                    </div>
                                    <div class="tab-pane fade" id="custom-nav-contact" role="tabpanel"
                                        aria-labelledby="custom-nav-contact-tab">
                                        <p>La norma ISO 27005 es un estándar internacional que se enfoca en la gestión de
                                            riesgos de seguridad de la información. Su objetivo es proporcionar un marco de
                                            trabajo para que las organizaciones identifiquen,
                                            evalúen y gestionen los riesgos relacionados con la seguridad de la información
                                            de manera efectiva. En resumen, la ISO 27005 se centra en:</p>

                                        <p>
                                        <h5> 1. Identificar los activos de información críticos.</h5>
                                        </p>
                                        <p>
                                        <h5> 2. Evaluar las amenazas y vulnerabilidades que pueden afectar esos activos.
                                        </h5>
                                        </p>
                                        <p>
                                        <h5> 3. Determinar la probabilidad y el impacto de los riesgos.</h5>
                                        </p>
                                        <p>
                                        <h5> 4. Seleccionar y aplicar medidas de control para mitigar o aceptar los riesgos.
                                        </h5>
                                        </p>
                                        <p>
                                        <h5> 5. Monitorear y revisar continuamente el proceso de gestión de riesgos.</h5>
                                        </p>

                                    </div>
                                    <div class="tab-pane fade" id="custom-nav-home1" role="tabpanel"
                                        aria-labelledby="custom-nav-home1-tab">
                                        <p> La norma ISO 27017 es un estándar internacional que se centra en la seguridad de
                                            la información en la nube.
                                            Su objetivo principal es proporcionar directrices y recomendaciones específicas
                                            para la gestión de la seguridad de la información en entornos de servicios de
                                            computación en la nube.
                                            En resumen, la ISO 27017 aborda:</p>

                                        <p>
                                        <h5> 1. Controles de seguridad específicos para la nube.</h5>
                                        </p>
                                        <p>
                                        <h5> 2. Roles y responsabilidades.</h5>
                                        </p>
                                        <p>
                                        <h5> 3. Evaluación y gestión de riesgos</h5>
                                        </p>
                                    </div>
                                    <div class="tab-pane fade" id="custom-nav-profile1" role="tabpanel"
                                        aria-labelledby="custom-nav-profile1-tab">
                                        <p>La norma ISO 27018 es un estándar internacional que se centra en la protección de
                                            la información personal en entornos de computación en la nube.
                                            Su objetivo principal es establecer directrices específicas para la privacidad
                                            de datos cuando se utilizan servicios en la nube.</p>

                                        <p>
                                        <h5> 1. Protección de datos personales</h5>
                                        </p>
                                        <p>
                                        <h5> 2. Responsabilidades del proveedor de servicios en la nube.</h5>
                                        </p>
                                        <p>
                                        <h5> 3. Transparencia y control del cliente.</h5>
                                        </p>


                                    </div>

                                    <div class="tab-pane fade" id="custom-nav-home2" role="tabpanel"
                                        aria-labelledby="custom-nav-home2-tab">
                                        <p> La norma ISO 27032 es un estándar internacional que se centra en la
                                            ciberseguridad,
                                            específicamente en la protección de la información en entornos digitales y redes
                                            de comunicación. Su objetivo principal es proporcionar directrices y mejores
                                            prácticas para gestionar y mejorar la seguridad cibernética en una organización.
                                            En resumen, la ISO 27032 aborda</p>

                                        <p>
                                        <h5> 1. Ciberseguridad a nivel estratégico.</h5>
                                        </p>
                                        <p>
                                        <h5> 2. Gestión de riesgos cibernéticos.</h5>
                                        </p>
                                        <p>
                                        <h5> 3. Colaboración y cooperación.</h5>
                                        </p>
                                        <p>
                                        <h5> 4. Respuesta a incidentes cibernéticos.</h5>
                                        </p>
                                    </div>
                                    <div class="tab-pane fade" id="custom-nav-profile2" role="tabpanel"
                                        aria-labelledby="custom-nav-profile2-tab">
                                        <p>La norma ISO 27035 es un estándar internacional que se enfoca en la gestión de
                                            incidentes de seguridad de la información.
                                            Su objetivo principal es proporcionar una guía para la planificación,
                                            establecimiento y operación de procesos de gestión de incidentes de seguridad de
                                            la información en una organización.
                                            En resumen, la ISO 27035 aborda</p>
                                        <p>
                                        <h5> 1. Preparación para la gestión de incidentes</h5>
                                        </p>
                                        <p>
                                        <h5> 2. Detección y notificación de incidentes</h5>
                                        </p>
                                        <p>
                                        <h5> 3. Evaluación y respuesta a incidentes</h5>
                                        </p>
                                        <p>
                                        <h5> 4. Comunicación y seguimiento</h5>
                                        </p>


                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
            </div>
        </div>
    </div>
    </div>
    <!-- END PAGE CONTAINER-->

    </div>
@endsection
