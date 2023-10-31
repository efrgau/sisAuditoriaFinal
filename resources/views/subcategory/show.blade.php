@extends('layouts.app')

@section('template_title')
    {{ $subcategory->name ?? "{{ __('Show') Subcategory" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Subcategory</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('subcategories.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Categoryid:</strong>
                            {{ $subcategory->categoryId }}
                        </div>
                        <div class="form-group">
                            <strong>Abrev:</strong>
                            {{ $subcategory->abrev }}
                        </div>
                        <div class="form-group">
                            <strong>Detail:</strong>
                            {{ $subcategory->detail }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
