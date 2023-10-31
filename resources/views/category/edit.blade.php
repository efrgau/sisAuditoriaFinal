@extends('layout.app-master')

@section('template_title')
    Editar Categoría Actual
@endsection

@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <section class="content container-fluid">
                <div class="">
                    <div class="col-md-12">

                        @includeif('partials.errors')

                        <div class="card card-default">
                            <div class="card-header">
                                <span class="card-title">{{ __('Editar') }} Categoria Actual</span>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('categories.update', $category->id) }}" role="form"
                                    enctype="multipart/form-data">
                                    {{ method_field('PATCH') }}
                                    @csrf

                                    @include('category.form')

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endsection
