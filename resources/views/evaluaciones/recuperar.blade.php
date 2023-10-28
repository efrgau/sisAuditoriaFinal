@extends('layout.app-master')

@section('tittle')
    Factor Recuperar
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
                                            <h4>ISO 27032 -> RECUPERAR </h4>
                                    </tr>
                                </div>

                                <div class="card-body">
                                    <div class="default-tab">

                                        <nav>

                                            <div class="nav nav-pills mb-3" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                                    href="#nav-home" role="tab" aria-controls="nav-home"
                                                    aria-selected="true">Planificación de la recuperación (RC.RP)</a>
                                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                                    href="#nav-profile" role="tab" aria-controls="nav-profile"
                                                    aria-selected="false">Mejoras (RC.IM)</a>
                                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                                    href="#nav-contact" role="tab" aria-controls="nav-contact"
                                                    aria-selected="false">Comunicaciones (RC.CO)</a>

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
                                                                                <td>RECUPERAR (RC)</td>
                                                                                <td>
                                                                                    <span class="block-email">Planificación
                                                                                        de la recuperación (RC.RP)</span>
                                                                                </td>
                                                                                <td class="desc">RC.RP-1: El plan de
                                                                                    recuperación se ejecuta durante o
                                                                                    después de un incidente de seguridad
                                                                                    cibernética.</td>
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


                                                                                <!-- <td>IDENTIFICAR ID</td>
                                                    <td>
                                                        <span class="block-email">Gestión de activos (ID.AM)</span>
                                                    </td>
                                                    <td class="desc">ID.AM-2: Las plataformas de software y las aplicaciones dentro de la organización están inventariadas.</td>
                                                    
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
                                                    <td>IDENTIFICAR ID</td>
                                                    <td>
                                                        <span class="block-email">Gestión de activos (ID.AM)</span>
                                                    </td>
                                                    <td class="desc">ID.AM-3: La comunicación organizacional y los flujos de datos están mapeados.</td>
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
                                                        <span class="block-email">Gestión de activos (ID.AM)</span>
                                                    </td>
                                                    <td class="desc">ID.AM-4: Los sistemas de información externos están catalogados.</td>
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
                                                        <span class="block-email">Gestión de activos (ID.AM)</span>
                                                    </td>
                                                    <td class="desc">ID.AM-5: Los recursos (por ejemplo, hardware, dispositivos, datos, tiempo, personal y software) se priorizan en función de su clasificación, criticidad y valor comercial.</td>
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
                                                        <span class="block-email">Gestión de activos (ID.AM)</span>
                                                    </td>
                                                    <td class="desc">ID.AM-6: Los roles y las responsabilidades de la seguridad cibernética para toda la fuerza de trabajo y terceros interesados</td>
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
                                                            
                                                        </div>-->
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
                                                                                    <td>RECUPERAR (RC)</td>
                                                                                    <td>
                                                                                        <span class="block-email">Mejoras
                                                                                            (RC.IM)</span>
                                                                                    </td>
                                                                                    <td class="desc">RC.IM-1: Los planes
                                                                                        de recuperación incorporan las
                                                                                        lecciones aprendidas.</td>
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

                                                                                    <td>RECUPERAR (RC)</td>
                                                                                    <td>
                                                                                        <span class="block-email">Mejoras
                                                                                            (RC.IM)</span>
                                                                                    </td>
                                                                                    <td class="desc">RC.IM-2: Se
                                                                                        actualizan las estrategias de
                                                                                        recuperación.</td>

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
                                                                                    <!--
                                                    <td>IDENTIFICAR ID</td>
                                                    <td>
                                                        <span class="block-email">Entorno empresarial (ID.BE)</span>
                                                    </td>
                                                    <td class="desc">ID.BE-3: Se establecen y se comunican las prioridades para la misión, los objetivos y las actividades de la organización.</td>
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
                                                </tr>

                                                <tr class="tr-shadow">
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>-->
                                                                                    <!--<td>IDENTIFICAR ID</td>
                                                    <td>
                                                        <span class="block-email">Entorno empresarial (ID.BE)</span>
                                                    </td>
                                                    <td class="desc">ID.BE-4: Se establecen las dependencias y funciones fundamentales para la entrega de servicios críticos.</td>
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
                                                        <span class="block-email">Entorno empresarial (ID.BE)</span>
                                                    </td>
                                                    <td class="desc">ID.BE-5: Los requisitos de resiliencia para respaldar la entrega de servicios críticos se establecen para todos los estados operativos (p. ej. bajo coacción o ataque, durante la recuperación y operaciones normales).</td>
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
                                                    </td> -->
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
                                                                    <td>IDENTIFICAR ID</td>
                                                                    <td>
                                                                        <span class="block-email">Gobernanza (ID.GV)</span>
                                                                    </td>
                                                                    <td class="desc">ID.GV-1: Se establece y se comunica
                                                                        la política de seguridad cibernética organizacional.
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
                                                                <tr class="spacer"></tr>
                                                                <tr class="tr-shadow">
                                                                    <td>
                                                                        <label class="au-checkbox">
                                                                            <input type="checkbox">
                                                                            <span class="au-checkmark"></span>
                                                                        </label>
                                                                    </td>

                                                                    <td>IDENTIFICAR ID</td>
                                                                    <td>
                                                                        <span class="block-email">Gobernanza (ID.GV)</span>
                                                                    </td>
                                                                    <td class="desc">ID.GV-2: Los roles y las
                                                                        responsabilidades de seguridad cibernética están
                                                                        coordinados y alineados con roles internos y socios
                                                                        externos.</td>

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
                                                                    <td>IDENTIFICAR ID</td>
                                                                    <td>
                                                                        <span class="block-email">Gobernanza (ID.GV)</span>
                                                                    </td>
                                                                    <td class="desc">ID.GV-3: Se comprenden y se
                                                                        gestionan los requisitos legales y regulatorios con
                                                                        respecto a la seguridad cibernética, incluidas las
                                                                        obligaciones de privacidad y libertades civiles.
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
                                                                    <td>IDENTIFICAR ID</td>
                                                                    <td>
                                                                        <span class="block-email">Gobernanza (ID.GV)</span>
                                                                    </td>
                                                                    <td class="desc">ID.GV-4: Los procesos de gobernanza
                                                                        y gestión de riesgos abordan los riesgos de
                                                                        seguridad cibernética.</td>
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
                                                                    <td>IDENTIFICAR ID</td>
                                                                    <td>
                                                                        <span class="block-email">Evaluación de riesgos
                                                                            (ID.RA)</span>
                                                                    </td>
                                                                    <td class="desc">ID.RA-1: Se identifican y se
                                                                        documentan las vulnerabilidades de los activos.</td>
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

                                                                    <td>IDENTIFICAR ID</td>
                                                                    <td>
                                                                        <span class="block-email">Evaluación de riesgos
                                                                            (ID.RA)</span>
                                                                    </td>
                                                                    <td class="desc">ID.RA-2: La inteligencia de amenazas
                                                                        cibernéticas se recibe de foros y fuentes de
                                                                        intercambio de información.</td>

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
                                                                    <td>IDENTIFICAR ID</td>
                                                                    <td>
                                                                        <span class="block-email">Evaluación de riesgos
                                                                            (ID.RA)</span>
                                                                    </td>
                                                                    <td class="desc">ID.RA-3: Se identifican y se
                                                                        documentan las amenazas, tanto internas como
                                                                        externas.</td>
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
                                                                    <td>IDENTIFICAR ID</td>
                                                                    <td>
                                                                        <span class="block-email">Evaluación de riesgos
                                                                            (ID.RA)</span>
                                                                    </td>
                                                                    <td class="desc">ID.RA-4: Se identifican los impactos
                                                                        y las probabilidades del negocio.</td>
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
                                                                    <td>IDENTIFICAR ID</td>
                                                                    <td>
                                                                        <span class="block-email">Evaluación de riesgos
                                                                            (ID.RA)</span>
                                                                    </td>
                                                                    <td class="desc">ID.RA-5: Se utilizan las amenazas,
                                                                        las vulnerabilidades, las probabilidades y los
                                                                        impactos para determinar el riesgo.</td>
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
                                                                    <td>IDENTIFICAR ID</td>
                                                                    <td>
                                                                        <span class="block-email">Evaluación de riesgos
                                                                            (ID.RA)</span>
                                                                    </td>
                                                                    <td class="desc">ID.RA-6: Se identifican y priorizan
                                                                        las respuestas al riesgo.</td>
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
                                                                    <td>IDENTIFICAR ID</td>
                                                                    <td>
                                                                        <span class="block-email">Estrategia de gestión de
                                                                            riesgos (ID.RM)</span>
                                                                    </td>
                                                                    <td class="desc">ID.RM-1: Los actores de la
                                                                        organización establecen, gestionan y acuerdan los
                                                                        procesos de gestión de riesgos.</td>
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

                                                                    <td>IDENTIFICAR ID</td>
                                                                    <td>
                                                                        <span class="block-email">Estrategia de gestión de
                                                                            riesgos (ID.RM)</span>
                                                                    </td>
                                                                    <td class="desc">ID.RA-2: La inteligencia de amenazas
                                                                        cibernéticas se recibe de foros y fuentes de
                                                                        intercambio de información.</td>

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
                                                                    <td>IDENTIFICAR ID</td>
                                                                    <td>
                                                                        <span class="block-email">Estrategia de gestión de
                                                                            riesgos (ID.RM)</span>
                                                                    </td>
                                                                    <td class="desc">ID.RA-3: Se identifican y se
                                                                        documentan las amenazas, tanto internas como
                                                                        externas.</td>
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
                                                                    <td>IDENTIFICAR ID</td>
                                                                    <td>
                                                                        <span class="block-email">Gestión del riesgo de la
                                                                            cadena de suministro (ID.SC)</span>
                                                                    </td>
                                                                    <td class="desc">ID.SC-1: Los actores de la
                                                                        organización identifican, establecen, evalúan,
                                                                        gestionan y acuerdan los procesos de gestión del
                                                                        riesgo de la cadena de suministro cibernética.</td>
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

                                                                    <td>IDENTIFICAR ID</td>
                                                                    <td>
                                                                        <span class="block-email">Gestión del riesgo de la
                                                                            cadena de suministro (ID.SC)</span>
                                                                    </td>
                                                                    <td class="desc"> ID.SC-2: Los proveedores y socios
                                                                        externos de los sistemas de información, componentes
                                                                        y servicios se identifican, se priorizan y se
                                                                        evalúan mediante un proceso de evaluación de riesgos
                                                                        de la cadena de suministro cibernético.</td>

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
                                                                    <td>IDENTIFICAR ID</td>
                                                                    <td>
                                                                        <span class="block-email">Gestión del riesgo de la
                                                                            cadena de suministro (ID.SC)</span>
                                                                    </td>
                                                                    <td class="desc">ID.SC-3: Los contratos con
                                                                        proveedores y socios externos se utilizan para
                                                                        implementar medidas apropiadas diseñadas para
                                                                        cumplir con los objetivos del programa de seguridad
                                                                        cibernética de una organización y el plan de gestión
                                                                        de riesgos de la cadena de suministro cibernético.
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
                                                                    <td>IDENTIFICAR ID</td>
                                                                    <td>
                                                                        <span class="block-email">Gestión del riesgo de la
                                                                            cadena de suministro (ID.SC)</span>
                                                                    </td>
                                                                    <td class="desc">ID.SC-4: Los proveedores y los
                                                                        socios externos se evalúan de forma rutinaria
                                                                        mediante auditorías, resultados de pruebas u otras
                                                                        formas de evaluación para confirmar que cumplen con
                                                                        sus obligaciones contractuales.</td>
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
                                                                    <td>IDENTIFICAR ID</td>
                                                                    <td>
                                                                        <span class="block-email">Gestión del riesgo de la
                                                                            cadena de suministro (ID.SC)</span>
                                                                    </td>
                                                                    <td class="desc">ID.SC-5: Las pruebas y la
                                                                        planificación de respuesta y recuperación se llevan
                                                                        a cabo con proveedores.</td>
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
