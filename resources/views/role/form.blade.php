<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Name', 'Nombre rol del sistema: ') }}
            {{ Form::text('name', $role->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Ej. cliente o admin']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('guard_name', 'Acceso dispositivo: ') }}
            {{ Form::text('guard_name', $role->guard_name, ['class' => 'form-control' . ($errors->has('guard_name') ? ' is-invalid' : ''), 'placeholder' => 'Ej. web']) }}
            {!! $errors->first('guard_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar nuevo rol') }}</button>
        <div class="float-right">
            <a class="btn btn-danger" href="{{ route('roles.index') }}"> {{ __('Cancelar') }}</a>
        </div>
    </div>
</div>
