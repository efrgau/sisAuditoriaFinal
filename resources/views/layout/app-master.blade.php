@if (Auth::check())
    {
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="au theme template">
        <meta name="author" content="Hau Nguyen">
        <meta name="keywords" content="au theme template">

        <!-- Title Page-->
        <title>HomeIt ISO - @yield('tittle')</title>

        <!-- Fontfaces CSS-->
        <link href="{{ asset('css/font-face.css') }}" rel="stylesheet" media="all">
        <link href="{{ asset('vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
        <link href="{{ asset('vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
        <link href="{{ asset('vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
        <link href="{{ asset('vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet"
            media="all">

        <!-- Bootstrap CSS-->
        <link href="{{ asset('vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

        <!-- Vendor CSS-->
        <link href="{{ asset('vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
        <link href="{{ asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet"
            media="all">
        <link href="{{ asset('vendor/wow/animate.css') }}" rel="stylesheet" media="all">
        <link href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
        <link href="{{ asset('vendor/slick/slick.css') }}" rel="stylesheet" media="all">
        <link href="{{ asset('vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
        <link href="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

        <!-- Main CSS-->
        <link href="{{ asset('css/theme.css') }}" rel="stylesheet" media="all">
    </head>

    <body>

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{ asset('images/icon/logo.png') }}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <div class="image img-cir img-120">
                        <img src="{{ asset('images/icon/avatar-01.jpg') }}" alt="John Doe" />
                    </div>
                    <h4 class="name">{{ Auth::user()->name }}
                    </h4>
                    <span>Admin</span>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar sesión
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
                <div class="menu-sidebar__content js-scrollbar1">
                    <nav class="navbar-sidebar">
                        <ul class="list-unstyled navbar__list">
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-users"></i>.: Gestión Usuarios :.</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="{{ route('roles.index') }}">Ver roles del sistema</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('listaUsuarios') }}">Ver usuarios del sistema</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="#"><i class="fas fa-industry"></i>.: Gestión Empresas
                                    evaluadas :.</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="{{ route('factories.create') }}">Crear empresa cliente</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('factories.index') }}">Ver empresas clientes</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-tachometer-alt"></i>.:Configuración ISO 27032:.</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="{{ route('categories.index') }}">Crear Categorías</a>

                                    </li>
                                    <li>
                                        <a href="{{ route('subcategories.index') }}">Crear subcategorías</a>

                                    </li>
                                    <li>
                                        <a href="{{ route('valevaluations.index') }}">Crear Valores de Evaluación</a>
                                    </li>

                                </ul>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-tachometer-alt"></i>.:Realizar evaluación ISO27032:.</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="{{ route('evaluations.create') }}">Realizar Evaluación Empresa</a>
                                    </li>
                                    <!--  <li>
                                        <a href="{{ url('/identificar') }}">IDENTIFICAR</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/proteger') }}">PROTEGER</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/detectar') }}">DETECTAR</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/responder') }}">RESPONDER</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/recuperar') }}">RECUPERAR</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/informeEvaluacion') }}">INFORME GENERAL</a>
                                    </li>
                                -->
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-tachometer-alt"></i>.:Informes de Resultados:.</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="{{ url('/informeEvaluacion') }}">Ver informe general</a>
                                    </li>
                                    <!--
                                    <li>
                                        <a href="{{ url('/informeTabla') }}">Ver informe de etapas evaluadas</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/informeResultadosA') }}">Ver de factores</a>
                                    </li>
                                -->
                                </ul>
                            </li>


                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-desktop"></i>Información de ayuda</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="{{ route('ayuda') }}">Politicas de seguridad </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('normativa') }}">Normativas ISO 27032 </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <div class="page-container">

            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search"
                                    placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">

                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="{{ asset('images/icon/avatar-01.jpg') }}" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">{{ Auth::user()->name }}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="{{ asset('images/icon/avatar-01.jpg') }}"
                                                            alt="{{ Auth::user()->name }}" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">{{ Auth::user()->name }}</a>
                                                    </h5>
                                                    <span class="email">{{ Auth::user()->email }}</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="{{ route('editarPerfil') }}">
                                                        <i class="zmdi zmdi-account"></i>Cuenta</a>
                                                </div>
                                                <!--
                                                    <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Configuracion</a>
                                                </div>
                                                -->
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    <i class="zmdi zmdi-power"></i>Cerrar sesion</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </header>

            <!-- HEADER DESKTOP-->

            @yield('content')
        </div>
        <!-- Jquery JS-->
        <script src="{{ asset('vendor/jquery-3.2.1.min.js') }}"></script>

        <!-- Bootstrap JS-->
        <script src="{{ asset('vendor/bootstrap-4.1/popper.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
        <!-- Vendor JS       -->
        <script src="{{ asset('vendor/slick/slick.min.js') }}"></script>
        <script src="{{ asset('vendor/wow/wow.min.js') }}"></script>
        <script src="{{ asset('vendor/animsition/animsition.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
        <script src="{{ asset('vendor/counter-up/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('vendor/counter-up/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('vendor/circle-progress/circle-progress.min.js') }}"></script>
        <script src="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
        <script src="{{ asset('vendor/chartjs/Chart.bundle.min.js') }}"></script>
        <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>

        <!-- Main JS-->
        <script src="{{ asset('js/main.js') }}"></script>
        <!-- Archivo de Evaluaciones -->
        <script src="{{ asset('js/evaluacion.js') }}"></script>
    </body>

    </html>
    }
@else
    {{ Redirect::to('/login') }}
@endif
