<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

    <!-- Fontfaces CSS-->
    <link href={{ asset('css/font-face.css') }} rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body>
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="/register" method="POST">
                                @csrf
                                @include('layout.partials.messages')
                                <div class="form-group">
                                    <label for="name">Nombre y apellidos</label>
                                    <input type="text" name="name" class="au-input au-input--full"
                                        value="{{ old('name') }}">
                                </div>
                                <div class="form-group">
                                    <label for="identification">Número de identificación</label>
                                    <input type="number" name="identification" class="au-input au-input--full"
                                        value="{{ old('identification') }}">
                                </div>
                                <div class="form-group">
                                    <label for="celular">Celular</label>
                                    <input type="number" name="celular" class="au-input au-input--full"
                                        value="{{ old('celular') }}">
                                </div>
                                <div class="form-group">
                                    <label for="email">Correo electrónico:</label>
                                    <input type="text" name="email" class="au-input au-input--full"
                                        value="{{ old('email') }}">
                                </div>
                                <div class="form-group">
                                    <label for="password">Contraseña:</label>
                                    <input type="password" name="password" class="au-input au-input--full"
                                        value="{{ old('password') }}">
                                </div>
                                <div class="form-group">
                                    <label for="password">Confirmar contraseña:</label>
                                    <input type="password" name="password_confirmation" class="au-input au-input--full"
                                        value="{{ old('password_confirmation') }}">
                                </div>
                                <input type="submit" value="Registrar nuevo Usuario"
                                    class="btn au-btn au-btn--block au-btn--green m-b-20">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<!-- end document-->
