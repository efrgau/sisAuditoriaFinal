<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('NombreCategoria') }}
            {{ Form::text('NombreCategoria', $category->NombreCategoria, ['class' => 'form-control' . ($errors->has('NombreCategoria') ? ' is-invalid' : ''), 'placeholder' => 'Nombrecategoria']) }}
            {!! $errors->first('NombreCategoria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NombreISO') }}
            {{ Form::select('NombreISO', $categoriesList, null, ['class' => 'form-control' . ($errors->has('NombreISO') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione']) }}
            {!! $errors->first('NombreISO', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar nueva categoría') }}</button>
    </div>
</div>
