<div>
    <div class="form-group">
        {!! Form::label('Animal') !!}
        {!! Form::select ('idAnimal',['placeholder'=>'Selecciona animal'],null,['id'=>'idAnimal','class'=>'form-control']) !!}

    </div>
</div>
<div class="form-group">
    {!! Form::label('Nombre Cientifico') !!}
    {!! Form::text('nombreCientifico',null,['class'=>'form-control ','disabled','placeholder'=>'Pathera onca', 'id'=>'nombreCientifico']) !!}


</div>

<div class="form-group">
    {!! Form::label('Nombre Común') !!}
    {!! Form::text('nombreComún',null,['class'=>'form-control','placeholder'=>'Jaguar','id'=>'nombreComun']) !!}

</div>


<div class="">
    <div class="form-group {{ $errors->has('marcaje') ? 'has-error' : ''}}">
        {!! Form::label('marcaje', 'Marcaje') !!}

        {!! Form::text('marcaje', null, ['id'=>'marcaje','class' => 'form-control']) !!}
        {!! $errors->first('marcaje', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('fechaNacimiento') ? 'has-error' : ''}}">
    {!! Form::label('fechaNacimiento', 'Fecha de nacimiento', ['class' => 'control-label']) !!}
    <div class="form-group">
        <input type="date" name="fechaNacimiento" id="fechaNacimiento">
        {!! $errors->first('fechaNacimiento', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('fechaIngreso') ? 'has-error' : ''}}">


    {!! Form::label('fechaAlta', 'fecha de Alta', ['class' => 'control-label']) !!}
    <div class="form-group">
        <input type="date" name="fechaAlta" id="fechaAlta">

    </div>

</div>
<div class="form-group {{ $errors->has('sexo') ? 'has-error' : ''}}">

    <div class="form-group">
        {!! Form::label('sexo', 'Sexo', ['class' => 'col-md-3 control-label']) !!}
        {!! Form::radio('sexo', 'M', ['class' => 'form-control']) !!}
        {!! Form::label('Macho', 'Macho', ['class' => ' control-label']) !!}
        {!! Form::radio('sexo', 'H', ['class' => 'form-control']) !!}
        {!! Form::label('Hembra', 'Hembra', ['class' => 'control-label']) !!}
        {!! $errors->first('sexo', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('alias') ? 'has-error' : ''}}">
    {!! Form::label('nombrePropio', 'Nombre propio', ['class' => 'control-label']) !!}
    <div class="form-group">
        {!! Form::text('nombrePropio', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nombrePropio', '<p class="help-block">:message</p>') !!}
    </div>



    <input type="hidden" name="bandera" id="bandera" value="{{$ButtonText}}">


</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($ButtonText) ? $ButtonText : 'Registrar', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
@section('javascript')
    <script>
        $(document).ready(function (){
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
            })
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
                alert("hola que hace"+marcaje)
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
                        })
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