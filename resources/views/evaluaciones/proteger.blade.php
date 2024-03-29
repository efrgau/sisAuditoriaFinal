@extends('layout.app-master')

@section('tittle')
    Factor Proteger
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
                                <div class="table-data__tool-right">
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                        <i class="zmdi zmdi-plus"></i>Agregar item</button>
                                    <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                        <select class="js-select2" name="type">
                                            <option selected="selected">EXPORTAR</option>
                                            <option value="">pdf</option>
                                            <option value="">excel</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">

                                <div class="card">
                                    <tr class="tr-shadow">
                                        <div class="card-header">
                                            <h4>ISO 27032 -> PROTEGER </h4>
                                    </tr>
                                </div>

                                <div class="card-body">
                                    <div class="default-tab">

                                        <nav>

                                            <div class="nav nav-pills mb-3" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                                    href="#nav-home" role="tab" aria-controls="nav-home"
                                                    aria-selected="true">Gestión de identidad (PR.AC)</a>
                                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                                    href="#nav-profile" role="tab" aria-controls="nav-profile"
                                                    aria-selected="false">Concienciación-capacitación (PR.AT)</a>
                                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                                    href="#nav-contact" role="tab" aria-controls="nav-contact"
                                                    aria-selected="false">Seguridad-datos (PR.DS)</a>
                                                <a class="nav-item nav-link" id="nav-contact1-tab" data-toggle="tab"
                                                    href="#nav-contact1" role="tab" aria-controls="nav-contact1"
                                                    aria-selected="false">Procesos (PR.IP)</a>
                                                <a class="nav-item nav-link" id="nav-contact2-tab" data-toggle="tab"
                                                    href="#nav-contact2" role="tab" aria-controls="nav-contact2"
                                                    aria-selected="false">Mantenimiento (PR.MA)</a>
                                                <a class="nav-item nav-link" id="nav-contact3-tab" data-toggle="tab"
                                                    href="#nav-contact3" role="tab" aria-controls="nav-contact3"
                                                    aria-selected="false">Tecnología de protección (PR.PT)</a>
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
                                                                                        <span class="au-checkmark"></span>
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
                                                                                        <span class="au-checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td>PROTEGER (PR)</td>
                                                                                <td>
                                                                                    <span class="block-email">Gestión de
                                                                                        identidad, autenticación y control
                                                                                        de acceso (PR.AC)</span>
                                                                                </td>
                                                                                <td class="desc">PR.AC-1: Las identidades
                                                                                    y credenciales se emiten, se
                                                                                    administran, se verifican, se revocan y
                                                                                    se auditan para los dispositivos,
                                                                                    usuarios y procesos autorizados.</td>
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
                                                                                        <div class="dropDownSelect2"></div>
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
                                                                                            <i class="zmdi zmdi-edit"></i>
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
                                                                                        <span class="au-checkmark"></span>
                                                                                    </label>
                                                                                </td>

                                                                                <td>PROTEGER (PR)</td>
                                                                                <td>
                                                                                    <span class="block-email">Gestión de
                                                                                        identidad, autenticación y control
                                                                                        de acceso (PR.AC)</span>
                                                                                </td>
                                                                                <td class="desc">PR.AC-2: Se gestiona y
                                                                                    se protege el acceso físico a los
                                                                                    activos.</td>

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
                                                                                        <div class="dropDownSelect2"></div>
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
                                                                                            <i class="zmdi zmdi-edit"></i>
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
                                                                                        <span class="au-checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td>PROTEGER (PR)</td>
                                                                                <td>
                                                                                    <span class="block-email">Gestión de
                                                                                        identidad, autenticación y control
                                                                                        de acceso (PR.AC)</span>
                                                                                </td>
                                                                                <td class="desc">PR.AC-3: Se gestiona el
                                                                                    acceso remoto.</td>
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
                                                                                        <div class="dropDownSelect2"></div>
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
                                                                                            <i class="zmdi zmdi-edit"></i>
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
                                                                                        <span class="au-checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td>PROTEGER (PR)</td>
                                                                                <td>
                                                                                    <span class="block-email">Gestión de
                                                                                        identidad, autenticación y control
                                                                                        de acceso (PR.AC)</span>
                                                                                </td>
                                                                                <td class="desc">PR.AC-4: Se gestionan
                                                                                    los permisos y autorizaciones de acceso
                                                                                    con incorporación de los principios de
                                                                                    menor privilegio y separación de
                                                                                    funciones.</td>
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
                                                                                        <div class="dropDownSelect2"></div>
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
                                                                                            <i class="zmdi zmdi-edit"></i>
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
                                                                                        <span class="au-checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td>PROTEGER (PR)</td>
                                                                                <td>
                                                                                    <span class="block-email">Gestión de
                                                                                        identidad, autenticación y control
                                                                                        de acceso (PR.AC)</span>
                                                                                </td>
                                                                                <td class="desc">PR.AC-5: Se protege la
                                                                                    integridad de la red (por ejemplo,
                                                                                    segregación de la red, segmentación de
                                                                                    la red).</td>
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
                                                                                        <div class="dropDownSelect2"></div>
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
                                                                                            <i class="zmdi zmdi-edit"></i>
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
                                                                                        <span class="au-checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td>PROTEGER (PR)</td>
                                                                                <td>
                                                                                    <span class="block-email">Gestión de
                                                                                        identidad, autenticación y control
                                                                                        de acceso (PR.AC)</span>
                                                                                </td>
                                                                                <td class="desc">PR.AC-6: Las identidades
                                                                                    son verificadas y vinculadas a
                                                                                    credenciales y afirmadas en las
                                                                                    interacciones.</td>
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
                                                                                        <div class="dropDownSelect2"></div>
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
                                                                                            <i class="zmdi zmdi-edit"></i>
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
                                                                                        <span class="au-checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td>PROTEGER (PR)</td>
                                                                                <td>
                                                                                    <span class="block-email">Gestión de
                                                                                        identidad, autenticación y control
                                                                                        de acceso (PR.AC)</span>
                                                                                </td>
                                                                                <td class="desc">PR.AC-7: Se autentican
                                                                                    los usuarios, dispositivos y otros
                                                                                    activos (por ejemplo, autenticación de
                                                                                    un solo factor o múltiples factores)
                                                                                    acorde al riesgo de la transacción (por
                                                                                    ejemplo, riesgos de seguridad y
                                                                                    privacidad de individuos y otros riesgos
                                                                                    para las organizaciones).</td>
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
                                                                                        <div class="dropDownSelect2"></div>
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
                                                                                            <i class="zmdi zmdi-edit"></i>
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

                                                                    </table>
                                                                </div>

                                                                </p>
                                                </div>





                                                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                                    aria-labelledby="nav-profile-tab">
                                                    <p>
                                                    <div class="table-responsive table-responsive-data2">
                                                        <table class="table table-data2">
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
                                                                                    <td>PROTEGER (PR)</td>
                                                                                    <td>
                                                                                        <span
                                                                                            class="block-email">Concienciación
                                                                                            y capacitación (PR.AT)</span>
                                                                                    </td>
                                                                                    <td class="desc">PR.AT-1: Todos los
                                                                                        usuarios están informados y
                                                                                        capacitados.</td>
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
                                                                                    <td>
                                                                                        <label class="au-checkbox">
                                                                                            <input type="checkbox">
                                                                                            <span
                                                                                                class="au-checkmark"></span>
                                                                                        </label>
                                                                                    </td>

                                                                                    <td>PROTEGER (PR)</td>
                                                                                    <td>
                                                                                        <span
                                                                                            class="block-email">Concienciación
                                                                                            y capacitación (PR.AT)</span>
                                                                                    </td>
                                                                                    <td class="desc">PR.AT-2: Los
                                                                                        usuarios privilegiados comprenden
                                                                                        sus roles y responsabilidades.</td>

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
                                                                                    <td>PROTEGER (PR)</td>
                                                                                    <td>
                                                                                        <span
                                                                                            class="block-email">Concienciación
                                                                                            y capacitación (PR.AT)</span>
                                                                                    </td>
                                                                                    <td class="desc">PR.AT-3: Los
                                                                                        terceros interesados (por ejemplo,
                                                                                        proveedores, clientes, socios)
                                                                                        comprenden sus roles y
                                                                                        responsabilidades.</td>
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
                                                                                    <td>PROTEGER (PR)</td>
                                                                                    <td>
                                                                                        <span
                                                                                            class="block-email">Concienciación
                                                                                            y capacitación (PR.AT)</span>
                                                                                    </td>
                                                                                    <td class="desc">PR.AT-4: Los
                                                                                        ejecutivos superiores comprenden sus
                                                                                        roles y responsabilidades.</td>
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
                                                                                    <td>PROTEGER (PR)</td>
                                                                                    <td>
                                                                                        <span
                                                                                            class="block-email">Concienciación
                                                                                            y capacitación (PR.AT)</span>
                                                                                    </td>
                                                                                    <td class="desc">PR.AT-5: El personal
                                                                                        de seguridad física y cibernética
                                                                                        comprende sus roles y
                                                                                        responsabilidades.</td>
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



                                                                                <!--<tr class="tr-shadow">
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>PROTEGER (PR)</td>
                                                    <td>
                                                        <span class="block-email">Concienciación y capacitación (PR.AT)</span>
                                                    </td>
                                                    <td class="desc">PR.AC-6: Las identidades son verificadas y vinculadas a credenciales y afirmadas en las interacciones.</td>
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
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Enviar">
                                                                <i class="zmdi zmdi-mail-send"></i>
                                                            </button>
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Editar">
                                                                <i class="zmdi zmdi-edit"></i>
                                                            </button>
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Borrar">
                                                                <i class="zmdi zmdi-delete"></i>
                                                            </button>
                                                            
                                                        </div>
                                                    </td>
                                                </tr>-->






                                                                                <!-- <tr class="tr-shadow">
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>PROTEGER (PR)</td>
                                                    <td>
                                                        <span class="block-email">Gestión de identidad, autenticación y control de acceso (PR.AC)</span>
                                                    </td>
                                                    <td class="desc">PR.AC-7: Se autentican los usuarios, dispositivos y otros activos (por ejemplo, autenticación de un solo factor o múltiples factores) acorde al riesgo de la transacción (por ejemplo, riesgos de seguridad y privacidad de individuos y otros riesgos para las organizaciones).</td>
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
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Enviar">
                                                                <i class="zmdi zmdi-mail-send"></i>
                                                            </button>
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Editar">
                                                                <i class="zmdi zmdi-edit"></i>
                                                            </button>
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Borrar">
                                                                <i class="zmdi zmdi-delete"></i>
                                                            </button>
                                                           
                                                        </div>
                                                    </td>
                                                </tr>-->

                                                                </tr>
                                                                <tr class="spacer"></tr>
                                                                <tr class="tr-shadow">
                                                                </tr>

                                                        </table>
                                                    </div>
                                                    </p>
                                                </div>
                                                <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                                    aria-labelledby="nav-contact-tab">
                                                    <p>
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
                                                                            <span class="au-checkmark"></span>
                                                                        </label>
                                                                    </td>
                                                                    <td>PROTEGER (PR)</td>
                                                                    <td>
                                                                        <span class="block-email">Seguridad de los datos
                                                                            (PR.DS)</span>
                                                                    </td>
                                                                    <td class="desc">PR.DS-1: Los datos en reposo están
                                                                        protegidos.</td>
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
                                                                <tr class="spacer"></tr>
                                                                <tr class="tr-shadow">
                                                                    <td>
                                                                        <label class="au-checkbox">
                                                                            <input type="checkbox">
                                                                            <span class="au-checkmark"></span>
                                                                        </label>
                                                                    </td>

                                                                    <td>PROTEGER (PR)</td>
                                                                    <td>
                                                                        <span class="block-email">Seguridad de los datos
                                                                            (PR.DS)</span>
                                                                    </td>
                                                                    <td class="desc">PR.DS-2: Los datos en tránsito están
                                                                        protegidos.</td>

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
                                                                <tr class="spacer"></tr>
                                                                <tr class="tr-shadow">


                                                                <tr class="tr-shadow">
                                                                    <td>
                                                                        <label class="au-checkbox">
                                                                            <input type="checkbox">
                                                                            <span class="au-checkmark"></span>
                                                                        </label>
                                                                    </td>
                                                                    <td>PROTEGER (PR)</td>
                                                                    <td>
                                                                        <span class="block-email">Seguridad de los datos
                                                                            (PR.DS)</span>
                                                                    </td>
                                                                    <td class="desc">PR.DS-3: Los activos se gestionan
                                                                        formalmente durante la eliminación, las
                                                                        transferencias y la disposición.</td>
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

                                                                <tr class="tr-shadow">
                                                                    <td>
                                                                        <label class="au-checkbox">
                                                                            <input type="checkbox">
                                                                            <span class="au-checkmark"></span>
                                                                        </label>
                                                                    </td>
                                                                    <td>PROTEGER (PR)</td>
                                                                    <td>
                                                                        <span class="block-email">Seguridad de los datos
                                                                            (PR.DS)</span>
                                                                    </td>
                                                                    <td class="desc">PR.DS-4: Se mantiene una capacidad
                                                                        adecuada para asegurar la disponibilidad.</td>
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



                                                                <tr class="tr-shadow">
                                                                    <td>
                                                                        <label class="au-checkbox">
                                                                            <input type="checkbox">
                                                                            <span class="au-checkmark"></span>
                                                                        </label>
                                                                    </td>
                                                                    <td>PROTEGER (PR)</td>
                                                                    <td>
                                                                        <span class="block-email">Seguridad de los datos
                                                                            (PR.DS)</span>
                                                                    </td>
                                                                    <td class="desc"> PR.DS-5: Se implementan
                                                                        protecciones contra las filtraciones de datos.</td>
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

                                                                </tr>


                                                                <tr class="tr-shadow">
                                                                    <td>
                                                                        <label class="au-checkbox">
                                                                            <input type="checkbox">
                                                                            <span class="au-checkmark"></span>
                                                                        </label>
                                                                    </td>
                                                                    <td>PROTEGER (PR)</td>
                                                                    <td>
                                                                        <span class="block-email">Seguridad de los datos
                                                                            (PR.DS)</span>
                                                                    </td>
                                                                    <td class="desc">PR.DS-6: Se utilizan mecanismos de
                                                                        comprobación de la integridad para verificar el
                                                                        software, el firmware y la integridad de la
                                                                        información.</td>
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
                                                                    <td>PROTEGER (PR)</td>
                                                                    <td>
                                                                        <span class="block-email">Seguridad de los datos
                                                                            (PR.DS)</span>
                                                                    </td>
                                                                    <td class="desc">PR.DS-7: Los entornos de desarrollo
                                                                        y prueba(s) están separados del entorno de
                                                                        producción.</td>
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
                                                <div class="tab-pane fade" id="nav-contact1" role="tabpanel"
                                                    aria-labelledby="nav-contact1-tab">
                                                    <p>
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
                                                                            <span class="au-checkmark"></span>
                                                                        </label>
                                                                    </td>
                                                                    <td>PROTEGER (PR)</td>
                                                                    <td>
                                                                        <span class="block-email">Procesos y procedimientos
                                                                            de protección de la información (PR.IP)</span>
                                                                    </td>
                                                                    <td class="desc">PR.IP-1: Se crea y se mantiene una
                                                                        configuración de base de los sistemas de control
                                                                        industrial y de tecnología de la información con
                                                                        incorporación de los principios de seguridad (por
                                                                        ejemplo, el concepto de funcionalidad mínima).</td>
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
                                                                <tr class="spacer"></tr>
                                                                <tr class="tr-shadow">
                                                                    <td>
                                                                        <label class="au-checkbox">
                                                                            <input type="checkbox">
                                                                            <span class="au-checkmark"></span>
                                                                        </label>
                                                                    </td>

                                                                    <td>PROTEGER (PR)</td>
                                                                    <td>
                                                                        <span class="block-email">Procesos y procedimientos
                                                                            de protección de la información (PR.IP)</span>
                                                                    </td>
                                                                    <td class="desc">PR.IP-2: Se implementa un ciclo de
                                                                        vida de desarrollo del sistema para gestionar los
                                                                        sistemas.</td>

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
                                                                <tr class="spacer"></tr>
                                                                <tr class="tr-shadow">


                                                                <tr class="tr-shadow">
                                                                    <td>
                                                                        <label class="au-checkbox">
                                                                            <input type="checkbox">
                                                                            <span class="au-checkmark"></span>
                                                                        </label>
                                                                    </td>
                                                                    <td>PROTEGER (PR)</td>
                                                                    <td>
                                                                        <span class="block-email">Procesos y procedimientos
                                                                            de protección de la información (PR.IP)</span>
                                                                    </td>
                                                                    <td class="desc">PR.IP-3: Se encuentran establecidos
                                                                        procesos de control de cambio de la configuración.
                                                                    </td>
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

                                                                <tr class="tr-shadow">
                                                                    <td>
                                                                        <label class="au-checkbox">
                                                                            <input type="checkbox">
                                                                            <span class="au-checkmark"></span>
                                                                        </label>
                                                                    </td>
                                                                    <td>PROTEGER (PR)</td>
                                                                    <td>
                                                                        <span class="block-email">Procesos y procedimientos
                                                                            de protección de la información (PR.IP)</span>
                                                                    </td>
                                                                    <td class="desc">PR.IP-4: Se realizan, se mantienen y
                                                                        se prueban copias de seguridad de la información.
                                                                    </td>
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



                                                                <tr class="tr-shadow">
                                                                    <td>
                                                                        <label class="au-checkbox">
                                                                            <input type="checkbox">
                                                                            <span class="au-checkmark"></span>
                                                                        </label>
                                                                    </td>
                                                                    <td>PROTEGER (PR)</td>
                                                                    <td>
                                                                        <span class="block-email">Procesos y procedimientos
                                                                            de protección de la información (PR.IP)</span>
                                                                    </td>
                                                                    <td class="desc"> PR.IP-5: Se cumplen las
                                                                        regulaciones y la política con respecto al entorno
                                                                        operativo físico para los activos organizativos.
                                                                    </td>
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

                                                                </tr>


                                                                <tr class="tr-shadow">
                                                                    <td>
                                                                        <label class="au-checkbox">
                                                                            <input type="checkbox">
                                                                            <span class="au-checkmark"></span>
                                                                        </label>
                                                                    </td>
                                                                    <td>PROTEGER (PR)</td>
                                                                    <td>
                                                                        <span class="block-email">Procesos y procedimientos
                                                                            de protección de la información (PR.IP)</span>
                                                                    </td>
                                                                    <td class="desc">PR.IP-6: Los datos son eliminados de
                                                                        acuerdo con las políticas.</td>
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

                                                                    <td>PROTEGER (PR)</td>
                                                                    <td>
                                                                        <span class="block-email">Procesos y
                                                                            procedimientos de protección de la información
                                                                            (PR.IP)</span>
                                                                    </td>
                                                                    <td class="desc">PR.IP-7: Se mejoran los procesos de
                                                                        protección.</td>
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


                                                                    <td>PROTEGER (PR)</td>
                                                                    <td>
                                                                        <span class="block-email">Procesos y
                                                                            procedimientos de protección de la información
                                                                            (PR.IP)</span>
                                                                    </td>
                                                                    <td class="desc">PR.IP-8: Se comparte la efectividad
                                                                        de las tecnologías de protección.</td>
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



                                                                    <td>PROTEGER (PR)</td>
                                                                    <td>
                                                                        <span class="block-email">Procesos y
                                                                            procedimientos de protección de la información
                                                                            (PR.IP)</span>
                                                                    </td>
                                                                    <td class="desc">PR.IP-9: Se encuentran establecidos
                                                                        y se gestionan planes de respuesta (Respuesta a
                                                                        Incidentes y Continuidad del Negocio) y planes de
                                                                        recuperación (Recuperación de Incidentes y
                                                                        Recuperación de Desastres).</td>
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


                                                                    <td>PROTEGER (PR)</td>
                                                                    <td>
                                                                        <span class="block-email">Procesos y
                                                                            procedimientos de protección de la información
                                                                            (PR.IP)</span>
                                                                    </td>
                                                                    <td class="desc">PR.IP-10: Se prueban los planes de
                                                                        respuesta y recuperación.</td>
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


                                                                    <td>PROTEGER (PR)</td>
                                                                    <td>
                                                                        <span class="block-email">Procesos y
                                                                            procedimientos de protección de la información
                                                                            (PR.IP)</span>
                                                                    </td>
                                                                    <td class="desc">PR.IP-11: La seguridad cibernética
                                                                        se encuentra incluida en las prácticas de recursos
                                                                        humanos (por ejemplo, desaprovisionamiento,
                                                                        selección del personal).</td>
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


                                                                    <td>PROTEGER (PR)</td>
                                                                    <td>
                                                                        <span class="block-email">Procesos y
                                                                            procedimientos de protección de la información
                                                                            (PR.IP)</span>
                                                                    </td>
                                                                    <td class="desc">PR.IP-12: Se desarrolla y se
                                                                        implementa un plan de gestión de las
                                                                        vulnerabilidades.</td>
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
                                                <div class="tab-pane fade" id="nav-contact2" role="tabpanel"
                                                    aria-labelledby="nav-contact2-tab">
                                                    <p>
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
                                                                            <span class="au-checkmark"></span>
                                                                        </label>
                                                                    </td>
                                                                    <td>PROTEGER ddd(PR)</td>
                                                                    <td>
                                                                        <span class="block-email">Mantenimiento
                                                                            (PR.MA)</span>
                                                                    </td>
                                                                    <td class="desc">PR.MA-1: El mantenimiento y la
                                                                        reparación de los activos de la organización se
                                                                        realizan y están registrados con herramientas
                                                                        aprobadas y controladas.</td>
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
                                                                <tr class="spacer"></tr>
                                                                <tr class="tr-shadow">


                                                                <tr class="tr-shadow">
                                                                    <td>
                                                                        <label class="au-checkbox">
                                                                            <input type="checkbox">
                                                                            <span class="au-checkmark"></span>
                                                                        </label>
                                                                    </td>
                                                                    <td>PROTEGER ddd(PR)</td>
                                                                    <td>
                                                                        <span class="block-email">Mantenimiento
                                                                            (PR.MA)</span>
                                                                    </td>
                                                                    <td class="desc">PR.MA-2: El mantenimiento remoto de
                                                                        los activos de la organización se aprueba, se
                                                                        registra y se realiza de manera que evite el acceso
                                                                        no autorizado.</td>
                                                                    <td>
                                                                        <div class="rs-select2--light rs-select2--md">
                                                                            <div class="rs-select2--light rs-select2--md">
                                                                                <select class="js-select2"
                                                                                    name="property">
                                                                                    <option selected="selected">Rango
                                                                                    </option>
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
                                                <div class="tab-pane fade" id="nav-contact3" role="tabpanel"
                                                    aria-labelledby="nav-contact3-tab">
                                                    <p>
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
                                                                            <span class="au-checkmark"></span>
                                                                        </label>
                                                                    </td>
                                                                    <td>PROTEGER (PR)</td>
                                                                    <td>
                                                                        <span class="block-email">Tecnología de protección
                                                                            (PR.PT)</span>
                                                                    </td>
                                                                    <td class="desc">PR.PT-1: Los registros de auditoría
                                                                        o archivos se determinan, se documentan, se
                                                                        implementan y se revisan en conformidad con la
                                                                        política.</td>
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
                                                                <tr class="spacer"></tr>
                                                                <tr class="tr-shadow">
                                                                    <td>
                                                                        <label class="au-checkbox">
                                                                            <input type="checkbox">
                                                                            <span class="au-checkmark"></span>
                                                                        </label>
                                                                    </td>

                                                                    <td>PROTEGER (PR)</td>
                                                                    <td>
                                                                        <span class="block-email">Tecnología de protección
                                                                            (PR.PT)</span>
                                                                    </td>
                                                                    <td class="desc">PR.PT-2: Los medios extraíbles
                                                                        están protegidos y su uso se encuentra restringido
                                                                        de acuerdo con la política.</td>

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
                                                                <tr class="spacer"></tr>
                                                                <tr class="tr-shadow"></tr>




                                                                <tr class="tr-shadow">
                                                                    <td>
                                                                        <label class="au-checkbox">
                                                                            <input type="checkbox">
                                                                            <span class="au-checkmark"></span>
                                                                        </label>
                                                                    </td>
                                                                    <td>PROTEGER (PR)</td>
                                                                    <td>
                                                                        <span class="block-email">Tecnología de protección
                                                                            (PR.PT)</span>
                                                                    </td>
                                                                    <td class="desc">PR.PT-3: Se incorpora el principio
                                                                        de menor funcionalidad mediante la configuración de
                                                                        los sistemas para proporcionar solo las capacidades
                                                                        esenciales.</td>
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
                                                                <tr class="spacer"></tr>
                                                                <tr class="tr-shadow">
                                                                    <td>
                                                                        <label class="au-checkbox">
                                                                            <input type="checkbox">
                                                                            <span class="au-checkmark"></span>
                                                                        </label>
                                                                    </td>
                                                                    <td>PROTEGER (PR)</td>
                                                                    <td>
                                                                        <span class="block-email">Tecnología de protección
                                                                            (PR.PT)</span>
                                                                    </td>
                                                                    <td class="desc">PR.PT-4: Las redes de
                                                                        comunicaciones y control están protegidas.</td>
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
                                                                <tr class="spacer"></tr>
                                                                <tr class="tr-shadow">
                                                                    <td>
                                                                        <label class="au-checkbox">
                                                                            <input type="checkbox">
                                                                            <span class="au-checkmark"></span>
                                                                        </label>
                                                                    </td>
                                                                    <td>PROTEGER (PR)</td>
                                                                    <td>
                                                                        <span class="block-email">Tecnología de protección
                                                                            (PR.PT)</span>
                                                                    </td>
                                                                    <td class="desc">PR.PT-5: Se implementan mecanismos
                                                                        (por ejemplo, a prueba de fallas, equilibrio de
                                                                        carga, cambio en caliente o “hot swap”) para lograr
                                                                        los requisitos de resiliencia en situaciones
                                                                        normales y adversas.</td>
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


                                                    <!-- END DATA TABLE -->
                                                </div>
                                            </div>
                                            <div class="row m-t-30">
                                                <div class="col-md-12">

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endsection
