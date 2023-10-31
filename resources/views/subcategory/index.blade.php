@extends('layout.app-master')

@section('template_title')
    Listado de Subcategorias
@endsection

@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <div style="display: flex; justify-content: space-between; align-items: center;">

                                    <span id="card_title">
                                        {{ __('Subcategory') }}
                                    </span>

                                    <div class="float-right">
                                        <a href="{{ route('subcategories.create') }}"
                                            class="btn btn-primary btn-sm float-right" data-placement="left">
                                            {{ __('Crear Nueva Subcategoría') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead class="thead">
                                            <tr>
                                                <th>No</th>
                                                <th>Categoría</th>
                                                <th>Referencia Subcategoria</th>
                                                <th>Nombre Subcategoría</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($categories as $category)
                                                @foreach ($category->subcategories as $subcategory)
                                                    <tr>
                                                        <td>{{ ++$i }}</td>
                                                        <td>{{ $category->NombreCategoria }}</td>
                                                        <td>{{ $subcategory->abrev }}</td>
                                                        <td>{{ $subcategory->detail }}</td>

                                                        <td>
                                                            <form
                                                                action="{{ route('subcategories.destroy', $subcategory->id) }}"
                                                                method="POST">
                                                                <a class="btn btn-sm btn-primary "
                                                                    href="{{ route('subcategories.show', $subcategory->id) }}"><i
                                                                        class="fa fa-fw fa-eye"></i>
                                                                    {{ __('Ver') }}</a>
                                                                <a class="btn btn-sm btn-success"
                                                                    href="{{ route('subcategories.edit', $subcategory->id) }}"><i
                                                                        class="fa fa-fw fa-edit"></i>
                                                                    {{ __('Editar') }}</a>
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger btn-sm"><i
                                                                        class="fa fa-fw fa-trash"></i>
                                                                    {{ __('Eliminar') }}</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
