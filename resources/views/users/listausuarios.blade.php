@extends('layout.app-master');

@section('tittle', 'Lista usuarios'),

@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="title-5 m-b-35">LISTADO DE USUARIOS DEL SISTEMA</h3>
                            </div>
                            <div class="card-body">
                                <!-- DATA TABLE -->
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">All Properties</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--sm">
                                            <select class="js-select2" name="time">
                                                <option selected="selected">Today</option>
                                                <option value="">3 Days</option>
                                                <option value="">1 Week</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <button class="au-btn-filter">
                                            <i class="zmdi zmdi-filter-list"></i>filters</button>
                                    </div>
                                    <div class="table-data__tool-right">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small"
                                            onclick="location.href='{{ route('registrarUsuarioNuevo') }}'">
                                            <i class="zmdi zmdi-plus"></i>Nuevo Usuario</button>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </th>
                                                <th>Nombre</th>
                                                <th>Correo electrónico</th>
                                                <th>No. identificación</th>
                                                <th>Número telefónico</th>
                                                <th>Fecha Creación</th>
                                                <th>Estado</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                                <tr class="tr-shadow">
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>
                                                        <span class="block-email">{{ $user->email }}</span>
                                                    </td>
                                                    <td class="desc">{{ $user->identification }}</td>
                                                    <td> {{ $user->celular }}</td>
                                                    <td>{{ $user->created_at->format('d-m-Y h:m A') }}</td>
                                                    <td>
                                                        @if ($user->Estado == 1)
                                                            <span class="status--process">Activo</span>
                                                        @else
                                                            <span class="status--danger">Inactivo</span>
                                                        @endif

                                                    </td>
                                                    <td>
                                                        <div class="table-data-feature">
                                                            <button type="button" class="item" title="Detalles"
                                                                data-placement="top" data-toggle="modal"
                                                                data-target="#largeModal{{ $user->id }}">
                                                                <i class="zmdi zmdi-mail-send"></i>
                                                            </button>
                                                            <button type="button" class="item" title="Editar"
                                                                data-placement="top" data-toggle="modal"
                                                                data-target="#userEdit{{ $user->id }}">
                                                                <i
                                                                    class="zmdi
                                                        zmdi-edit"></i>
                                                            </button>
                                                            <button type="button" class="item" title="Eliminar"
                                                                data-placement="top" data-toggle="modal"
                                                                data-target="#userDelete{{ $user->id }}">
                                                                <i
                                                                    class="zmdi
                                                        zmdi-delete"></i>
                                                            </button>

                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.users-modals.verusuarioModal');
    @include('components.users-modals.editar-usuario-modal');
    @include('components.users-modals.eliminar-usuario-modal');
@endsection
