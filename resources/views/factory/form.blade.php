<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('userId', 'Usuario supervisor:') }}
            {{ Form::select('userId', $users, null, ['class' => 'form-control' . ($errors->has('userId') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione Supervisor']) }}


            {!! $errors->first('userId', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NombreEmpresa', 'Escriba el nombre de la empresa:') }}
            {{ Form::text('NombreEmpresa', $factory->NombreEmpresa, ['class' => 'form-control' . ($errors->has('NombreEmpresa') ? ' is-invalid' : ''), 'placeholder' => 'Nombre de empresa']) }}
            {!! $errors->first('NombreEmpresa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FechaCreacionEmpresa', 'Seleccione la fecha de creación de la empresa:') }}
            {{ Form::text('FechaCreacionEmpresa', $factory->FechaCreacionEmpresa, ['class' => 'form-control datepicker' . ($errors->has('FechaCreacionEmpresa') ? ' is-invalid' : ''), 'placeholder' => 'DD/MM/AAAA']) }}
            {!! $errors->first('FechaCreacionEmpresa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Escribe el nombre del representante legal: ') }}
            {{ Form::text('NombreRepresentanteLegal', $factory->NombreRepresentanteLegal, ['class' => 'form-control' . ($errors->has('NombreRepresentanteLegal') ? ' is-invalid' : ''), 'placeholder' => 'Nombre representante legal']) }}
            {!! $errors->first('NombreRepresentanteLegal', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar Empresa Cliente') }}</button>
    </div>
</div>
