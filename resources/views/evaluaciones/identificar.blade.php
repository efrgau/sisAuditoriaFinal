@extends('layout.app-master')

@section('tittle')
    Factor Identificar
@endsection
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-16">
                        <div class="table-responsive table--no-card m-b-30">
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    <div class="rs-select2--light rs-select2--md">
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">

                                <div class="card">
                                    <tr class="tr-shadow">
                                        <div class="card-header">
                                            <h4>ISO 27032 -> IDENTIFICAR </h4>
                                    </tr>
                                </div>


                                <div class="card-body">
                                    <div class="default-tab">
                                        <form method="POST" action="{{ route('Isocontroller.identificarStore') }}"
                                            role="form" enctype="multipart/form-data">
                                            @csrf

                                            <nav>

                                                <div class="nav nav-pills mb-3" id="nav-tab" role="tablist">
                                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                                        href="#nav-home" role="tab" aria-controls="nav-home"
                                                        aria-selected="true">Gestión de activos (ID.AM)</a>
                                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                                        href="#nav-profile" role="tab" aria-controls="nav-profile"
                                                        aria-selected="false">Entorno empresarial (ID.BE)</a>
                                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                                        href="#nav-contact" role="tab" aria-controls="nav-contact"
                                                        aria-selected="false">Gobernanza (ID.GV)</a>
                                                    <a class="nav-item nav-link" id="nav-contact1-tab" data-toggle="tab"
                                                        href="#nav-contact1" role="tab" aria-controls="nav-contact1"
                                                        aria-selected="false">Evaluación de riesgos (ID.RA)</a>
                                                    <a class="nav-item nav-link" id="nav-contact2-tab" data-toggle="tab"
                                                        href="#nav-contact2" role="tab" aria-controls="nav-contact2"
                                                        aria-selected="false">Gestión de riesgos (ID.RM)</a>
                                                    <a class="nav-item nav-link" id="nav-contact3-tab" data-toggle="tab"
                                                        href="#nav-contact3" role="tab" aria-controls="nav-contact3"
                                                        aria-selected="false">Gestión del riesgo de suministro (ID.SC)</a>
                                                </div>
                                            </nav>

                                            <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                                    aria-labelledby="nav-home-tab">
                                                    <p>
                                                    <div class="table-responsive table-responsive-data2">
                                                        <div class="card"></div>
                                                        <table class="table table-data2">
                                                            <tr class="spacer"></tr>
                                                            <thead>
                                                                <tr>
                                                                    <div class="table-responsive table-responsive-data2">
                                                                        <table class="table table-data2">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>
                                                                                        <label class="au-checkbox">
                                                                                            <input type="checkbox">
                                                                                            <span
                                                                                                class="au-checkmark"></span>
                                                                                        </label>
                                                                                    </th>
                                                                                    <th>Nombre</th>
                                                                                    <th>Categoria</th>
                                                                                    <th>Subcategoria</th>
                                                                                    <th>Evaluacion</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr class="tr-shadow">
                                                                                    <td>
                                                                                        <label class="au-checkbox">
                                                                                            <input type="checkbox">
                                                                                            <span
                                                                                                class="au-checkmark"></span>
                                                                                        </label>
                                                                                    </td>
                                                                                    <td>IDENTIFICAR ID</td>
                                                                                    <td>
                                                                                        <span class="block-email">Gestión de
                                                                                            activos (ID.AM)</span>
                                                                                    </td>
                                                                                    <td class="desc">ID.AM-1: Los
                                                                                        dispositivos
                                                                                        y sistemas físicos dentro de la
                                                                                        organización están inventariados.
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="rs-select2--light rs-select2--md">
                                                                                            <select class="js-select2"
                                                                                                name="property">
                                                                                                <option selected="selected">
                                                                                                    Rango</option>
                                                                                                <option value="">0
                                                                                                </option>
                                                                                                <option value="">1
                                                                                                </option>
                                                                                                <option value="">2
                                                                                                </option>
                                                                                                <option value="">3
                                                                                                </option>
                                                                                                <option value="">4
                                                                                                </option>
                                                                                            </select>
                                                                                            <div class="dropDownSelect2">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>

                                                                                        <div class="table-data-feature">
                                                                                            <button class="item"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="top"
                                                                                                title="Enviar">
                                                                                                <i
                                                                                                    class="zmdi zmdi-mail-send"></i>
                                                                                            </button>
                                                                                            <button class="item"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="top"
                                                                                                title="Editar">
                                                                                                <i
                                                                                                    class="zmdi zmdi-edit"></i>
                                                                                            </button>
                                                                                            <button class="item"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="top"
                                                                                                title="Borrar">
                                                                                                <i
                                                                                                    class="zmdi zmdi-delete"></i>
                                                                                            </button>

                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="spacer"></tr>
                                                                                <tr class="tr-shadow">
                                                                                    <td>
                                                                                        <label class="au-checkbox">
                                                                                            <input type="checkbox">
                                                                                            <span
                                                                                                class="au-checkmark"></span>
                                                                                        </label>
                                                                                    </td>

                                                                                    <td>IDENTIFICAR ID</td>
                                                                                    <td>
                                                                                        <span class="block-email">Gestión
                                                                                            de
                                                                                            activos (ID.AM)</span>
                                                                                    </td>
                                                                                    <td class="desc">ID.AM-2: Las
                                                                                        plataformas
                                                                                        de software y las aplicaciones
                                                                                        dentro de
                                                                                        la organización están inventariadas.
                                                                                    </td>

                                                                                    <td>
                                                                                        <div
                                                                                            class="rs-select2--light rs-select2--md">
                                                                                            <select class="js-select2"
                                                                                                name="property">
                                                                                                <option
                                                                                                    selected="selected">
                                                                                                    Rango</option>
                                                                                                <option value="">0
                                                                                                </option>
                                                                                                <option value="">1
                                                                                                </option>
                                                                                                <option value="">2
                                                                                                </option>
                                                                                                <option value="">3
                                                                                                </option>
                                                                                                <option value="">4
                                                                                                </option>
                                                                                            </select>
                                                                                            <div class="dropDownSelect2">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>

                                                                                        <div class="table-data-feature">
                                                                                            <button class="item"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="top"
                                                                                                title="Enviar">
                                                                                                <i
                                                                                                    class="zmdi zmdi-mail-send"></i>
                                                                                            </button>
                                                                                            <button class="item"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="top"
                                                                                                title="Editar">
                                                                                                <i
                                                                                                    class="zmdi zmdi-edit"></i>
                                                                                            </button>
                                                                                            <button class="item"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="top"
                                                                                                title="Borrar">
                                                                                                <i
                                                                                                    class="zmdi zmdi-delete"></i>
                                                                                            </button>

                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="spacer"></tr>
                                                                                <tr class="tr-shadow">


                                                                                <tr class="tr-shadow">
                                                                                    <td>
                                                                                        <label class="au-checkbox">
                                                                                            <input type="checkbox">
                                                                                            <span
                                                                                                class="au-checkmark"></span>
                                                                                        </label>
                                                                                    </td>
                                                                                    <td>IDENTIFICAR ID</td>
                                                                                    <td>
                                                                                        <span class="block-email">Gestión
                                                                                            de
                                                                                            activos (ID.AM)</span>
                                                                                    </td>
                                                                                    <td class="desc">ID.AM-3: La
                                                                                        comunicación
                                                                                        organizacional y los flujos de datos
                                                                                        están mapeados.</td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="rs-select2--light rs-select2--md">
                                                                                            <select class="js-select2"
                                                                                                name="property">
                                                                                                <option
                                                                                                    selected="selected">
                                                                                                    Rango</option>
                                                                                                <option value="">0
                                                                                                </option>
                                                                                                <option value="">1
                                                                                                </option>
                                                                                                <option value="">2
                                                                                                </option>
                                                                                                <option value="">3
                                                                                                </option>
                                                                                                <option value="">4
                                                                                                </option>
                                                                                            </select>
                                                                                            <div class="dropDownSelect2">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>

                                                                                        <div class="table-data-feature">
                                                                                            <button class="item"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="top"
                                                                                                title="Enviar">
                                                                                                <i
                                                                                                    class="zmdi zmdi-mail-send"></i>
                                                                                            </button>
                                                                                            <button class="item"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="top"
                                                                                                title="Editar">
                                                                                                <i
                                                                                                    class="zmdi zmdi-edit"></i>
                                                                                            </button>
                                                                                            <button class="item"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="top"
                                                                                                title="Borrar">
                                                                                                <i
                                                                                                    class="zmdi zmdi-delete"></i>
                                                                                            </button>

                                                                                        </div>
                                                                                    </td>
                                                                                </tr>

                                                                                <tr class="tr-shadow">
                                                                                    <td>
                                                                                        <label class="au-checkbox">
                                                                                            <input type="checkbox">
                                                                                            <span
                                                                                                class="au-checkmark"></span>
                                                                                        </label>
                                                                                    </td>
                                                                                    <td>IDENTIFICAR ID</td>
                                                                                    <td>
                                                                                        <span class="block-email">Gestión
                                                                                            de
                                                                                            activos (ID.AM)</span>
                                                                                    </td>
                                                                                    <td class="desc">ID.AM-4: Los
                                                                                        sistemas de
                                                                                        información externos están
                                                                                        catalogados.
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="rs-select2--light rs-select2--md">
                                                                                            <select class="js-select2"
                                                                                                name="property">
                                                                                                <option
                                                                                                    selected="selected">
                                                                                                    Rango</option>
                                                                                                <option value="">0
                                                                                                </option>
                                                                                                <option value="">1
                                                                                                </option>
                                                                                                <option value="">2
                                                                                                </option>
                                                                                                <option value="">3
                                                                                                </option>
                                                                                                <option value="">4
                                                                                                </option>
                                                                                            </select>
                                                                                            <div class="dropDownSelect2">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>

                                                                                        <div class="table-data-feature">
                                                                                            <button class="item"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="top"
                                                                                                title="Enviar">
                                                                                                <i
                                                                                                    class="zmdi zmdi-mail-send"></i>
                                                                                            </button>
                                                                                            <button class="item"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="top"
                                                                                                title="Editar">
                                                                                                <i
                                                                                                    class="zmdi zmdi-edit"></i>
                                                                                            </button>
                                                                                            <button class="item"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="top"
                                                                                                title="Borrar">
                                                                                                <i
                                                                                                    class="zmdi zmdi-delete"></i>
                                                                                            </button>

                                                                                        </div>
                                                                                    </td>
                                                                                </tr>



                                                                                <tr class="tr-shadow">
                                                                                    <td>
                                                                                        <label class="au-checkbox">
                                                                                            <input type="checkbox">
                                                                                            <span
                                                                                                class="au-checkmark"></span>
                                                                                        </label>
                                                                                    </td>
                                                                                    <td>IDENTIFICAR ID</td>
                                                                                    <td>
                                                                                        <span class="block-email">Gestión
                                                                                            de
                                                                                            activos (ID.AM)</span>
                                                                                    </td>
                                                                                    <td class="desc">ID.AM-5: Los
                                                                                        recursos
                                                                                        (por ejemplo, hardware,
                                                                                        dispositivos,
                                                                                        datos, tiempo, personal y software)
                                                                                        se
                                                                                        priorizan en función de su
                                                                                        clasificación, criticidad y valor
                                                                                        comercial.</td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="rs-select2--light rs-select2--md">
                                                                                            <select class="js-select2"
                                                                                                name="property">
                                                                                                <option
                                                                                                    selected="selected">
                                                                                                    Rango</option>
                                                                                                <option value="">0
                                                                                                </option>
                                                                                                <option value="">1
                                                                                                </option>
                                                                                                <option value="">2
                                                                                                </option>
                                                                                                <option value="">3
                                                                                                </option>
                                                                                                <option value="">4
                                                                                                </option>
                                                                                            </select>
                                                                                            <div class="dropDownSelect2">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>

                                                                                        <div class="table-data-feature">
                                                                                            <button class="item"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="top"
                                                                                                title="Enviar">
                                                                                                <i
                                                                                                    class="zmdi zmdi-mail-send"></i>
                                                                                            </button>
                                                                                            <button class="item"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="top"
                                                                                                title="Editar">
                                                                                                <i
                                                                                                    class="zmdi zmdi-edit"></i>
                                                                                            </button>
                                                                                            <button class="item"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="top"
                                                                                                title="Borrar">
                                                                                                <i
                                                                                                    class="zmdi zmdi-delete"></i>
                                                                                            </button>

                                                                                        </div>
                                                                                    </td>
                                                                                </tr>

                                                                </tr>
                                                                <tr class="spacer"></tr>
                                                                <tr class="tr-shadow">
                                                                </tr>

                                                                <tr class="tr-shadow">
                                                                    <td>
                                                                        <label class="au-checkbox">
                                                                            <input type="checkbox">
                                                                            <span class="au-checkmark"></span>
                                                                        </label>
                                                                    </td>
                                                                    <td>IDENTIFICAR ID</td>
                                                                    <td>
                                                                        <span class="block-email">Gestión de activos
                                                                            (ID.AM)</span>
                                                                    </td>
                                                                    <td class="desc">ID.AM-6: Los roles y las
                                                                        responsabilidades de la seguridad cibernética para
                                                                        toda
                                                                        la fuerza de trabajo y terceros interesados</td>
                                                                    <td>
                                                                        <div class="rs-select2--light rs-select2--md">
                                                                            <select class="js-select2" name="property">
                                                                                <option selected="selected">Rango</option>
                                                                                <option value="">0</option>
                                                                                <option value="">1</option>
                                                                                <option value="">2</option>
                                                                                <option value="">3</option>
                                                                                <option value="">4</option>
                                                                            </select>
                                                                            <div class="dropDownSelect2"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>

                                                                        <div class="table-data-feature">
                                                                            <button class="item" data-toggle="tooltip"
                                                                                data-placement="top" title="Enviar">
                                                                                <i class="zmdi zmdi-mail-send"></i>
                                                                            </button>
                                                                            <button class="item" data-toggle="tooltip"
                                                                                data-placement="top" title="Editar">
                                                                                <i class="zmdi zmdi-edit"></i>
                                                                            </button>
                                                                            <button class="item" data-toggle="tooltip"
                                                                                data-placement="top" title="Borrar">
                                                                                <i class="zmdi zmdi-delete"></i>
                                                                            </button>

                                                                        </div>
                                                                    </td>
                                                                </tr>

                                                        </table>
                                                    </div>

                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row m-t-30">
                                                <div class="col-md-12">

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endsection
