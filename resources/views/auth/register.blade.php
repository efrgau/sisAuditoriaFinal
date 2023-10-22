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
                                    <label for="">Nombre</label>
                                    <input type="text" name="name" class="au-input au-input--full"
                                        value="{{ old('name') }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Identificación</label>
                                    <input type="text" name="identification" class="au-input au-input--full"
                                        value="{{ old('identification') }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Celular</label>
                                    <input type="text" name="celular" class="au-input au-input--full"
                                        value="{{ old('celular') }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" name="email" class="au-input au-input--full"
                                        value="{{ old('email') }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" name="password" class="au-input au-input--full"
                                        value="{{ old('password') }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Password Confirmación</label>
                                    <input type="password" name="password_confirmation" class="au-input au-input--full"
                                        value="{{ old('password_confirmation') }}">
                                </div>
                                <input type="submit" value="Registrar"
                                    class="btn au-btn au-btn--block au-btn--green m-b-20">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
