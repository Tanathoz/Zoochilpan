


<div class="form-group {{ $errors->has('lugar') ? 'has-error' : ''}}">
    {!! Form::label('lugar', 'Lugar', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('lugar', null, ['class' => 'form-control']) !!}
        {!! $errors->first('lugar', '<p class="help-block">:message</p>') !!}
    </div>
</div>



<div class="form-group {{ $errors->has('fecha') ? 'has-error' : ''}}">
    {!! Form::label('fecha', 'Fecha', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <input type="date" name="fecha" id="fecha">
       {!! $errors->first('fecha', '<p class="help-block">:message</p>') !!}
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
        {!! Form::text('marcajeEjemplar',null,['class'=>'form-control ','disabled','placeholder'=>'Chip Avid16-002', 'id'=>'marcajeEjemplar']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('sexo' ,'Sexo', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-2">
        {!! Form::text('sexo',null,['class'=>'form-control ','disabled','placeholder'=>'M', 'id'=>'sexo']) !!}
    </div>
</div>

<div class="form-group {{ $errors->has('tratamiento') ? 'has-error' : ''}}">
    {!! Form::label('tratamiento', 'Tratamiento', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('tratamiento', null, ['class' => 'form-control']) !!}
        {!! $errors->first('tratamiento', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('fechaAplicacion') ? 'has-error' : ''}}">
    {!! Form::label('fechaAplicacion', 'Fecha Aplicacion', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <input type="date" name="fechaAplicacion" id="Aplicacion">
        {!! $errors->first('fechaAplicacion', '<p class="help-block">:message</p>') !!}
    </div>
</div>
{!! Form::label('Emergente', 'Agregar farmaco', ['class' => 'col-md-4 control-label']) !!}
<a href="#ventanaFarmaco" class="btn btn-primary btn-sm" name="Emergente" data-toggle="modal"> <span class="glyphicon glyphicon-plus"></span></a>
<div class="table-responsive col-md-15" style="text-align:center;">
    <table id="tblFarmaco" class="table table-borderless" style="align:center">
        <thead>
        <tr>
            <th>IDderrer</th><th>Nombre</th><th>Via</th><th>Dosis</th><th>Frecuencia</th><th>Fecha</th>
        </tr>
        </thead>
        <tbody>
        <td> </td><td> </td><td></td>
        <td></td><td></td><td></td>

        </tbody>
     </table>

    <button id="btnadd" name="btnadd" class="btn btn-primary">Agregar Nuevo</button>
</div>

<div class="form-group {{ $errors->has('observaciones') ? 'has-error' : ''}}">
    {!! Form::label('observaciones', 'Observaciones', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('observaciones', null, ['class' => 'form-control']) !!}
        {!! $errors->first('observaciones', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('comentarios') ? 'has-error' : ''}}">
    {!! Form::label('comentarios', 'Comentarios', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('comentarios', null, ['class' => 'form-control']) !!}
        {!! $errors->first('comentarios', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group ">

    {!! Form::label('idVeterinario', 'Veterinario', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select ('idVeterinario',['placeholder'=>'Selecciona veterinario'],null,['id'=>'idVeterinario','class'=>'form-control']) !!}
        {!! $errors->first('idVeterinario', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('nombreCompleto') ? 'has-error' : ''}}">
    {!! Form::label('nombreCompleto', 'Nombre Veterinario', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-8">
        {!! Form::text('nombreCompleto', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nombreCompleto', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group ">

    {!! Form::label('idEncargado', 'Encargado', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select ('idEncargado',['placeholder'=>'Selecciona encargado area veterinaria'],null,['id'=>'idEncargado','class'=>'form-control']) !!}
        {!! $errors->first('idEncargado', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('nombreArea') ? 'has-error' : ''}}">
    {!! Form::label('nombreArea', 'Nombre Encargado de Aréa', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-8">
        {!! Form::text('nombreArea', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nombreArea', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Registrar', ['class' => 'btn btn-primary']) !!}
    </div>
</div>

    <div class="container">
        <div class="modal fade" id="ventanaFarmaco">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h3 class="modal-title">Datos del fármaco</h3>
                    </div>
                    <!-- contenido de la ventana -->
                    <div class="modal-body">
                        <div class="form-group">
                            {!! Form::label('idFarmaco', 'Farmaco', ['class' => 'col-md-4 control-label']) !!}
                            {!! Form::select ('idFarmaco',['placeholder'=>'Selecciona farmaco'],null,['id'=>'idFarmaco','class'=>'form-control']) !!}

                        </div>
                    </div>

                    <form method="post" id="farmacoInsert">

                        <div class="form-group modal-body {{ $errors->has('nombreFarmaco') ? 'has-error' : ''}}">
                            {!! Form::label('nombreFarmaco', 'Nombre', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-4">
                                {!! Form::text('nombreFarmaco', null, ['class' => 'form-control']) !!}
                                {!! $errors->first('nombreFarmaco', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>

                        <div class="form-group modal-body {{ $errors->has('via') ? 'has-error' : ''}}">
                            {!! Form::label('via', 'Via', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-4">
                                {!! Form::text('via', null, ['class' => 'form-control']) !!}
                                {!! $errors->first('via', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                    <div class="form-group modal-body {{ $errors->has('dosis') ? 'has-error' : ''}}">
                        {!! Form::label('dosis', 'Dosis', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-4">
                            {!! Form::text('dosis', null, ['id'=>'dosis','class' => 'form-control']) !!}
                            {!! $errors->first('dosis', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group modal-body {{ $errors->has('frecuencia') ? 'has-error' : ''}}">
                        {!! Form::label('frecuencia', 'Frecuencia', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-4">
                            {!! Form::text('frecuencia', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('frecuencia', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group modal-body {{ $errors->has('fechaAplicacion') ? 'has-error' : ''}}">
                        {!! Form::label('fechaAplicacion', 'Fecha de Aplicacion', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-4">
                            <input type="date" name="fechaAplicacion" id="fechaAplicacion">

                        </div>
                    </div>
                    </form>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal" >cerrar</button>
                        <button type="button" class="btn btn-success" id="AddFarmaco" name="AddFarmaco" data-dismiss="modal">guardar cambios</button>
                    </div>

                </div>
            </div>
        </div>

@section('javascript')
    <script>
        $(document).ready(function (){
            var flag, dosisFart="";
            flag=$("#bandera").val();


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
            })
            $.ajax({
                type: 'get',
                url: '{!! URL::to('cargarVeterinarios')!!}',
                data: {},
                success: function (data) {
                    console.log('exito colega')
                    console.log(data)
                    for (var i = 0; i < data.length; i++) {
                        $("#idVeterinario").append('<option value="' + data[i].id + '">' + data[i].nombre +"-" +data[i].apellidoPaterno + '</option>');
                        $("#idEncargado").append('<option value="' + data[i].id + '">' + data[i].nombre +"-"+data[i].apellidoPaterno + '</option>');
                    }
                },
                error: function () {
                    console.log('hay error')
                }
            })

            $.ajax({
                type: 'get',
                url: '{!! URL::to('cargarFarmacos')!!}',
                data: {},
                success: function (data) {
                    console.log('exito colega')
                    console.log(data)
                    for (var i = 0; i < data.length; i++) {
                        $("#idFarmaco").append('<option value="' + data[i].id + '">' + data[i].nombre + '</option>');

                    }
                },
                error: function () {
                    console.log('hay error')
                }
            })
            $("select[name=marcajeSelect]").change(function () {
                var marcaje = $(this).val();
                $.ajax({
                    type: 'get',
                    url: '{!! URL::to('cargarDatosEjemplares')!!}',
                    data: {'marcaje': marcaje},
                    success: function (data) {
                        console.log('exito colega22')
                        console.log(data)
                        $("#marcajeEjemplar").val('' + marcaje);
                        $("#sexo").val('' + data[0].sexo);
                        $("#nombreComun").val('' + data[0].nombreComun);
                        $("#nombreCientifico").val('' + data[0].nombreCientifico);
                    },
                    error: function () {
                        console.log('hay error')
                    }
                })
            });


            $("input[id=fechaAplicacion]").change(function(){
                alert($('input[id=fechaAplicacion]').val());
            });


            $("#AddFarmaco").click(function(event){
               var nombreFar= $('input[name=nombreFarmaco]').val();
                dosisFar=$('input[id=dosis]').val();
                var viaFar=$('input[name=via]').val();
                var frecuenciaFar=$('input[id=frecuencia]').val();
                var fechaFar=$('input[id=fechaAplicacion]').val();
                var idFar = $('select[name=idFarmaco]').val();
                $('#tblFarmaco tr:last').after('<tr><td> '+idFar+'</td><td>'+nombreFar+'</td><td>'+viaFar+'</td><td>'+dosisFar+'</td><td>'+frecuenciaFar+'</td><td>'+fechaFar+'</td></tr>');
                event.preventDefault();
            });


            $("#btnadd").click(function(event){

                $('#tblFarmaco tr:last').after( '<tr><td> {!! Form::select ("idFarmaco",["placeholder"=>"Selecciona farmaco"],null,["id"=>"idFarmaco","class"=>"form-control"]) !!}</td><td> <input type="text" name="nombreFarmaco" id="nombreFarmaco" class="form-control"></td><td> <input type="text" name="via" id="via" class="form-control"></td> <td>{!! Form::text("dosis", null, ["class" => "form-control"]) !!} </td><td>{!! Form::text("frecuencia", null, ["class" => "form-control"]) !!}</td><td><input type="date" name="fechaAplicacion" id="fechaAplicacion"></td></tr> ');
                event.preventDefault();
            });
          /*  $("#btnadd").click(function(event){
                count++;
                $('#tblFarmaco tr:last').after( "<th> {!! Form::select ('idFarmaco',['placeholder'=>'Selecciona farmaco'],null,['id'=>'idFarmaco','class'=>'form-control']) !!}</th><th> <input type='text' name='nombreFarmaco' id='nombreFarmaco'class='form-control'></th><th> <input type='text' name='via' id='via' class='form-control'></th> <th>{!! Form::text('dosis', null, ['class' => 'form-control']) !!} </th><th>{!! Form::text('frecuencia', null, ['class' => 'form-control']) !!}</th><th><input type='date' name='fechaAplicacion' id='fechaAplicacion'></th> ");
                event.preventDefault();
            }); */
          

            $("select[name=idVeterinario]").change(function () {
                var id = $(this).val();
                $.ajax({
                    type: 'get',
                    url: '{!! URL::to('cargarDatosVeterinarios')!!}',
                    data: {'id': id},
                    success: function (data) {
                        console.log('exito colega22')
                        console.log(data)

                      //  $("#sexo").val('' + data[0].sexo);
                        $("#nombreCompleto").val('' + data[0].nombre+"   " +data[0].apellidoPaterno + "  " +data[0].apellidoMaterno);

                    },
                    error: function () {
                        console.log('hay error')
                    }
                })
            });

            $("select[name=idEncargado]").change(function () {
                var id = $(this).val();
                $.ajax({
                    type: 'get',
                    url: '{!! URL::to('cargarDatosVeterinarios')!!}',
                    data: {'id': id},
                    success: function (data) {
                        console.log('exito colega22')
                        console.log(data)

                        //  $("#sexo").val('' + data[0].sexo);
                        $("#nombreArea").val('' + data[0].nombre+"   " +data[0].apellidoPaterno + "  " +data[0].apellidoMaterno);

                    },
                    error: function () {
                        console.log('hay error')
                    }
                })
            });

            $("select[name=idFarmaco]").change(function () {
                var id = $(this).val();
                $.ajax({
                    type: 'get',
                    url: '{!! URL::to('cargarDatosFarmacos')!!}',
                    data: {'id': id},
                    success: function (data) {
                        console.log('exito colega22')
                        console.log(data)

                        $("#via").val('' + data[0].via);
                        $("#nombreFarmaco").val('' + data[0].nombre);

                    },
                    error: function () {
                        console.log('hay error')
                    }
                })
            });

            $("#farmacoInsert").on('submit',function(event){
                    event.preventDefault();

                if ($("nombreFarmaco").val ==""){
                    alert("Nombre del farmaco no puede ir vacio")
                }

                else if ($("fechaAplicacion").val ==""){
                    alert("fecha Aplicación no puede ir vacio")
                }
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