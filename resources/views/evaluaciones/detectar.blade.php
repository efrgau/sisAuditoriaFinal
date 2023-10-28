@extends('layout.app-master')

@section('tittle')
    Factor Detectar
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
                                            <h4>ISO 27032 -> DETECTAR </h4>
                                    </tr>
                                </div>

                                <div class="card-body">
                                    <div class="default-tab">

                                        <nav>

                                            <div class="nav nav-pills mb-3" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                                    href="#nav-home" role="tab" aria-controls="nav-home"
                                                    aria-selected="true">Anomalías y Eventos (DE.AE)</a>
                                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                                    href="#nav-profile" role="tab" aria-controls="nav-profile"
                                                    aria-selected="false">Monitoreo Continuo de la Seguridad (DE.CM)</a>
                                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                                    href="#nav-contact" role="tab" aria-controls="nav-contact"
                                                    aria-selected="false">Procesos de Detección (DE.DP)</a>

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
                                                                                <td> DETECTAR (DE) </td>
                                                                                <td>
                                                                                    <span class="block-email">Anomalías y
                                                                                        Eventos (DE.AE)</span>
                                                                                </td>
                                                                                <td class="desc">DE.AE-1: Se establece y
                                                                                    se gestiona una base de referencia para
                                                                                    operaciones de red y flujos de datos
                                                                                    esperados para</td>
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

                                                                                <td>DETECTAR (DE)</td>
                                                                                <td>
                                                                                    <span class="block-email">Anomalías y
                                                                                        Eventos (DE.AE)</span>
                                                                                </td>
                                                                                <td class="desc">DE.AE-2: Se analizan los
                                                                                    eventos detectados para comprender los
                                                                                    objetivos y métodos de ataque.</td>

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
                                                                                <td>DETECTAR (DE)</td>
                                                                                <td>
                                                                                    <span class="block-email">Anomalías y
                                                                                        Eventos (DE.AE)</span>
                                                                                </td>
                                                                                <td class="desc">DE.AE-3: Cos datos de
                                                                                    los eventos se recopilan y se
                                                                                    correlacionan de múltiples fuentes y
                                                                                    sensores.</td>
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
                                                                                <td>DETECTAR (DE)</td>
                                                                                <td>
                                                                                    <span class="block-email">Anomalías y
                                                                                        Eventos (DE.AE)</span>
                                                                                </td>
                                                                                <td class="desc">DE.AE-4: Se determina el
                                                                                    impacto de los eventos.</td>
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
                                                                                <td>DETECTAR (DE)</td>
                                                                                <td>
                                                                                    <span class="block-email">Anomalías y
                                                                                        Eventos (DE.AE)</span>
                                                                                </td>
                                                                                <td class="desc">DE.AE-5: Se establecen
                                                                                    umbrales de alerta de incidentes.</td>
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
                                                                                    <td>DETECTAR (DE)</td>
                                                                                    <td>
                                                                                        <span class="block-email">Monitoreo
                                                                                            Continuo de la Seguridad
                                                                                            (DE.CM)</span>
                                                                                    </td>
                                                                                    <td class="desc">DE.CM-1: Se
                                                                                        monitorea la red para detectar
                                                                                        posibles eventos de seguridad
                                                                                        cibernética.</td>
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

                                                                                    <td>DETECTAR (DE)</td>
                                                                                    <td>
                                                                                        <span class="block-email">Monitoreo
                                                                                            Continuo de la Seguridad
                                                                                            (DE.CM)</span>
                                                                                    </td>
                                                                                    <td class="desc">DE.CM-2: Se
                                                                                        monitorea el entorno físico para
                                                                                        detectar posibles eventos de
                                                                                        seguridad cibernética.</td>

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
                                                                                <tr class="tr-shadow"></tr>




                                                                                <tr class="tr-shadow">
                                                                                    <td>
                                                                                        <label class="au-checkbox">
                                                                                            <input type="checkbox">
                                                                                            <span
                                                                                                class="au-checkmark"></span>
                                                                                        </label>
                                                                                    </td>
                                                                                    <td>DETECTAR (DE)</td>
                                                                                    <td>
                                                                                        <span class="block-email">Monitoreo
                                                                                            Continuo de la Seguridad
                                                                                            (DE.CM)</span>
                                                                                    </td>
                                                                                    <td class="desc">DE.CM-3: Se
                                                                                        monitorea la actividad del personal
                                                                                        para detectar posibles eventos de
                                                                                        seguridad cibernética.</td>
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
                                                                                    <td>DETECTAR (DE)</td>
                                                                                    <td>
                                                                                        <span class="block-email">Monitoreo
                                                                                            Continuo de la Seguridad
                                                                                            (DE.CM)</span>
                                                                                    </td>
                                                                                    <td class="desc">DE.CM-4: Se detecta
                                                                                        el código malicioso.</td>
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


                                                                                    <td>DETECTAR (DE)</td>
                                                                                    <td>
                                                                                        <span class="block-email">Monitoreo
                                                                                            Continuo de la Seguridad
                                                                                            (DE.CM)</span>
                                                                                    </td>
                                                                                    <td class="desc">DE.CM-5: Se detecta
                                                                                        el código móvil no autorizado.</td>
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

                                                                                    <td>DETECTAR (DE)</td>
                                                                                    <td>
                                                                                        <span class="block-email">Monitoreo
                                                                                            Continuo de la Seguridad
                                                                                            (DE.CM)</span>
                                                                                    </td>
                                                                                    <td class="desc">DE.CM-6: Se
                                                                                        monitorea la actividad de los
                                                                                        proveedores de servicios externos
                                                                                        para detectar posibles eventos de
                                                                                        seguridad cibernética.</td>
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

                                                                                    <td>DETECTAR (DE)</td>
                                                                                    <td>
                                                                                        <span class="block-email">Monitoreo
                                                                                            Continuo de la Seguridad
                                                                                            (DE.CM)</span>
                                                                                    </td>
                                                                                    <td class="desc">DE.CM-7: Se realiza
                                                                                        el monitoreo del personal,
                                                                                        conexiones, dispositivos y software
                                                                                        no autorizados.</td>
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


                                                                                    <td>DETECTAR (DE)</td>
                                                                                    <td>
                                                                                        <span class="block-email">Monitoreo
                                                                                            Continuo de la Seguridad
                                                                                            (DE.CM)</span>
                                                                                    </td>
                                                                                    <td class="desc">DE.CM-8: Se realizan
                                                                                        escaneos de vulnerabilidades.</td>
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
                                                                    <td>DETECTAR (DE)</td>
                                                                    <td>
                                                                        <span class="block-email">Procesos de Detección
                                                                            (DE.DP)</span>
                                                                    </td>
                                                                    <td class="desc">DE.DP-1: Los roles y los deberes de
                                                                        detección están bien definidos para asegurar la
                                                                        responsabilidad.</td>
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

                                                                    <td>DETECTAR (DE)</td>
                                                                    <td>
                                                                        <span class="block-email">Procesos de Detección
                                                                            (DE.DP)</span>
                                                                    </td>
                                                                    <td class="desc">DE.DP-2: Las actividades de
                                                                        detección cumplen con todos los requisitos
                                                                        aplicables.</td>

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
                                                                    <td>DETECTAR (DE)</td>
                                                                    <td>
                                                                        <span class="block-email">Procesos de Detección
                                                                            (DE.DP)</span>
                                                                    </td>
                                                                    <td class="desc">DE.DP-3: Se prueban los procesos de
                                                                        detección.</td>
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
                                                                    <td>DETECTAR (DE)</td>
                                                                    <td>
                                                                        <span class="block-email">Procesos de Detección
                                                                            (DE.DP)</span>
                                                                    </td>
                                                                    <td class="desc">DE.DP-4: Se comunica la información
                                                                        de la detección de eventos.</td>
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


                                                                    <td>DETECTAR (DE)</td>
                                                                    <td>
                                                                        <span class="block-email">Procesos de Detección
                                                                            (DE.DP)</span>
                                                                    </td>
                                                                    <td class="desc">DE.DP-5: los procesos de detección
                                                                        se mejoran continuamente.</td>
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
