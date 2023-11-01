@extends('layout.app-master')

@section('tittle')
    Factor Identificar
@endsection
@section('content')

    <body class="animsition">
        <div class="page-wrapper">

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2>Informe de resultados - ISO 27032 - Empresa Empopasto S.A.</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">Gráfica de evaluación ISO 27032</div>
                                    <div class="card-body">
                                        <div class="au-card chart-percent-card">
                                            <div class="au-card-inner">
                                                <h3 class="title-2 tm-b-5">Gráfica de Evaluación ISO 27032</h3>
                                                <div class="row no-gutters">
                                                    <div class="col-xl-6">
                                                        <div class="chart-note-wrap">
                                                            <div class="chart-note mr-0 d-block">
                                                                <span class="dot dot--blue"></span>
                                                                <span>Identificar</span>
                                                            </div>
                                                            <div class="chart-note mr-0 d-block">
                                                                <span class="dot dot--red"></span>
                                                                <span>Proteger</span>
                                                            </div>
                                                            <div class="chart-note mr-0 d-block">
                                                                <span class="dot dot--blue"></span>
                                                                <span>Detectar</span>
                                                            </div>
                                                            <div class="chart-note mr-0 d-block">
                                                                <span class="dot dot--red"></span>
                                                                <span>Responder</span>
                                                            </div>
                                                            <div class="chart-note mr-0 d-block">
                                                                <span class="dot dot--red"></span>
                                                                <span>Recuperar</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="percent-chart">
                                                            <canvas id="percent-chart"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">Tabla de resultados</div>
                                    <div class="card-body">
                                        <h2 class="title-1 m-b-25">RESULTADOS GENERALES </h2>
                                        <div class="table-responsive table--no-card m-b-40">
                                            <table class="table table-borderless table-striped table-earning">
                                                <thead>
                                                    <tr>
                                                        <th>Categoría</th>
                                                        <th>Porcentaje</th>
                                                        <th>Estado</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr valign="top">
                                                        <td width="73" height="17"
                                                            style="border: 1px solid #000000; padding: 0cm 0.19cm">
                                                            <p align="center"
                                                                style="orphans: 2; widows: 2; margin-bottom: 0cm">
                                                                <font face="Calibri, serif">
                                                                    <font size="2" style="font-size: 11pt">Identificar
                                                                    </font>
                                                                </font>
                                                            </p>
                                                            <p align="center" style="orphans: 2; widows: 2"><br />

                                                            </p>
                                                        </td>
                                                        <td width="74"
                                                            style="border: 1px solid #000000; padding: 0cm 0.19cm">
                                                            <p align="center" style="orphans: 2; widows: 2">
                                                                <font face="Calibri, serif">
                                                                    <font size="2" style="font-size: 11pt">10%</font>
                                                                </font>
                                                            </p>
                                                        </td>
                                                        <td width="108" bgcolor="#ff0000"
                                                            style="background: #ff0000; border: 1px solid #000000; padding: 0cm 0.19cm">
                                                            <p align="center" style="orphans: 2; widows: 2">
                                                                <font face="Calibri, serif">
                                                                    <font size="2" style="font-size: 11pt"><b>Crítico,
                                                                            no existe</b></font>
                                                                </font>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td width="73" height="25"
                                                            style="border: 1px solid #000000; padding: 0cm 0.19cm">
                                                            <p align="center"
                                                                style="orphans: 2; widows: 2; margin-bottom: 0cm">
                                                                <font face="Calibri, serif">
                                                                    <font size="2" style="font-size: 11pt">Detectar
                                                                    </font>
                                                                </font>
                                                            </p>
                                                            <p align="center" style="orphans: 2; widows: 2"><br />

                                                            </p>
                                                        </td>
                                                        <td width="74"
                                                            style="border: 1px solid #000000; padding: 0cm 0.19cm">
                                                            <p align="center" style="orphans: 2; widows: 2">
                                                                <font face="Calibri, serif">
                                                                    <font size="2" style="font-size: 11pt">50%</font>
                                                                </font>
                                                            </p>
                                                        </td>
                                                        <td width="108" bgcolor="#ff6600"
                                                            style="background: #ff6600; border: 1px solid #000000; padding: 0cm 0.19cm">
                                                            <p align="center" style="orphans: 2; widows: 2">
                                                                <font face="Calibri, serif">
                                                                    <font size="2" style="font-size: 11pt"><b>Bajo,
                                                                            repetible</b></font>
                                                                </font>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td width="73" height="26"
                                                            style="border: 1px solid #000000; padding: 0cm 0.19cm">
                                                            <p align="center"
                                                                style="orphans: 2; widows: 2; margin-bottom: 0cm">
                                                                <font face="Calibri, serif">
                                                                    <font size="2" style="font-size: 11pt">Proteger
                                                                    </font>
                                                                </font>
                                                            </p>
                                                            <p align="center" style="orphans: 2; widows: 2"><br />

                                                            </p>
                                                        </td>
                                                        <td width="74"
                                                            style="border: 1px solid #000000; padding: 0cm 0.19cm">
                                                            <p align="center" style="orphans: 2; widows: 2">
                                                                <font face="Calibri, serif">
                                                                    <font size="2" style="font-size: 11pt">15%
                                                                    </font>
                                                                </font>
                                                            </p>
                                                        </td>
                                                        <td width="108" bgcolor="#ff0000"
                                                            style="background: #ff0000; border: 1px solid #000000; padding: 0cm 0.19cm">
                                                            <p align="center" style="orphans: 2; widows: 2">
                                                                <font face="Calibri, serif">
                                                                    <font size="2" style="font-size: 11pt">
                                                                        <b>Crítico,
                                                                            no existe</b>
                                                                    </font>
                                                                </font>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td width="73" height="26"
                                                            style="border: 1px solid #000000; padding: 0cm 0.19cm">
                                                            <p align="center"
                                                                style="orphans: 2; widows: 2; margin-bottom: 0cm">
                                                                <font face="Calibri, serif">
                                                                    <font size="2" style="font-size: 11pt">responder
                                                                    </font>
                                                                </font>
                                                            </p>
                                                            <p align="left" style="orphans: 2; widows: 2"><br />

                                                            </p>
                                                        </td>
                                                        <td width="74"
                                                            style="border: 1px solid #000000; padding: 0cm 0.19cm">
                                                            <p align="center" style="orphans: 2; widows: 2">
                                                                <font face="Calibri, serif">
                                                                    <font size="2" style="font-size: 11pt">80%
                                                                    </font>
                                                                </font>
                                                            </p>
                                                        </td>
                                                        <td width="108" bgcolor="#00b050"
                                                            style="background: #00b050; border: 1px solid #000000; padding: 0cm 0.19cm">
                                                            <p align="center" style="orphans: 2; widows: 2">
                                                                <font face="Calibri, serif">
                                                                    <font size="2" style="font-size: 11pt"><b>Alto,
                                                                            Optimizado</b></font>
                                                                </font>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td width="73" height="5"
                                                            style="border: 1px solid #000000; padding: 0cm 0.19cm">
                                                            <p align="center" style="orphans: 2; widows: 2">
                                                                <font face="Calibri, serif">
                                                                    <font size="2" style="font-size: 11pt">Recuperar
                                                                    </font>
                                                                </font>
                                                            </p>
                                                        </td>
                                                        <td width="74"
                                                            style="border: 1px solid #000000; padding: 0cm 0.19cm">
                                                            <p align="center" style="orphans: 2; widows: 2">
                                                                <font face="Calibri, serif">
                                                                    <font size="2" style="font-size: 11pt">60%
                                                                    </font>
                                                                </font>
                                                            </p>
                                                        </td>
                                                        <td width="108" bgcolor="#ffff00"
                                                            style="background: #ffff00; border: 1px solid #000000; padding: 0cm 0.19cm">
                                                            <p align="center" style="orphans: 2; widows: 2">
                                                                <font face="Calibri, serif">
                                                                    <font size="6" style="font-size: 11pt"><b>Medio.
                                                                            Definido</b></font>
                                                                </font>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Tabla de resultados</div>
                                    <div class="card-body">
                                        <h3 class="title-1 m-b-25">Resultados Identificar </h3>
                                        <div class="table-responsive table--no-card m-b-40">
                                            <table class="table table-borderless table-striped table-earning">
                                                <thead>
                                                    <tr>
                                                        <th>Nombre</th>
                                                        <th>Categoría</th>
                                                        <th>Subcategoria</th>
                                                        <th>Evaluación</th>
                                                        <th>Promedio</th>
                                                        <th>Estado</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Gestión de activos (ID.AM)</td>
                                                        <td>ID.AM-1</td>
                                                        <td> Los dispositivos y sistemas físicos dentro de la
                                                            organización están inventariados.</td>
                                                        <td>1</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>ID.AM-2</td>
                                                        <td> Las plataformas de software y las aplicaciones dentro de la
                                                            organización están inventariadas.</td>
                                                        <td>1</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>ID.AM-3</td>
                                                        <td> La comunicación organizacional y los flujos de datos están
                                                            mapeados.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>ID.AM-4</td>
                                                        <td> Los sistemas de información externos están catalogados.
                                                        </td>
                                                        <td>1</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>ID.AM-5</td>
                                                        <td> Los recursos (por ejemplo, hardware, dispositivos, datos,
                                                            tiempo, personal y software) se priorizan en función de su
                                                            clasificación, criticidad y valor comercial.</td>
                                                        <td>1</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>ID.AM-6</td>
                                                        <td> Los roles y las responsabilidades de la seguridad
                                                            cibernética para toda la fuerza de trabajo y terceros
                                                            interesados</td>
                                                        <td>1</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Entorno empresarial (ID.BE)</td>
                                                        <td>ID.BE-1</td>
                                                        <td> Se identifica y se comunica la función de la organización
                                                            en la cadena de suministro.</td>
                                                        <td>2</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>ID.BE-2</td>
                                                        <td> Se identifica y se comunica el lugar de la organización en
                                                            la infraestructura crítica y su sector industrial.</td>
                                                        <td>1</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>ID.BE-3</td>
                                                        <td> Se establecen y se comunican las prioridades para la
                                                            misión, los objetivos y las actividades de la organización.
                                                        </td>
                                                        <td>2</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>ID.BE-4</td>
                                                        <td> Se establecen las dependencias y funciones fundamentales
                                                            para la entrega de servicios críticos.</td>
                                                        <td>1</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>ID.BE-5</td>
                                                        <td> Los requisitos de resiliencia para respaldar la entrega de
                                                            servicios críticos se establecen para todos los estados
                                                            operativos (p. ej. bajo coacción o ataque, durante la
                                                            recuperación y operaciones normales).</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gobernanza (ID.GV)</td>
                                                        <td>ID.GV-1</td>
                                                        <td> Se establece y se comunica la política de seguridad
                                                            cibernética organizacional.</td>
                                                        <td>1</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>ID.GV-2</td>
                                                        <td> Los roles y las responsabilidades de seguridad cibernética
                                                            están coordinados y alineados con roles internos y socios
                                                            externos.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>ID.GV-3</td>
                                                        <td> Se comprenden y se gestionan los requisitos legales y
                                                            regulatorios con respecto a la seguridad cibernética,
                                                            incluidas las obligaciones de privacidad y libertades
                                                            civiles.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>ID.GV-4</td>
                                                        <td> Los procesos de gobernanza y gestión de riesgos abordan los
                                                            riesgos de seguridad cibernética.</td>
                                                        <td>1</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Evaluación de riesgos (ID.RA)</td>
                                                        <td>ID.RA-1</td>
                                                        <td> Se identifican y se documentan las vulnerabilidades de los
                                                            activos.</td>
                                                        <td>1</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>ID.RA-2</td>
                                                        <td> La inteligencia de amenazas cibernéticas se recibe de foros
                                                            y fuentes de intercambio de información.</td>
                                                        <td>1</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>ID.RA-3</td>
                                                        <td> Se identifican y se documentan las amenazas, tanto internas
                                                            como externas.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>ID.RA-4</td>
                                                        <td> Se identifican los impactos y las probabilidades del
                                                            negocio.</td>
                                                        <td>1</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>ID.RA-5</td>
                                                        <td> Se utilizan las amenazas, las vulnerabilidades, las
                                                            probabilidades y los impactos para determinar el riesgo.
                                                        </td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>ID.RA-6</td>
                                                        <td> Se identifican y priorizan las respuestas al riesgo.</td>
                                                        <td>1</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Estrategia de gestión de riesgos (ID.RM)</td>
                                                        <td>ID.RM-1</td>
                                                        <td> Los actores de la organización establecen, gestionan y
                                                            acuerdan los procesos de gestión de riesgos.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>ID.RA-2</td>
                                                        <td> La inteligencia de amenazas cibernéticas se recibe de foros
                                                            y fuentes de intercambio de información.</td>
                                                        <td>1</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>ID.RA-3</td>
                                                        <td> Se identifican y se documentan las amenazas, tanto internas
                                                            como externas.</td>
                                                        <td>1</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gestión del riesgo de la cadena de suministro (ID.SC)</td>
                                                        <td>ID.SC-1</td>
                                                        <td> Los actores de la organización identifican, establecen,
                                                            evalúan, gestionan y acuerdan los procesos de gestión del
                                                            riesgo de la cadena de suministro cibernética.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>ID.SC-2</td>
                                                        <td> Los proveedores y socios externos de los sistemas de
                                                            información, componentes y servicios se identifican, se
                                                            priorizan y se evalúan mediante un proceso de evaluación de
                                                            riesgos de la cadena de suministro cibernético.</td>
                                                        <td>1</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>ID.SC-3</td>
                                                        <td> Los contratos con proveedores y socios externos se utilizan
                                                            para implementar medidas apropiadas diseñadas para cumplir
                                                            con los objetivos del programa de seguridad cibernética de
                                                            una organización y el plan de gestión de riesgos de la
                                                            cadena de suministro cibernético.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>ID.SC-4</td>
                                                        <td> Los proveedores y los socios externos se evalúan de forma
                                                            rutinaria mediante auditorías, resultados de pruebas u otras
                                                            formas de evaluación para confirmar que cumplen con sus
                                                            obligaciones contractuales.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>ID.SC-5</td>
                                                        <td> Las pruebas y la planificación de respuesta y recuperación
                                                            se llevan a cabo con proveedores.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>20</td>
                                                        <td>145</td>
                                                        <td>13,7931034482759</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Tabla de resultados</div>
                                    <div class="card-body">
                                        <h3 class="title-1 m-b-25">Resultados Proteger </h3>
                                        <div class="table-responsive table--no-card m-b-40">
                                            <table class="table table-borderless table-striped table-earning">
                                                <thead>
                                                    <tr>
                                                        <th>Categoría</th>
                                                        <th>Subcategoría</th>
                                                        <th>Evaluacion</th>
                                                        <th>Ideal </th>
                                                        <th>promedio </th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                        <td>Gestión de identidad, autenticación y control de acceso (PR.AC)
                                                        </td>
                                                        <td>PR.AC-1: Las identidades y credenciales se emiten, se
                                                            administran, se verifican, se revocan y se auditan para los
                                                            dispositivos, usuarios y procesos autorizados.</td>
                                                        <td>1</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>PR.AC-2: Se gestiona y se protege el acceso físico a los
                                                            activos.</td>
                                                        <td>2</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>PR.AC-3: Se gestiona el acceso remoto.</td>
                                                        <td>1</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>PR.AC-4: Se gestionan los permisos y autorizaciones de acceso
                                                            con incorporación de los principios de menor privilegio y
                                                            separación de funciones.</td>
                                                        <td>1</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>PR.AC-5: Se protege la integridad de la red (por ejemplo,
                                                            segregación de la red, segmentación de la red).</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>PR.AC-6: Las identidades son verificadas y vinculadas a
                                                            credenciales y afirmadas en las interacciones.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>PR.AC-7: Se autentican los usuarios, dispositivos y otros
                                                            activos (por ejemplo, autenticación de un solo factor o
                                                            múltiples factores) acorde al riesgo de la transacción (por
                                                            ejemplo, riesgos de seguridad y privacidad de individuos y otros
                                                            riesgos para las organizaciones).</td>
                                                        <td>1</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Concienciación y capacitación (PR.AT)</td>
                                                        <td>PR.AT-1: Todos los usuarios están informados y capacitados.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>PR.AT-2: Los usuarios privilegiados comprenden sus roles y
                                                            responsabilidades.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>PR.AT-3: Los terceros interesados (por ejemplo, proveedores,
                                                            clientes, socios) comprenden sus roles y responsabilidades.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>PR.AT-4: Los ejecutivos superiores comprenden sus roles y
                                                            responsabilidades.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>PR.AT-5: El personal de seguridad física y cibernética comprende
                                                            sus roles y responsabilidades.</td>
                                                        <td>2</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Seguridad de los datos (PR.DS)</td>
                                                        <td>PR.DS-1: Los datos en reposo están protegidos.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>PR.DS-2: Los datos en tránsito están protegidos.</td>
                                                        <td>1</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>PR.DS-3: Los activos se gestionan formalmente durante la
                                                            eliminación, las transferencias y la disposición.</td>
                                                        <td>1</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>PR.DS-4: Se mantiene una capacidad adecuada para asegurar la
                                                            disponibilidad.</td>
                                                        <td>1</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>PR.DS-5: Se implementan protecciones contra las filtraciones de
                                                            datos.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>PR.DS-6: Se utilizan mecanismos de comprobación de la integridad
                                                            para verificar el software, el firmware y la integridad de la
                                                            información.</td>
                                                        <td>1</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>PR.DS-7: Los entornos de desarrollo y prueba(s) están separados
                                                            del entorno de producción.</td>
                                                        <td>1</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Procesos y procedimientos de protección de la información
                                                            (PR.IP)</td>
                                                        <td>PR.IP-1: Se crea y se mantiene una configuración de base de los
                                                            sistemas de control industrial y de tecnología de la información
                                                            con incorporación de los principios de seguridad (por ejemplo,
                                                            el concepto de funcionalidad mínima).</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>PR.IP-2: Se implementa un ciclo de vida de desarrollo del
                                                            sistema para gestionar los sistemas.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>PR.IP-3: Se encuentran establecidos procesos de control de
                                                            cambio de la configuración.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>PR.IP-4: Se realizan, se mantienen y se prueban copias de
                                                            seguridad de la información.</td>
                                                        <td>1</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td>1</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>PR.IP-5: Se cumplen las regulaciones y la política con respecto
                                                            al entorno operativo físico para los activos organizativos.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>PR.IP-6: Los datos son eliminados de acuerdo con las políticas.
                                                        </td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>PR.IP-7: Se mejoran los procesos de protección.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>PR.IP-8: Se comparte la efectividad de las tecnologías de
                                                            protección.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>PR.IP-9: Se encuentran establecidos y se gestionan planes de
                                                            respuesta (Respuesta a Incidentes y Continuidad del Negocio) y
                                                            planes de recuperación (Recuperación de Incidentes y
                                                            Recuperación de Desastres).</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>PR.IP-10: Se prueban los planes de respuesta y recuperación.
                                                        </td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>PR.IP-11: La seguridad cibernética se encuentra incluida en las
                                                            prácticas de recursos humanos (por ejemplo,
                                                            desaprovisionamiento, selección del personal).</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>PR.IP-12: Se desarrolla y se implementa un plan de gestión de
                                                            las vulnerabilidades.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mantenimiento (PR.MA)</td>
                                                        <td>PR.MA-1: El mantenimiento y la reparación de los activos de la
                                                            organización se realizan y están registrados con herramientas
                                                            aprobadas y controladas.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>PR.MA-2: El mantenimiento remoto de los activos de la
                                                            organización se aprueba, se registra y se realiza de manera que
                                                            evite el acceso no autorizado.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tecnología de protección (PR.PT)</td>
                                                        <td>PR.PT-1: Los registros de auditoría o archivos se determinan, se
                                                            documentan, se implementan y se revisan en conformidad con la
                                                            política.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>PR.PT-2: Los medios extraíbles están protegidos y su uso se
                                                            encuentra restringido de acuerdo con la política.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>PR.PT-3: Se incorpora el principio de menor funcionalidad
                                                            mediante la configuración de los sistemas para proporcionar solo
                                                            las capacidades esenciales.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>PR.PT-4: Las redes de comunicaciones y control están protegidas.
                                                        </td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>PR.PT-5: Se implementan mecanismos (por ejemplo, a prueba de
                                                            fallas, equilibrio de carga, cambio en caliente o “hot swap”)
                                                            para lograr los requisitos de resiliencia en situaciones
                                                            normales y adversas.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Total </td>
                                                        <td>15</td>
                                                        <td>200</td>
                                                        <td>7,5</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Tabla de resultados</div>
                                    <div class="card-body">
                                        <h3 class="title-1 m-b-25">Resultados Detectar </h3>
                                        <div class="table-responsive table--no-card m-b-40">
                                            <table class="table table-borderless table-striped table-earning">
                                                <thead>
                                                    <tr>
                                                        <th>Categoría</th>
                                                        <th>Subcategoria</th>
                                                        <th>Evaluación</th>
                                                        <th>Ideal</th>
                                                        <th>Promedio</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Anomalías y Eventos (DE.AE)</td>
                                                        <td>DE.AE-1: Se establece y se gestiona una base de referencia para
                                                            operaciones de red y flujos de datos esperados </td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>DE.AE-2: Se analizan los eventos detectados para comprender los
                                                            objetivos y métodos de ataque.</td>
                                                        <td>1</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>DE.AE-3: Los datos de los eventos se recopilan y se
                                                            correlacionan de múltiples fuentes y sensores.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>DE.AE-4: Se determina el impacto de los eventos.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>DE.AE-5: Se establecen umbrales de alerta de incidentes.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Monitoreo Continuo de la Seguridad (DE.CM)</td>
                                                        <td>DE.CM-1: Se monitorea la red para detectar posibles eventos de
                                                            seguridad cibernética.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>DE.CM-2: Se monitorea el entorno físico para detectar posibles
                                                            eventos de seguridad cibernética.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>DE.CM-3: Se monitorea la actividad del personal para detectar
                                                            posibles eventos de seguridad cibernética.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>DE.CM-4: Se detecta el código malicioso.</td>
                                                        <td>1</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>DE.CM-5: Se detecta el código móvil no autorizado.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>DE.CM-6: Se monitorea la actividad de los proveedores de
                                                            servicios externos para detectar posibles eventos de seguridad
                                                            cibernética.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>DE.CM-7: Se realiza el monitoreo del personal, conexiones,
                                                            dispositivos y software no autorizados.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>DE.CM-8: Se realizan escaneos de vulnerabilidades.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Procesos de Detección (DE.DP)</td>
                                                        <td>DE.DP-1: Los roles y los deberes de detección están bien
                                                            definidos para asegurar la responsabilidad.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>DE.DP-2: Las actividades de detección cumplen con todos los
                                                            requisitos aplicables.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>DE.DP-3: Se prueban los procesos de detección.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>DE.DP-4: Se comunica la información de la detección de eventos.
                                                        </td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>DE.DP-5: los procesos de detección se mejoran continuamente.
                                                        </td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td>2</td>
                                                        <td>90</td>
                                                        <td>2,22222222222222</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Tabla de resultados</div>
                                    <div class="card-body">
                                        <h3 class="title-1 m-b-25">Resultados Responder </h3>
                                        <div class="table-responsive table--no-card m-b-40">
                                            <table class="table table-borderless table-striped table-earning">
                                                <thead>
                                                    <tr>
                                                        <th>Categoría</th>
                                                        <th>Subcategoria</th>
                                                        <th>Evaluación</th>
                                                        <th>Ideal</th>
                                                        <th>Promedio</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Planificación de la Respuesta (RS.RP)</td>
                                                        <td>RS.RP-1: El plan de respuesta se ejecuta durante o después de un
                                                            incidente.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Comunicaciones (RS.CO)</td>
                                                        <td>RS.CO-1: El personal conoce sus roles y el orden de las
                                                            operaciones cuando se necesita una respuesta.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>RS.CO-2: Los incidentes se informan de acuerdo con los criterios
                                                            establecidos.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>RS.CO-3: La información se comparte de acuerdo con los planes de
                                                            respuesta.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>RS.CO-4: La coordinación con las partes interesadas se realiza
                                                            en consonancia con los planes de respuesta.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>RS.CO-5: El intercambio voluntario de información se produce con
                                                            las partes interesadas externas para lograr una mayor conciencia
                                                            situacional de seguridad cibernética.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Análisis (RS.AN)</td>
                                                        <td>RS.AN-1: sSe investigan las notificaciones de los sistemas de
                                                            detección.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>RS.AN-2: Se comprende el impacto del incidente.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>RS.AN-3: Se realizan análisis forenses.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>RS.AN-4: Los incidentes se clasifican de acuerdo con los planes
                                                            de respuesta.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>RS.AN-5: Se establecen procesos para recibir, analizar y
                                                            responder a las vulnerabilidades divulgadas a la organización
                                                            desde fuentes internas y externas (por ejemplo, pruebas
                                                            internas, boletines de seguridad o investigadores de seguridad).
                                                        </td>
                                                        <td>1</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mitigación (RS.MI)</td>
                                                        <td>RS.MI-1: Los incidentes son contenidos.</td>
                                                        <td>1</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>RS.MI-2: Los incidentes son mitigados.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>RS.MI-3: Las vulnerabilidades recientemente identificadas son
                                                            mitigadas o se documentan como riesgos aceptados.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mejoras (RS.IM)</td>
                                                        <td>RS.IM-1: Los planes de respuesta incorporan las lecciones
                                                            aprendidas.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>RS.IM-2: Se actualizan las estrategias de respuesta.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td>2</td>
                                                        <td>80</td>
                                                        <td>2,5</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Tabla de resultados</div>
                                    <div class="card-body">
                                        <h3 class="title-1 m-b-25">Resultados Recuperar </h3>
                                        <div class="table-responsive table--no-card m-b-40">
                                            <table class="table table-borderless table-striped table-earning">
                                                <thead>
                                                    <tr>
                                                        <th>Categoría</th>
                                                        <th>Subcategoria</th>
                                                        <th>Evaluación</th>
                                                        <th>Ideal</th>
                                                        <th>Promedio</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Planificación de la recuperación (RC.RP)</td>
                                                        <td>RC.RP-1: El plan de recuperación se ejecuta durante o después de
                                                            un incidente de seguridad cibernética.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mejoras (RC.IM)</td>
                                                        <td>RC.IM-1: Los planes de recuperación incorporan las lecciones
                                                            aprendidas.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>RC.IM-2: Se actualizan las estrategias de recuperación.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Comunicaciones (RC.CO)</td>
                                                        <td>RC.CO-1: Se gestionan las relaciones públicas.</td>
                                                        <td>1</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>RC.CO-2: La reputación se repara después de un incidente.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>RC.CO-3: Las actividades de recuperación se comunican a las
                                                            partes interesadas internas y externas, así como también a los
                                                            equipos ejecutivos y de administración.</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td>1</td>
                                                        <td>30</td>
                                                        <td>3,33333333333333</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>
    @endsection
