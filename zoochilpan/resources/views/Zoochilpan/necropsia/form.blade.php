
{!! Form::text('id',null,['class'=>'form-control hidden ','readonly','placeholder'=>'Chip', 'id'=>'id']) !!}
<div class="form-group {{ $errors->has('lugar') ? 'has-error' : ''}}">
    {!! Form::label('lugar', 'Lugar', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('lugar', 'Zoológico Zoochilpan', ['class' => 'form-control','required' => 'required']) !!}
        {!! $errors->first('lugar', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('fecha') ? 'has-error' : ''}}">
    {!! Form::label('fecha', 'Fecha', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <input type="text" required="required" readonly class="form-control" name="fecha" id="fecha">
        {!! $errors->first('fecha', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('hora') ? 'has-error' : ''}}">
    {!! Form::label('hora', 'Hora', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::input('time', 'hora', null, ['class' => 'form-control','required' => 'required']) !!}
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
        {!! Form::textarea('antecedentes', null, ['class' => 'form-control','required' => 'required']) !!}
        {!! $errors->first('antecedentes', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('estadoFisico') ? 'has-error' : ''}}">
    {!! Form::label('estadoFisico', 'Estado físico gral', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('estadoFisico', null, ['class' => 'form-control','required' => 'required']) !!}
        {!! $errors->first('estadoFisico', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('lesiones') ? 'has-error' : ''}}">
    {!! Form::label('lesiones', 'Lesiones', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('lesiones', null, ['class' => 'form-control','required' => 'required']) !!}
        {!! $errors->first('lesiones', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('toracica') ? 'has-error' : ''}}">
    {!! Form::label('toracica', 'Cavidad Toracica', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('toracica', null, ['class' => 'form-control','required' => 'required']) !!}
        {!! $errors->first('toracica', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('abdominal') ? 'has-error' : ''}}">
    {!! Form::label('abdominal', 'Cavidad Abdominal', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('abdominal', null, ['class' => 'form-control','required' => 'required']) !!}
        {!! $errors->first('abdominal', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('muestras') ? 'has-error' : ''}}">
    {!! Form::label('muestras', 'Muestras', ['class' => 'col-md-4 control-label','required' => 'required']) !!}
    <div class="col-md-6">
        {!! Form::textarea('muestras', null, ['class' => 'form-control']) !!}
        {!! $errors->first('muestras', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('diagnosticoMuerte') ? 'has-error' : ''}}">
    {!! Form::label('diagnosticoMuerte', 'Diagnostico muerte', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('diagnosticoMuerte', null, ['class' => 'form-control','required' => 'required']) !!}
        {!! $errors->first('diagnosticoMuerte', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group ">

    {!! Form::label('idVeterinario', 'Veterinario', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select ('idVeterinario',['placeholder'=>'Selecciona veterinario'],null,['id'=>'idVeterinario','class'=>'form-control']) !!}
        {!! $errors->first('idVeterinario', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group ">

    {!! Form::label('idEncargado', 'Encargado', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select ('idEncargado',['placeholder'=>'Selecciona encargado area veterinaria'],null,['id'=>'idEncargado','class'=>'form-control']) !!}
        {!! $errors->first('idEncargado', '<p class="help-block">:message</p>') !!}
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

            $('#fecha').datetimepicker({
                format: 'YYYY-MM-DD'
            });

            $.validator.addMethod('antecedentes', function(value, element) {
                return this.optional(element) || /^([A-ZÁÉÍÓÚa-zñáéíóú]+[\s]*)+$/.test(value);
            }, "No puede tener caracteres expeciales o numeros")
            $("#formy").validate({
                rules: {
                    antecedentes: {
                        required: true,
                        expNombre: true,
                        minlength: 10,
                        maxlength: 50
                    }
                },
                messages: {
                    antecedentes: {
                        required: "El campo es requerido",
                        expNombre: "El campo puede tener caracteres expeciales o numeros",
                        minlength: "El campo debe tener minino 2 caracteres",
                        maxlength: "El campo debe tener Maximo 30 caracteres"
                    }
                }
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
                url: '{!! URL::to('cargarVeterinarios')!!}',
                data: {},
                success: function (data) {
                    console.log('exito colega')
                    console.log(data)
                    for (var i = 0; i < data.length; i++) {
                        $("#idVeterinario").append('<option value="' + data[i].id + '">' + data[i].nombre +"  " +data[i].apellidoPaterno +"  " +data[i].apellidoMaterno + '</option>');
                        $("#idEncargado").append('<option value="' + data[i].id + '">' + data[i].nombre +"  "+data[i].apellidoPaterno + "  " +data[i].apellidoMaterno +'</option>');
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
                        console.log(data)
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
                var id;
                id = $("#id").val();
                $.ajax({
                    type:'get',
                    url:'{!! URL::to('cargarDatosNecropsia')!!}',
                    data:{'id':id},
                    success:function(data){
                        console.log('las hojas')
                        console.log(data)
                        $("#marcajeSelect").empty().append('<option value="' + data[0].marcajeEjemplar+ '">' + data[0].nombrePropio+ '</option>');
                        $("#fecha").val(data[0].fecha);
                        $("#sexo").val(data[0].sexo);

                        var idV=data[0].idVeterinario;
                        var idE=data[0].idEncargado;
                        var idA=data[0].idAnimal;
                        var marcaje=data[0].marcajeEjemplar;

                        $.ajax({
                            type:'get',
                            url:'{!! URL::to('cargarDatosEjemplares')!!}',
                            data:{'marcaje':marcaje},
                            success:function(data){
                                console.log('exito colega')
                                $("#nombreComun").val(data[0].nombreComun)
                                $("#nombreCientifico").val(data[0].nombreCientifico)
                                $("#idAnimal").empty().append('<option value="' + idA+ '">' + data[0].nombreComun+ '</option>');
                                // $("#idAnimal").append('<option value="' + 2 + '">  cambiar animal</option>');
                            },
                            error:function(){
                                console.log('hay error')
                            }
                        });


                        $.ajax({
                            type: 'get',
                            url: '{!! URL::to('cargarDatosVeterinarios')!!}',
                            data: {'id': idV},
                            success: function (data) {
                                console.log('exito colega22')
                                console.log(data)
                                $("#idVeterinario").empty().append('<option value="' + idV + '">' + data[0].nombre +"  " +data[0].apellidoPaterno +"  " +data[0].apellidoMaterno + '</option>');
                            },
                            error: function () {
                                console.log('hay error')
                            }
                        });
                        $.ajax({
                            type: 'get',
                            url: '{!! URL::to('cargarDatosVeterinarios')!!}',
                            data: {'id': idE},
                            success: function (data) {
                                console.log('exito colega22')
                                console.log(data)
                                $("#idEncargado").empty().append('<option value="' + idE + '">' + data[0].nombre +"  " +data[0].apellidoPaterno +"  " +data[0].apellidoMaterno + '</option>');
                            },
                            error: function () {
                                console.log('hay error')
                            }
                        });
                    },
                    error:function(){
                        console.log('hay error')
                    }
                });
                var con= 1,conV= 1,conE=1;

                $("select[name=idAnimal]").click(function () {
                    var id = $("#idAnimal").val();
                    if (con<=1) {
                        $('#idAnimal').empty();
                    $.ajax({
                        type: 'get',
                        url: '{!! URL::to('cargarAnimales')!!}',
                        data: {},
                        success: function (data) {
                            console.log('exito colega')
                            console.log(data)
                            $("#idAnimal").append('<option value="1"> Seleciona animal</option>');
                            for (var i = 0; i < data.length; i++) {
                                $("#idAnimal").append('<option value="' + data[i].id + '">' + data[i].nombreComun + '</option>');
                            }
                        },
                        error: function () {
                            console.log('hay error')
                        }

                    });
                        con=con+1;
                    }
                    var idAnimal = $("#idAnimal").val();
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
                $("select[name=idVeterinario]").click(function(){
                    var id=$("#idVeterinario").val();
                    if(conV==1) {
                        $('#idVeterinario').empty();
                        $.ajax({
                            type: 'get',
                            url: '{!! URL::to('cargarVeterinarios')!!}',
                            data: {},
                            success: function (data) {
                                console.log('exito colega')
                                console.log(data)
                                for (var i = 0; i < data.length; i++) {
                                    $("#idVeterinario").append('<option value="' + data[i].id + '">' + data[i].nombre +"  " +data[i].apellidoPaterno +"  " +data[i].apellidoMaterno + '</option>');
                                }
                            },
                            error: function () {
                                console.log('hay error')
                            }
                        });
                        conV=2;
                    }


                });
                $("select[name=idEncargado]").click(function(){
                    var id=$("#idEncargado").val();
                    if(conE==1) {
                        $('#idEncargado').empty();
                        $.ajax({
                            type: 'get',
                            url: '{!! URL::to('cargarVeterinarios')!!}',
                            data: {},
                            success: function (data) {
                                console.log('exito colega')
                                console.log(data)
                                for (var i = 0; i < data.length; i++) {
                                    $("#idEncargado").append('<option value="' + data[i].id + '">' + data[i].nombre +"  " +data[i].apellidoPaterno +"  " +data[i].apellidoMaterno + '</option>');
                                }
                            },
                            error: function () {
                                console.log('hay error')
                            }
                        });
                        conE=2;
                    }

                });
            }
        });

    </script>

@endsection