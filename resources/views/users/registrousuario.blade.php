@extends('layout.app-master')

@section('tittle')
    Crear usuario de sistema
@endsection
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="content container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        @includeif('partials.errors')
                        <div class="card card-default">
                            <div class="card-header">
                                <span class="card-title">{{ __('Crear') }} nuevo usuario</span>
                            </div>
                            <div class="card-body ">
                                <form method="POST" action="{{ route('users.store') }}" role="form"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @include('users.form')
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
