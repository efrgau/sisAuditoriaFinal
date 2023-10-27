@extends('layouts.app')

@section('template_title')
    {{ $factory->name ?? "{{ __('Show') Factory" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Factory</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('factories.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Userid:</strong>
                            {{ $factory->userId }}
                        </div>
                        <div class="form-group">
                            <strong>Nombreempresa:</strong>
                            {{ $factory->NombreEmpresa }}
                        </div>
                        <div class="form-group">
                            <strong>Fechacreacionempresa:</strong>
                            {{ $factory->FechaCreacionEmpresa }}
                        </div>
                        <div class="form-group">
                            <strong>Nombrerepresentantelegal:</strong>
                            {{ $factory->NombreRepresentanteLegal }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
