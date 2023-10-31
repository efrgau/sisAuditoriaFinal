<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('categoryId', 'Categoría:') }}
            {{ Form::select('categoryId', $category, null, ['class' => 'form-control' . ($errors->has('categoryId') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione...']) }}
            {!! $errors->first('categoryId', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('abrev', 'Abreviatura:') }}
            {{ Form::text('abrev', $subcategory->abrev, ['class' => 'form-control' . ($errors->has('abrev') ? ' is-invalid' : ''), 'placeholder' => 'Referencia ISO']) }}
            {!! $errors->first('abrev', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('detail', 'Descripción de subcategoría:') }}
            {{ Form::text('detail', $subcategory->detail, ['class' => 'form-control' . ($errors->has('detail') ? ' is-invalid' : ''), 'placeholder' => 'Descripción de subcategoría']) }}
            {!! $errors->first('detail', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
