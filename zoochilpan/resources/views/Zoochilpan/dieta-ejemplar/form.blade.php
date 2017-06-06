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
<div class="form-group {{ $errors->has('fechaCambio') ? 'has-error' : ''}}">
    {!! Form::label('fechaCambio', 'Fecha cambio', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <input type="text" class="form-control" name="fechaCambio" id="fechaCambio">
        {!! $errors->first('fechaCambio', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('causaCambio') ? 'has-error' : ''}}">
    {!! Form::label('causaCambio', 'Causa cambio', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('causaCambio', null, ['class' => 'form-control']) !!}
        {!! $errors->first('causaCambio', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cantidad') ? 'has-error' : ''}}">
    {!! Form::label('cantidad', 'Frecuencia', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('cantidad', null, ['class' => 'form-control']) !!}
        {!! $errors->first('cantidad', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('alimento') ? 'has-error' : ''}}">
    {!! Form::label('alimento', 'Alimento', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('alimento', null, ['class' => 'form-control']) !!}
        {!! $errors->first('alimento', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('horario') ? 'has-error' : ''}}">
    {!! Form::label('horario', 'Horario', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::input('time', 'horario', null, ['class' => 'form-control']) !!}
        {!! $errors->first('horario', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('consideraciones') ? 'has-error' : ''}}">
    {!! Form::label('consideraciones', 'Observaciones', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('consideraciones', null, ['class' => 'form-control']) !!}
        {!! $errors->first('consideraciones', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Registrar', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
<input type="hidden" name="bandera" id="bandera" value="{{$submitButtonText}}">
@section('javascript')
    <script>
        var flag
        flag=$("#bandera").val();
        $(document).ready(function (){
            $('#fechaCambio').datetimepicker({
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
            $("select[name=idAnimal]").change(function () {
                var idAnimal=$(this).val();

                $.ajax({
                    type: 'get',
                    url: '{!! URL::to('cargarVariosEjemplares')!!}',
                    data: {'idAnimal':idAnimal},
                    success: function (data) {
                        console.log('exito colega');
                        console.log(data);
                        $('#marcajeSelect').empty();
                        $("#marcajeSelect").append('<option value="0"> Selecciona Ejemplar </option>');

                        for (var i = 0; i < data.length; i++) {
                            $("#marcajeSelect").append('<option value="' + data[i].marcaje + '">' + data[i].nombrePropio + '</option>');
                        }
                    },
                    error: function () {
                        console.log('hay error')
                    }
                });
            });

            $("select[name=marcajeSelect]").change(function () {
                var marcaje = $(this).val();

                $.ajax({
                    type: 'get',
                    url: '{!! URL::to('cargarDatosEjemplares')!!}',
                    data: {'marcaje': marcaje},
                    success: function (data) {
                        console.log('exito colega22')

                        $("#marcajeEjemplar").val(marcaje);
                        $("#sexo").val('' + data[0].sexo);
                        $("#nombreComun").val('' + data[0].nombreComun);
                        $("#nombreCientifico").val('' + data[0].nombreCientifico);
                    },
                    error: function () {
                        console.log('hay error')
                    }
                })
            });

            if (flag=="Actualizar")  {
                marcaje=$("#marcajeEjemplar").val();
                 $.ajax({
                 type:'get',
                 url:'{!! URL::to('cargarDatosEjemplares')!!}',
                 data:{'marcaje':marcaje},
                 success:function(data){
                 console.log('exito colega')
                 console.log(data)
                 $("#nombreComun").val(data[0].nombreComun)
                 $("#nombreCientifico").val(data[0].nombreCientifico)
                 $("#sexo").val(data[0].sexo)
                 $("#idAnimal").empty().append('<option value="' + data[0].idAnimal+ '">' + data[0].nombreComun+ '</option>');
                 $("#marcajeSelect").empty().append('<option value="' + marcaje+ '">' + data[0].nombrePropio+ '</option>');
                 // $("#idAnimal").append('<option value="' + 2 + '">  cambiar animal</option>');
                     $("#idAnimal").attr("readonly","readonly");
                     $("#marcajeSelect").attr("readonly","readonly");
                 },
                 error:function(){
                 console.log('hay error')
                 }
                 });

                $.ajax({
                    type:'get',
                    url:'{!! URL::to('cargarDatosDietaEjemplar')!!}',
                    data:{'marcajeEjemplar':marcaje},
                    success:function(data){
                        console.log('exito colega')
                        console.log(data)
                        $("#fechaCambio").val(data[0].fechaCambio);
                        // $("#idAnimal").append('<option value="' + 2 + '">  cambiar animal</option>');
                    },
                    error:function(){
                        console.log('hay error')
                    }
                });

            }

        });
    </script>

@endsection