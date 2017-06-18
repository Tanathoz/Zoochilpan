<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    {!! Form::label('nombre', 'Nombre', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nombre', null, ['class' => 'form-control','required' => 'required']) !!}
        {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('via') ? 'has-error' : ''}}">
    {!! Form::label('via', 'Via', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('via', null, ['class' => 'form-control','required' => 'required']) !!}
        {!! $errors->first('via', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Registrar', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
