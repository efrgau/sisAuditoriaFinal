<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('valEvaluationId') }}
            {{ Form::text('valEvaluationId', $evaluation->valEvaluationId, ['class' => 'form-control' . ($errors->has('valEvaluationId') ? ' is-invalid' : ''), 'placeholder' => 'Valevaluationid']) }}
            {!! $errors->first('valEvaluationId', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('value') }}
            {{ Form::text('value', $evaluation->value, ['class' => 'form-control' . ($errors->has('value') ? ' is-invalid' : ''), 'placeholder' => 'Value']) }}
            {!! $errors->first('value', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>