<div class="form-group {{ $errors->has('idFam') ? 'has-error' : ''}}">
    {!! Form::label('idFam', 'Idfam', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('idFam', null, ['class' => 'form-control']) !!}
        {!! $errors->first('idFam', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('idOrden') ? 'has-error' : ''}}">
    {!! Form::label('idOrden', 'Idorden', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('idOrden', null, ['class' => 'form-control']) !!}
        {!! $errors->first('idOrden', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    {!! Form::label('nombre', 'Nombre', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
