<form method="POST" action="{{ route('evaluations.store') }}" role="form" enctype="multipart/form-data"
    class="evaluacion-form">
    @csrf
    <div class="box box-info padding-1">
        <div class="box-body">

            <div class="form-group">
                {{ Form::label('factoryId', 'Empresa') }}
                {{ Form::select('factoryId', $factory, null, ['class' => 'form-control' . ($errors->has('factoryId') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione...']) }}
                {!! $errors->first('factoryId', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="row">
                @foreach ($categories as $category)
                    <div class="card">
                        <div class="card-header">
                            <h4>ISO 27032 -> {{ Str::upper($category->NombreCategoria) }} </h4>
                        </div>
                        <div class="card-body">
                            <div class="default-tab">
                                @foreach ($category->subcategories as $subcategory)
                                    <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="{{ $subcategory->abrev }}"
                                            role="tabpanel" aria-labelledby="{{ $subcategory->abrev }}">
                                            <div class="table-responsive table-responsive-data2">
                                                <div class="card">
                                                    <div class="card-header">
                                                        {{ $subcategory->detail }} ({{ $subcategory->abrev }})
                                                    </div>
                                                    <div class="card-body">
                                                        <table class="table table-data2">
                                                            <tr class="spacer"></tr>
                                                            <thead>
                                                                <tr>
                                                                    <th>Nombre</th>
                                                                    <th>Categoria</th>
                                                                    <th>Subcategoria</th>
                                                                    <th>Evaluacion</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($subcategory->valevaluations as $valevaluation)
                                                                    <tr class="tr-shadow evaluacion-row"
                                                                        data-id="{{ $valevaluation->id }}">

                                                                        <input type="hidden" name="category"
                                                                            value="{{ $category->NombreCategoria }}">
                                                                        <input type="hidden" name="subcategory"
                                                                            value="{{ $subcategory->detail }} ({{ $subcategory->abrev }})">
                                                                        <input type="hidden" name="evaluacion"
                                                                            value="{{ $valevaluation->nombreValorcat }}">

                                                                        <td>{{ $category->NombreCategoria }}</td>
                                                                        <td class="category">{{ $subcategory->detail }}
                                                                            ({{ $subcategory->abrev }})
                                                                        </td>
                                                                        <td class="evaluacion">
                                                                            {{ $valevaluation->nombreValorcat }}</td>
                                                                        <td>
                                                                            <div
                                                                                class="rs-select2--light rs-select2--md">
                                                                                <select class="js-select2"
                                                                                    name="property">
                                                                                    <option selected="selected">
                                                                                        Rango
                                                                                    </option>
                                                                                    <option value="">0</option>
                                                                                    <option value="">1</option>
                                                                                    <option value="">2</option>
                                                                                    <option value="">3</option>
                                                                                    <option value="">4</option>
                                                                                </select>
                                                                                <div class="dropDownSelect2">
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar Evaluación') }}</button>
    </div>
    </div>
</form>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.evaluacion-form').submit(function(e) {
            $('.evaluacion-row').each(function() {
                var row = $(this);

                // Recopila los datos de la fila actual
                var category = row.find('input[name="category"]').val();
                var subcategory = row.find('input[name="subcategory"]').val();
                var evaluacion = row.find('input[name="evaluacion"]').val();
                var property = row.find('select[name="property"]').val();

                console.log(row.find('input[name="category"]').val(););

                // Crea un objeto de datos para enviar al servidor
                var formData = {
                    category: category,
                    subcategory: subcategory,
                    evaluacion: evaluacion,
                    property: property
                };
                console(formData);
                console(category);

                $.ajax({
                    type: 'POST',
                    url: '{{ route('evaluations.store') }}',
                    data: formData,
                    success: function(response) {
                        // Realiza acciones después de enviar el formulario
                        console.log('Evaluación guardada con éxito');
                        row.hide(); // Oculta la fila
                    },
                    error: function(error) {
                        console.error('Error al guardar la evaluación');
                    }
                });
            });
        });
    });
</script>
