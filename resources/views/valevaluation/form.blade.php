<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('subcategoryId') }}
            {{ Form::text('subcategoryId', $valevaluation->subcategoryId, ['class' => 'form-control' . ($errors->has('subcategoryId') ? ' is-invalid' : ''), 'placeholder' => 'Subcategoryid']) }}
            {!! $errors->first('subcategoryId', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('abrevalorcat') }}
            {{ Form::text('abrevalorcat', $valevaluation->abrevalorcat, ['class' => 'form-control' . ($errors->has('abrevalorcat') ? ' is-invalid' : ''), 'placeholder' => 'Abrevalorcat']) }}
            {!! $errors->first('abrevalorcat', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombreValorcat') }}
            {{ Form::text('nombreValorcat', $valevaluation->nombreValorcat, ['class' => 'form-control' . ($errors->has('nombreValorcat') ? ' is-invalid' : ''), 'placeholder' => 'Nombrevalorcat']) }}
            {!! $errors->first('nombreValorcat', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <a href="{{ url('/informeEvaluacion') }}" class="btn btn-primary">{{ __('Submit') }}</a>
    </div>
</div>
