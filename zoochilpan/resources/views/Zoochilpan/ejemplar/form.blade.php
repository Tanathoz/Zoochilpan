<div class="form-group">

    {!! Form::label('idAnimal', 'Animal', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select ('idAnimal',['placeholder'=>'Selecciona animal'],null,['id'=>'idAnimal','class'=>'form-control']) !!}

    </div>
</div>
<div class="form-group">

    {!! Form::label('nombreCientifico' ,'Nombre Cientifico', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nombreCientifico',null,['class'=>'form-control ','disabled','placeholder'=>'Pathera onca', 'id'=>'nombreCientifico']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('nombreComun', 'Nombre Común', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nombreComun',null,['class'=>'form-control','disabled','placeholder'=>'Jaguar','id'=>'nombreComun']) !!}
    </div>
</div>

<div class="form-group">

    {!! Form::label('marcaje' ,'Marcaje', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('marcaje',null,['class'=>'form-control ','placeholder'=>'Chip Avid16-002', 'id'=>'marcaje','required' => 'required']) !!}
    </div>
</div>


<div class="form-group {{ $errors->has('fechaNacimiento') ? 'has-error' : ''}}">
    {!! Form::label('fechaNacimiento', 'Fecha de nacimiento', ['class' => 'col-md-4  control-label']) !!}
    <div  class="col-md-6">
        <input type="text" class="form-control" required="required" name="fechaNacimiento" readonly id="fechaNacimiento">
        {!! $errors->first('fechaNacimiento', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('fechaIngreso') ? 'has-error' : ''}}">
    {!! Form::label('fechaAlta', 'fecha de Alta', ['class' => 'col-md-4  control-label']) !!}
    <div class="col-md-6">
        <input type="text" class="form-control" readonly required="required" name="fechaAlta" id="fechaAlta">

    </div>

</div>

<div class="form-group {{ $errors->has('sexo') ? 'has-error' : ''}}">
    {!! Form::label('sexo', 'Sexo', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">

        {!! Form::radio('sexo', 'M', ['class' => 'form-control']) !!}
        {!! Form::label('Macho', 'Macho', ['class' => ' control-label']) !!}
        {!! Form::radio('sexo', 'H', ['class' => 'form-control']) !!}
        {!! Form::label('Hembra', 'Hembra', ['class' => 'control-label']) !!}
        {!! $errors->first('sexo', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group ">
    {!! Form::label('nombrePropio', 'Nombre propio', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nombrePropio', null, ['class' => 'form-control','required' => 'required']) !!}
        {!! $errors->first('nombrePropio', '<p class="help-block">:message</p>') !!}
    </div>

</div>

    <input type="hidden" name="bandera" id="bandera" value="{{$ButtonText}}">




<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($ButtonText) ? $ButtonText : 'Registrar', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
@section('javascript')
    <script>
        $(document).ready(function (){
            $('#fechaAlta').datetimepicker({
                format: 'YYYY-MM-DD'
            });
            $('#fechaNacimiento').datetimepicker({
                format: 'YYYY-MM-DD'
            });
            var flag
            flag=$("#bandera").val();
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
                var id = $(this).val();
                $.ajax({
                    type: 'get',
                    url: '{!! URL::to('cargarDatosAnimales')!!}',
                    data: {'id': id},
                    success: function (data) {
                        console.log('exito colega22')
                        console.log(data)
                        $("#nombreComun").val('' + data[0].nombreComun);
                        $("#nombreCientifico").val('' + data[0].nombreCientifico);
                    },
                    error: function () {
                        console.log('hay error')
                    }
                })
            });
            if (flag=="Actualizar")  {
                var con=1;
                //    $("select[name=idAnimal]").click(function () {
                var marcaje
                marcaje=$("#marcaje").val();

                $.ajax({
                    type:'get',
                    url:'{!! URL::to('cargarDatosEjemplares')!!}',
                    data:{'marcaje':marcaje},
                    success:function(data){
                        console.log('exito colega')
                        console.log(data)
                        $("#idAnimal").empty().append('<option value="' + data[0].idAnimal+ '">' + data[0].nombreComun+ '</option>');
                        $("#fechaNacimiento").val(data[0].fechaNacimiento)
                        $("#fechaAlta").val(data[0].fechaAlta)
                        $("#nombreComun").val(data[0].nombreComun)
                        $("#nombreCientifico").val(data[0].especie)
                        // $("#idAnimal").append('<option value="' + 2 + '">  cambiar animal</option>');
                    },
                    error:function(){
                        console.log('hay error')
                    }
                })
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
                    $.ajax({
                        type: 'get',
                        url: '{!! URL::to('cargarDatosAnimales')!!}',
                        data: {'id': id},
                        success: function (data) {
                            console.log('exito colega22')
                            console.log(data)
                            $("#nombreComun").val('' + data[0].nombreComun);
                            $("#nombreCientifico").val('' + data[0].nombreCientifico);
                        },
                        error: function () {
                            console.log('hay error')
                        }
                    })
                    // alert("valor"+id)
                });
            }
        });
    </script>
@endsection