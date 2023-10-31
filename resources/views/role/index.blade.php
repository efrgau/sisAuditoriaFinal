@extends('layout.app-master')

@section('title')
    Ver Lista Roles de Sistema
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
                                        {{ __('LISTA DE ROLES DEL SISTEMA') }}
                                    </span>

                                    <div class="float-right">
                                        <a href="{{ route('roles.create') }}" class="btn btn-primary btn-sm float-right"
                                            data-placement="left">
                                            {{ __('Crear nuevo rol') }}
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

                                                <th>Nombre de rol</th>
                                                <th>Acceso dispositivo</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($roles as $role)
                                                <tr>
                                                    <td>{{ ++$i }}</td>

                                                    <td>{{ $role->name }}</td>
                                                    <td>{{ $role->guard_name }}</td>

                                                    <td>
                                                        <form action="{{ route('roles.destroy', $role->id) }}"
                                                            method="POST">
                                                            <a class="btn btn-sm btn-primary "
                                                                href="{{ route('roles.show', $role->id) }}"><i
                                                                    class="fa fa-fw fa-eye"></i> {{ __('Detalles') }}</a>
                                                            <!--
                                                                        <a class="btn btn-sm btn-success"
                                                                        href="{{ route('roles.edit', $role->id) }}"><i
                                                                            class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                                    @csrf
                                                                    -->
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
                        {!! $roles->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
