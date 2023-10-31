@extends('layout.app-master')

@section('template_title')
    Crear Nuevo Valor de categoría
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
                                <span class="card-title">{{ __('Create') }} Valevaluation</span>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('valevaluations.store') }}" role="form"
                                    enctype="multipart/form-data">
                                    @csrf

                                    @include('valevaluation.form')

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
