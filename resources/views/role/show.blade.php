@extends('layout.app-master')

@section('title')
    Ver detalles del rol
@endsection

@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <section class="content container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="float-left">
                                    <span class="card-title">{{ __('Ver detalle') }} del rol</span>
                                </div>
                                <div class="float-right">
                                    <a class="btn btn-primary" href="{{ route('roles.index') }}"> {{ __('Back') }}</a>
                                </div>
                            </div>

                            <div class="card-body">

                                <div class="form-group">
                                    <strong>Name:</strong>
                                    {{ $role->name }}
                                </div>
                                <div class="form-group">
                                    <strong>Guard Name:</strong>
                                    {{ $role->guard_name }}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
