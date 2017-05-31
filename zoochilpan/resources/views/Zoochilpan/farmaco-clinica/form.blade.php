<div class="form-group {{ $errors->has('idProfilaxis') ? 'has-error' : ''}}">
    {!! Form::label('idProfilaxis', 'Idprofilaxis', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('idProfilaxis', null, ['class' => 'form-control']) !!}
        {!! $errors->first('idProfilaxis', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('idFarmaco') ? 'has-error' : ''}}">
    {!! Form::label('idFarmaco', 'Idfarmaco', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('idFarmaco', null, ['class' => 'form-control']) !!}
        {!! $errors->first('idFarmaco', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('dosis') ? 'has-error' : ''}}">
    {!! Form::label('dosis', 'Dosis', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('dosis', null, ['class' => 'form-control']) !!}
        {!! $errors->first('dosis', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('frecuencia') ? 'has-error' : ''}}">
    {!! Form::label('frecuencia', 'Frecuencia', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('frecuencia', null, ['class' => 'form-control']) !!}
        {!! $errors->first('frecuencia', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('fechaAplicacion') ? 'has-error' : ''}}">
    {!! Form::label('fechaAplicacion', 'Fechaaplicacion', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::date('fechaAplicacion', null, ['class' => 'form-control']) !!}
        {!! $errors->first('fechaAplicacion', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
