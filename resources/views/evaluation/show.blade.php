@extends('layouts.app')

@section('template_title')
    {{ $evaluation->name ?? "{{ __('Show') Evaluation" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Evaluation</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('evaluations.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Factoryid:</strong>
                            {{ $evaluation->factoryId }}
                        </div>
                        <div class="form-group">
                            <strong>Valevaluationid:</strong>
                            {{ $evaluation->valEvaluationId }}
                        </div>
                        <div class="form-group">
                            <strong>Value:</strong>
                            {{ $evaluation->value }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
