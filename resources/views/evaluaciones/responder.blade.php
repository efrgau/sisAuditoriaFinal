@extends('layout.app-master')

@section('tittle')
    Factor Responder
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
                                            <h4>ISO 27032 -> RESPONDER </h4>
                                    </tr>
                                </div>

                                <div class="card-body">
                                    <div class="default-tab">

                                        <nav>

                                            <div class="nav nav-pills mb-3" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                                    href="#nav-home" role="tab" aria-controls="nav-home"
                                                    aria-selected="true">Planificación de la Respuesta (RS.RP)</a>
                                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                                    href="#nav-profile" role="tab" aria-controls="nav-profile"
                                                    aria-selected="false">Comunicaciones (RS.CO)</a>
                                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                                    href="#nav-contact" role="tab" aria-controls="nav-contact"
                                                    aria-selected="false">Análisis (RS.AN)</a>
                                                <a class="nav-item nav-link" id="nav-contact1-tab" data-toggle="tab"
                                                    href="#nav-contact1" role="tab" aria-controls="nav-contact1"
                                                    aria-selected="false">Mitigación (RS.MI)</a>
                                                <a class="nav-item nav-link" id="nav-contact2-tab" data-toggle="tab"
                                                    href="#nav-contact2" role="tab" aria-controls="nav-contact2"
                                                    aria-selected="false">Mejoras (RS.IM)</a>
                                                <!-- <a class="nav-item nav-link" id="nav-contact3-tab" data-toggle="tab" href="#nav-contact3" role="tab" aria-controls="nav-contact3"
                     aria-selected="false">Gestión del riesgo de suministro (ID.SC)</a>-->
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
                                                                                <td>RESPONDER (RS)</td>
                                                                                <td>
                                                                                    <span class="block-email">Planificación
                                                                                        de la Respuesta (RS.RP)</span>
                                                                                </td>
                                                                                <td class="desc">RS.RP-1: El plan de
                                                                                    respuesta se ejecuta durante o después
                                                                                    de un incidente.</td>
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



                                                <tr class="spacer"></tr>

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

                                                                                <tr class="spacer"></tr>
                                                                                <tr class="tr-shadow">
                                                                                    <td>
                                                                                        <label class="au-checkbox">
                                                                                            <input type="checkbox">
                                                                                            <span
                                                                                                class="au-checkmark"></span>
                                                                                        </label>
                                                                                    </td>

                                                                                    <td>RESPONDER (RS)</td>
                                                                                    <td>
                                                                                        <span
                                                                                            class="block-email">Comunicaciones
                                                                                            (RS.CO)</span>
                                                                                    </td>
                                                                                    <td class="desc">RS.CO-1: El personal
                                                                                        conoce sus roles y el orden de las
                                                                                        operaciones cuando se necesita una
                                                                                        respuesta.</td>
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

                                                                                    <td>RESPONDER (RS)</td>
                                                                                    <td>
                                                                                        <span
                                                                                            class="block-email">Comunicaciones
                                                                                            (RS.CO)</span>
                                                                                    </td>
                                                                                    <td class="desc">RS.CO-2: Los
                                                                                        incidentes se informan de acuerdo
                                                                                        con los criterios establecidos.</td>

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
                                                                                    <td>RESPONDER (RS)</td>
                                                                                    <td>
                                                                                        <span
                                                                                            class="block-email">Comunicaciones
                                                                                            (RS.CO)</span>
                                                                                    </td>
                                                                                    <td class="desc">RS.CO-3: La
                                                                                        información se comparte de acuerdo
                                                                                        con los planes de respuesta.</td>
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
                                                                                    <td>RESPONDER (RS)</td>
                                                                                    <td>
                                                                                        <span
                                                                                            class="block-email">Comunicaciones
                                                                                            (RS.CO)</span>
                                                                                    </td>
                                                                                    <td class="desc">RS.CO-4: La
                                                                                        coordinación con las partes
                                                                                        interesadas se realiza en
                                                                                        consonancia con los planes de
                                                                                        respuesta.</td>
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
                                                                                    <td>RESPONDER (RS)</td>
                                                                                    <td>
                                                                                        <span
                                                                                            class="block-email">Comunicaciones
                                                                                            (RS.CO)</span>
                                                                                    </td>
                                                                                    <td class="desc">RS.CO-5: El
                                                                                        intercambio voluntario de
                                                                                        información se produce con las
                                                                                        partes interesadas externas para
                                                                                        lograr una mayor conciencia
                                                                                        situacional de seguridad
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
                                                                    <td>RESPONDER (RS)</td>
                                                                    <td>
                                                                        <span class="block-email">Análisis (RS.AN)</span>
                                                                    </td>
                                                                    <td class="desc">RS.AN-1: sSe investigan las
                                                                        notificaciones de los sistemas de detección.</td>
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

                                                                    <td>RESPONDER (RS)</td>
                                                                    <td>
                                                                        <span class="block-email">Análisis (RS.AN)</span>
                                                                    </td>
                                                                    <td class="desc">RS.AN-2: Se comprende el impacto del
                                                                        incidente.</td>

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
                                                                    <td>RESPONDER (RS)</td>
                                                                    <td>
                                                                        <span class="block-email">Análisis (RS.AN)</span>
                                                                    </td>
                                                                    <td class="desc">RS.AN-3: Se realizan análisis
                                                                        forenses.</td>
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
                                                                    <td>RESPONDER (RS)</td>
                                                                    <td>
                                                                        <span class="block-email">Análisis (RS.AN)</span>
                                                                    </td>
                                                                    <td class="desc">RS.AN-4: Los incidentes se
                                                                        clasifican de acuerdo con los planes de respuesta.
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
                                                                    <td>RESPONDER (RS)</td>
                                                                    <td>
                                                                        <span class="block-email">Análisis (RS.AN)</span>
                                                                    </td>
                                                                    <td class="desc">RS.AN-5: Se establecen procesos para
                                                                        recibir, analizar y responder a las vulnerabilidades
                                                                        divulgadas a la organización desde fuentes internas
                                                                        y externas (por ejemplo, pruebas internas, boletines
                                                                        de seguridad o investigadores de seguridad).</td>
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
                                                                    <td>RESPONDER (RS)</td>
                                                                    <td>
                                                                        <span class="block-email">Mitigación (RS.MI)</span>
                                                                    </td>
                                                                    <td class="desc">RS.MI-1: Los incidentes son
                                                                        contenidos.</td>
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

                                                                    <td>RESPONDER (RS)</td>
                                                                    <td>
                                                                        <span class="block-email">Mitigación (RS.MI)</span>
                                                                    </td>
                                                                    <td class="desc">RS.MI-2: Los incidentes son
                                                                        mitigados.</td>

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
                                                                    <td>RESPONDER (RS)</td>
                                                                    <td>
                                                                        <span class="block-email">Mitigación (RS.MI)</span>
                                                                    </td>
                                                                    <td class="desc">RS.MI-3: Las vulnerabilidades
                                                                        recientemente identificadas son mitigadas o se
                                                                        documentan como riesgos aceptados.</td>
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
                                                                    <td>RESPONDER (RS)</td>
                                                                    <td>
                                                                        <span class="block-email">Mejoras (RS.IM)</span>
                                                                    </td>
                                                                    <td class="desc">RS.IM-1: Los planes de respuesta
                                                                        incorporan las lecciones aprendidas.</td>
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

                                                                    <td>RESPONDER (RS)</td>
                                                                    <td>
                                                                        <span class="block-email">Mejoras (RS.IM)</span>
                                                                    </td>
                                                                    <td class="desc">RS.IM-2: Se actualizan las
                                                                        estrategias de respuesta.</td>

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
