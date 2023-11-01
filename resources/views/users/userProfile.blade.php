@extends('layout.app-master')

@section('tittle', 'Editar Perfil');

@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <form method="POST" action="{{ route('profiles.update', $detailUser->id) }}"
                                enctype="multipart/form-data" class="form-horizontal">
                                @csrf
                                @method('PUT')
                                <div class="card-header">
                                    <strong>Perfil de la cuenta actual</strong>
                                </div>
                                <div class="card-body card-block">

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label class=" form-control-label">Nombre de usuario (Solo lectura)</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <p class="form-control-static">{{ $detailUser->name }}</p>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Nombre y
                                                apellidos:</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="text-input"
                                                placeholder="Digite nombre y apellido" class="form-control"
                                                value="{{ $detailUser->name }}">
                                            <small class="form-text text-muted">Modifique el nombre y apellido</small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="email-input" class=" form-control-label">Correo
                                                electrónico:</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="email" id="email-input" name="email-input"
                                                placeholder="Actualice su correo electrónico" class="form-control"
                                                value="{{ $detailUser->email }}">
                                            <small class="help-block form-text">Modifique su correo
                                                electrónico</small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="email-input" class=" form-control-label">No
                                                identificación:</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="number" id="email-input" name="email-input"
                                                placeholder="Actualice su número de documento" class="form-control"
                                                value="{{ $detailUser->identification }}">
                                            <small class="help-block form-text">Modifique su número de documento</small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="email-input" class=" form-control-label">No de teléfono o
                                                celular:</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="number" id="email-input" name="email-input"
                                                placeholder="Actualice su número de celular" class="form-control"
                                                value="{{ $detailUser->celular }}">
                                            <small class="help-block form-text">Modifique su número de teléfono o
                                                celular</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm"><i
                                            class="fa fa-dot-circle-o"></i>{{ __('Actualizar datos') }}</button>
                                    <div class="float-right">
                                        <a class="btn btn-danger btn-sm" href="{{ url('home') }}"><i
                                                class="fa fa-ban"></i>
                                            {{ __('Cancelar') }}</a>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
