<div class="form-group {{ $errors->has('lugar') ? 'has-error' : ''}}">
    {!! Form::label('lugar', 'Lugar', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('lugar', null, ['class' => 'form-control']) !!}
        {!! $errors->first('lugar', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('fecha') ? 'has-error' : ''}}">
    {!! Form::label('fecha', 'Fecha', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <input type="text" class="form-control" name="fecha" id="fecha">
        {!! $errors->first('fecha', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('hora') ? 'has-error' : ''}}">
    {!! Form::label('hora', 'Hora', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::input('time', 'hora', null, ['class' => 'form-control']) !!}
        {!! $errors->first('hora', '<p class="help-block">:message</p>') !!}
    </div>
    </div>
    <div class="form-group">

        {!! Form::label('idAnimal', 'Animal', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
        {!! Form::select ('idAnimal',['placeholder'=>'Selecciona animal'],null,['id'=>'idAnimal','class'=>'form-control']) !!}

     </div>
    </div>
    <div class="form-group {{ $errors->has('lugar') ? 'has-error' : ''}}">

        {!! Form::label('marcajeSelect', 'Ejemplar', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::select ('marcajeSelect',['placeholder'=>'Selecciona ejemplar'],null,['id'=>'marcajeSelect','class'=>'form-control']) !!}
            {!! $errors->first('marcajeSelect', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group">

        {!! Form::label('nombreComun', 'Nombre Común', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('nombreComun',null,['class'=>'form-control','disabled','placeholder'=>'Jaguar','id'=>'nombreComun']) !!}
        </div>
    </div>

    <div class="form-group">

        {!! Form::label('nombreCientifico' ,'Nombre Cientifico', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('nombreCientifico',null,['class'=>'form-control ','disabled','placeholder'=>'Pathera onca', 'id'=>'nombreCientifico']) !!}
        </div>
    </div>
    <div class="form-group">

        {!! Form::label('marcajeEjemplar' ,'Marcaje', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('marcajeEjemplar',null,['class'=>'form-control ','readonly','placeholder'=>'Chip Avid16-002', 'id'=>'marcajeEjemplar']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('sexo' ,'Sexo', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-2">
            {!! Form::text('sexo',null,['class'=>'form-control ','disabled','placeholder'=>'M', 'id'=>'sexo']) !!}
        </div>
    </div>
   <div class="form-group {{ $errors->has('antecedentes') ? 'has-error' : ''}}">
    {!! Form::label('antecedentes', 'Antecedentes', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('antecedentes', null, ['class' => 'form-control']) !!}
        {!! $errors->first('antecedentes', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('diagnosticoMuerte') ? 'has-error' : ''}}">
    {!! Form::label('diagnosticoMuerte', 'Diagnosticomuerte', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('diagnosticoMuerte', null, ['class' => 'form-control']) !!}
        {!! $errors->first('diagnosticoMuerte', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('estadoFisico') ? 'has-error' : ''}}">
    {!! Form::label('estadoFisico', 'Estadofisico', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('estadoFisico', null, ['class' => 'form-control']) !!}
        {!! $errors->first('estadoFisico', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('lesiones') ? 'has-error' : ''}}">
    {!! Form::label('lesiones', 'Lesiones', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('lesiones', null, ['class' => 'form-control']) !!}
        {!! $errors->first('lesiones', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('toracica') ? 'has-error' : ''}}">
    {!! Form::label('toracica', 'Toracica', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('toracica', null, ['class' => 'form-control']) !!}
        {!! $errors->first('toracica', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('abdominal') ? 'has-error' : ''}}">
    {!! Form::label('abdominal', 'Abdominal', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('abdominal', null, ['class' => 'form-control']) !!}
        {!! $errors->first('abdominal', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('muestras') ? 'has-error' : ''}}">
    {!! Form::label('muestras', 'Muestras', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('muestras', null, ['class' => 'form-control']) !!}
        {!! $errors->first('muestras', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Registrar', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
@section('javascript')
    <script>
        $(document).ready(function (){
            $('#fecha').datetimepicker({
                format: 'YYYY-MM-DD'
            });
            $.ajax({
                type: 'get',
                url: '{!! URL::to('cargarAnimales')!!}',
                data: {},
                success: function (data) {
                    console.log('exito colega')
                    console.log(data)
                    for (var i = 0; i < data.length; i++) {
                        $("#idAnimal").append('<option value="' + data[i].id + '">' + data[i].nombreComun + '</option>');
                    }
                },
                error: function () {
                    console.log('hay error')
                }
            });
            $.ajax({
                type: 'get',
                url: '{!! URL::to('cargarEjemplares')!!}',
                data: {},
                success: function (data) {
                    console.log('exito colega')
                    console.log(data)
                    for (var i = 0; i < data.length; i++) {
                        $("#marcajeSelect").append('<option value="' + data[i].marcaje + '">' + data[i].nombrePropio + '</option>');
                    }
                },
                error: function () {
                    console.log('hay error')
                }
            });
        });

    </script>

@endsection