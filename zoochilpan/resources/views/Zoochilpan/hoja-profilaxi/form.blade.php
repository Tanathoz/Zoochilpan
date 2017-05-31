<div class="form-group {{ $errors->has('lugar') ? 'has-error' : ''}}">
    {!! Form::label('lugar', 'Lugar', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('lugar','Zoológico Zoochilpan', ['class' => 'form-control']) !!}
        {!! $errors->first('lugar', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('fecha') ? 'has-error' : ''}}">
    {!! Form::label('fecha', 'Fecha', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-4 input-group-date">
        <input type="text" class="form-control" name="fecha" id="fecha">
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
        {!! Form::text('marcajeEjemplar',null,['class'=>'form-control ','readonly','placeholder'=>'Chip Avid16-002', 'id'=>'marcajeEjemplar']) !!}
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

<div class="form-group {{ $errors->has('fecha') ? 'has-error' : ''}}">
    {!! Form::label('fechaApliacion', 'Fecha Inicio', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-4 input-group-date">
        <input type="text" class="form-control " name="fechaAplicacion" id="fechaAplicacion" >

        {!! $errors->first('fechaAplicacion', '<p class="help-block">:message</p>') !!}
    </div>
</div>


{!! Form::label('Emergente', 'Agregar farmaco', ['class' => 'col-md-4 control-label']) !!}
<a href="#ventanaFarmaco" class="btn btn-primary btn-sm" name="Emergente" data-toggle="modal"> <span class="glyphicon glyphicon-plus"></span></a>
<div class="table-responsive col-md-15" style="text-align:center;">
    <table id="tblFarmaco" class="table table-borderless" style="align:center">
        <thead>
        <tr>
            <th>ID</th><th>Nombre</th><th>Via</th><th>Dosis</th><th>Frecuencia</th><th>Fecha</th><th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        <td name="idFarm"> </td><td name="nombreFarm"> </td><td name="viaFarm" ></td> <td name="dosisFarm"></td><td name="freFarm"></td><td name="fechaFarm"></td><td></td>

        </tbody>
    </table>


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



<div class="form-group ">

    {!! Form::label('idEncargado', 'Encargado', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select ('idEncargado',['placeholder'=>'Selecciona encargado area veterinaria'],null,['id'=>'idEncargado','class'=>'form-control']) !!}
        {!! $errors->first('idEncargado', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<input type="hidden" name="idHojaPro"   id="idHojaPro">

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Registrar', ['class' => 'btn btn-primary','id'=>'btnAdd']) !!}
    </div>
</div>
<input type="hidden" name="bandera" id="bandera" value="{{$ButtonText}}">
<div class="container">
    <div class="modal fade" id="ventanaFarmaco">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 class="modal-title">Datos del fármaco</h3>
                </div>
                <!-- contenido de la ventana -->


                <form method="post" id="farmacoInsert">
                    <div class="form-group modal-body {{ $errors->has('fechaAplic') ? 'has-error' : ''}}">
                        {!! Form::label('fechaAplic', 'Fecha de Aplicacion', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-4">
                            <input type="date" class="form-control" name="fechaAplic" id="fechaAplic">

                        </div>
                    </div>

                    <div class="form-group modal-body">
                        {!! Form::label('idFarmaco', 'Farmaco', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::select ('idFarmaco',['0'=>'Selecciona farmaco'],null,['id'=>'idFarmaco','class'=>'form-control']) !!}

                        </div>
                    </div>

                    <div class="form-group modal-body {{ $errors->has('nombreFarmaco') ? 'has-error' : ''}}">
                        {!! Form::label('nombreFarmaco', 'Nombre', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-4">
                            {!! Form::text('nombreFarmaco', null, ['class' => 'form-control','readonly']) !!}
                            {!! $errors->first('nombreFarmaco', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>

                    <div class="form-group modal-body {{ $errors->has('via') ? 'has-error' : ''}}">
                        {!! Form::label('via', 'Via', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-4">
                            {!! Form::text('via', null, ['class' => 'form-control','readonly']) !!}
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
                var flag, dosisFart="",count=0;
                flag=$("#bandera").val();
                $('#fecha').datetimepicker({
                    format: 'YYYY-MM-DD'
                });
                $('#fechaAplicacion').datetimepicker({
                    format: 'YYYY-MM-DD'
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
                $.ajax({
                    type: 'get',
                    url: '{!! URL::to('cargarMaxId')!!}',
                    data: {},
                    success: function (data) {
                        console.log('exito de IDDD');
                        $("#idHojaPro").val('' + data[0].id);
                        console.log("mira"+data[0].id);
                    },
                    error: function () {
                        console.log('hay ERROR PRRO')
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
                $("#btnAdd").click(function(event){
                    var idProfilaxis=$('input[id=idHojaPro]').val();
                    idProfilaxis=parseInt(idProfilaxis);
                    idProfilaxis=idProfilaxis+1;
                    var valores="" ;
                    var contador = 0;
                    var contador2 = 6;
                    var CSRF_TOKEN = '{{csrf_token()}}';
                    $(".idFarm").parent("tr").find("td").each(function() {
                        valores += $(this).html();
                        if(contador == contador2)
                        {
                            valores += ";";
                            contador2 += 7 ;
                        }
                        else {
                            valores += ",";
                        }
                        contador++;
                    });

                    var arregloDeCadenas = valores.split(';');
                    var nuevaCadena = valores.replace(/;/g, ',');
                    var arregloDatos=nuevaCadena.split(',');
                    var paso=0;
                    for (i = 0; i < arregloDeCadenas.length-1; i++) {
                        $.ajax({
                            url: '{!! URL::to('guardarFarmacos')!!}',
                            headers: {'X-CSRF-TOKEN':CSRF_TOKEN},
                            type:"POST",
                            dataType:'json',
                            data:{idProfilaxis:idProfilaxis,idFarmaco:arregloDatos[paso],dosis:arregloDatos[paso+3],frecuencia:arregloDatos[paso+4],fechaAplicacion:arregloDatos[paso+5]},
                            success: function(response){
                                console.log(response);
                                console.log('exito de POST');
                            }
                        });
                        paso+=7;
                    }

                });


                $("#AddFarmaco").click(function(event){
                    var nombreFar= $('input[name=nombreFarmaco]').val();
                    count++;
                    dosisFar=$('input[id=dosis]').val();
                    var viaFar=$('input[name=via]').val();
                    var frecuenciaFar=$('input[id=frecuencia]').val();
                    var fechaFar=$('input[id=fechaAplic]').val();
                    var idFar = $('select[name=idFarmaco]').val();

                    $('#tblFarmaco tr:last').before('<tr ><td class="idFarm"> '+idFar+'</td><td name="nombreFarm[]">'+nombreFar+'</td><td name="viaFarm[]">'+viaFar+'</td><td name="dosisFarm[]">'+dosisFar+'</td><td name="freFarm[]">'+frecuenciaFar+'</td><td name="fechaFarm[]">'+fechaFar+'</td><td><button class="btn btn-primary btn-xs editar" id="editar" name="editar"> <span class="glyphicon glyphicon-pencil"></span></button><button class="btn btn-danger btn-xs borrar"  id="borrar" name="borrar"> <span class="glyphicon glyphicon-trash"></span></button></td></tr>');
                    $("#via").val('');
                    $("#nombreFarmaco").val('');
                    $("#dosis").val('');
                    $("#frecuencia").val('');
                    $("#fechaAplic").val('');
                    //  var children = $("tr td")[1].innerHTML;

                    //  }
                    // for (i=0; i<arregloDatos.length; i++) {
                    // }
                    event.preventDefault();
                });

                $(function () {
                    $(document).on('click', '.borrar', function (event) {
                        event.preventDefault();
                        $(this).closest('tr').remove();
                    });
                });
                $(function () {
                    $(document).on('click', '.editar', function (event) {
                        event.preventDefault();
                       var valFar,cosa;
                        cosa=$(this).parents("tr");
                        $(this).parents("tr").find("td").each(function(){
                            valFar+=$(this).html()+",";
                            event.preventDefault();
                           $(this).closest('tr').remove();
                        });

                        var arregloDa=valFar.split(',');
                        var idf=arregloDa[0].substring(10,11);
                        idf=idf.toString();
                        var i="   1    ";
                        idf=idf.trim();
                        //alert(idf);
                        $('#idFarmaco > option[value="0"]').attr('selected', 'selected');

                     //   $("#nombreFarmaco").val(arregloDa[1]);
                      //  $("#via").val(arregloDa[2]);
                        $("#dosis").val(arregloDa[3]);
                        $("#frecuencia").val(arregloDa[4]);
                        $("#fechaAplic").val(arregloDa[5]);
                        $("#ventanaFarmaco").modal("show");

                    });
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