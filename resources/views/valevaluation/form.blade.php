<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombreValorcat') }}
            {{ Form::text('nombreValorcat', $valevaluation->nombreValorcat, ['class' => 'form-control' . ($errors->has('nombreValorcat') ? ' is-invalid' : ''), 'placeholder' => 'Nombrevalorcat']) }}
            {!! $errors->first('nombreValorcat', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('categoryId') }}
            {{ Form::text('categoryId', $valevaluation->categoryId, ['class' => 'form-control' . ($errors->has('categoryId') ? ' is-invalid' : ''), 'placeholder' => 'Categoryid']) }}
            {!! $errors->first('categoryId', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>