<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group row">
            <div class="col-8">
                {{ Form::label('name', 'Nombres y apellidos') }}
                {{ Form::text('name', $user->name, ['class' => 'form-control' . ($errors->has('name') ? 'is-invalid' : ''), 'placeholder' => 'Digite nombre y apellido']) }}
                {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-8">
                {{ Form::label('email', 'Correo electrónico') }}
                {{ Form::text('email', $user->email, ['class' => 'form-control' . ($errors->has('email') ? 'is-invalid' : ''), 'placeholder' => 'Digite su correo electrónico']) }}
                {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-8">
                {{ Form::label('identification', 'No de identificación') }}
                {{ Form::number('identification', $user->identification, ['class' => 'form-control' . ($errors->has('identification') ? 'is-invalid' : ''), 'placeholder' => 'Digite su número de identificación']) }}
                {!! $errors->first('identification', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="col-8">
            <div class="form-group row">
                {{ Form::label('celular', 'Celular') }}
                {{ Form::number('celular', $user->celular, ['class' => 'form-control' . ($errors->has('celular') ? 'is-invalid' : ''), 'placeholder' => 'Digite su número de teléfono']) }}
                {!! $errors->first('celular', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="col-8">
            <div class="form-group row">
                <label for="password">Contraseña:</label>
                <input type="password" name="password" class="au-input au-input--full" value="{{ old('password') }}">
            </div>

        </div>
        <div class="col-8">
            <div class="form-group row">
                <label for="password">Confirmar contraseña:</label>
                <input type="password" name="password_confirmation" class="au-input au-input--full"
                    value="{{ old('password_confirmation') }}">
            </div>
        </div>
        <div class="col-8">
            <div class="form-group row">
                {{ Form::label('rol', 'Seleccione el rol a asignar') }}
                {{ Form::select('rol', $roles, null, ['class' => 'form-control' . ($errors->has('rol') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione...']) }}
                {!! $errors->first('rol', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
    </div>
</div>
<div class="box-footer mt20">
    <button type="submit" class="btn btn-primary">{{ __('Crear usuario') }}</button>
    <div class="float-right">
        <a class="btn btn-danger" href="{{ url('/listaUsuarios') }}">
            {{ __('Cancelar') }}</a>
    </div>
</div>
</div>
