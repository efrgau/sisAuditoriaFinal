@extends('layout.app-master')

@section('template_title')
    {{ __('Realizar') }} Evaluación ISO 27032
@endsection

@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <section class="content container-fluid">
                <div class="row">
                    <div class="col-md-12">

                        @includeif('partials.errors')

                        <div class="card card-default">
                            <div class="card-header">
                                <span class="card-title">{{ __('REALIZAR') }} EVALUACIÓN ISO 27032</span>
                            </div>
                            <div class="card-body">

                                @include('evaluation.form')

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
