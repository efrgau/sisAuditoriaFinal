@extends('layouts.app')

@section('template_title')
    {{ $valevaluation->name ?? "{{ __('Show') Valevaluation" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Valevaluation</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('valevaluations.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Subcategoryid:</strong>
                            {{ $valevaluation->subcategoryId }}
                        </div>
                        <div class="form-group">
                            <strong>Abrevalorcat:</strong>
                            {{ $valevaluation->abrevalorcat }}
                        </div>
                        <div class="form-group">
                            <strong>Nombrevalorcat:</strong>
                            {{ $valevaluation->nombreValorcat }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
