@extends('layout.app-master')

@section('template_title')
    Factory
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
                                        {{ __('LISTADO DE EMPRESAS CLIENTES') }}
                                    </span>

                                    <div class="float-right">
                                        <a href="{{ route('factories.create') }}" class="btn btn-primary btn-sm float-right"
                                            data-placement="left">
                                            {{ __('Crear nueva empresa') }}
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
                                                <th>Usuario Supervisor</th>
                                                <th>Nombre empresa</th>
                                                <th>Fecha creacion empresa</th>
                                                <th>Nombre representante legal</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($factories as $factory)
                                                <tr>
                                                    <td>{{ ++$i }}</td>

                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $factory->NombreEmpresa }}</td>
                                                    <td>{{ $factory->FechaCreacionEmpresa }}</td>
                                                    <td>{{ $factory->NombreRepresentanteLegal }}</td>

                                                    <td>
                                                        <form action="{{ route('factories.destroy', $factory->id) }}"
                                                            method="POST">
                                                            <a class="btn btn-sm btn-primary "
                                                                href="{{ route('factories.show', $factory->id) }}"><i
                                                                    class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                            <a class="btn btn-sm btn-success"
                                                                href="{{ route('factories.edit', $factory->id) }}"><i
                                                                    class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm"><i
                                                                    class="fa fa-fw fa-trash"></i>
                                                                {{ __('Eliminar') }}</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        {!! $factories->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
