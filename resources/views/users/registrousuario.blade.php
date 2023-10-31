@extends('layout.app-master')

@section('tittle', 'Creación Usuario')

@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        @includeif('partials.errors')

                        <div class="card">
                            <div class="card-header">
                                <span class="card-title">{{ __('Crear') }} nuevo usuario</span>
                            </div>
                            <div class="card-body card-block">
                                <form method="POST" action="{{ route('users.store') }}" role="form"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name" class=" form-control-label">Nombre y apellidos</label>
                                        <input type="text" id="name" placeholder="Digita tu nombre completo"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class=" form-control-label">correo electrónico</label>
                                        <input type="email" id="email" placeholder="correo@correo.com"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="verificaremail" class=" form-control-label">Confirmación correo
                                            electrónico</label>
                                        <input type="email" id="verificaremail" placeholder="Digita nuevamente el correo"
                                            class="form-control">
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-8">
                                            <div class="form-group">
                                                <label for="identificacion" class=" form-control-label">No documento</label>
                                                <input type="number" id="identificacion"
                                                    placeholder="digita tu número de documento" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="form-group">
                                                <label for="celular" class=" form-control-label">No Teléfono o
                                                    celular</label>
                                                <input type="number" id="celular"
                                                    placeholder="Digita tu número de celular de contacto"
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class=" form-control-label">Contraseña</label>
                                        <input type="password" id="password" placeholder="Digita tu contraseña"
                                            class="form-control">
                                    </div>
                                    <div class="box-footer mt20">
                                        <button type="submit" class="btn btn-primary">{{ __('Crear usuario') }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
