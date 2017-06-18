<div class="form-group">
    {!! Form::label('idNecropsia', 'Necropsia', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select ('idNecropsia',['placeholder'=>'Selecciona Necropsia'],null,['id'=>'idNecropsia','class'=>'form-control']) !!}
    </div>
</div>

<div class="form-group {{ $errors->has('lugar') ? 'has-error' : ''}}">
    {!! Form::label('lugar', 'Lugar', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('lugar', 'Zoológico Zoochilpan', ['class' => 'form-control','readonly']) !!}
        {!! $errors->first('lugar', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('fecha') ? 'has-error' : ''}}">
    {!! Form::label('fecha', 'Fecha', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <input type="text" class="form-control " readonly name="fecha" id="fecha" readonly>
        {!! $errors->first('fecha', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('hora') ? 'has-error' : ''}}">
    {!! Form::label('hora', 'Hora', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::input('time', 'hora', null, ['class' => 'form-control','readonly']) !!}
        {!! $errors->first('hora', '<p class="help-block">:message</p>') !!}
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
        {!! Form::textarea('antecedentes', null, ['class' => 'form-control','readonly']) !!}
        {!! $errors->first('antecedentes', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('estadoFisico') ? 'has-error' : ''}}">
    {!! Form::label('estadoFisico', 'Estado físico gral', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('estadoFisico', null, ['class' => 'form-control','readonly']) !!}
        {!! $errors->first('estadoFisico', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('lesiones') ? 'has-error' : ''}}">
    {!! Form::label('lesiones', 'Lesiones', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('lesiones', null, ['class' => 'form-control','readonly']) !!}
        {!! $errors->first('lesiones', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('toracica') ? 'has-error' : ''}}">
    {!! Form::label('toracica', 'Cavidad Toracica', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('toracica', null, ['class' => 'form-control','readonly']) !!}
        {!! $errors->first('toracica', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('abdominal') ? 'has-error' : ''}}">
    {!! Form::label('abdominal', 'Cavidad Abdominal', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('abdominal', null, ['class' => 'form-control','readonly']) !!}
        {!! $errors->first('abdominal', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('muestras') ? 'has-error' : ''}}">
    {!! Form::label('muestras', 'Muestras', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('muestras', null, ['class' => 'form-control','readonly']) !!}
        {!! $errors->first('muestras', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('diagnosticoMuerte') ? 'has-error' : ''}}">
    {!! Form::label('diagnosticoMuerte', 'Diagnostico muerte', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('diagnosticoMuerte', null, ['class' => 'form-control','readonly']) !!}
        {!! $errors->first('diagnosticoMuerte', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group ">

    {!! Form::label('idVeterinario', 'Veterinario', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select ('idVeterinario',['placeholder'=>'Selecciona veterinario'],null,['id'=>'idVeterinario','class'=>'form-control','readonly']) !!}
        {!! $errors->first('idVeterinario', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group ">

    {!! Form::label('idEncargado', 'Encargado', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select ('idEncargado',['placeholder'=>'Selecciona encargado area veterinaria'],null,['id'=>'idEncargado','class'=>'form-control','readonly']) !!}
        {!! $errors->first('idEncargado', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('medidaPreventiva') ? 'has-error' : ''}}">
    {!! Form::label('medidaPreventiva', 'Medida preventiva', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('medidaPreventiva', null, ['class' => 'form-control','required' => 'required']) !!}
        {!! $errors->first('medidaPreventiva', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('nombreMedida') ? 'has-error' : ''}}">
    {!! Form::label('nombreMedida', 'Nombre responsable medida', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nombreMedida', null, ['class' => 'form-control','required' => 'required']) !!}
        {!! $errors->first('nombreMedida', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('apellido PaternoMedida') ? 'has-error' : ''}}">
    {!! Form::label('apellidoPaternoMedida', 'Apellido Paterno responsable', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('apellidoPaternoMedida', null, ['class' => 'form-control','required' => 'required']) !!}
        {!! $errors->first('apellidoPaternoMedida', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('apellidoMaternoMedida') ? 'has-error' : ''}}">
    {!! Form::label('apellidoMaternoMedida', 'Apellido Materno responsable', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('apellidoMaternoMedida', null, ['class' => 'form-control','required' => 'required']) !!}
        {!! $errors->first('apellidoMaternoMedida', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Registrar', ['class' => 'btn btn-primary']) !!}
    </div>
</div>

<input type="hidden" name="bandera" id="bandera" value="{{$submitButtonText}}">
<input type="hidden" name="id" id="id" >
@section('javascript')
    <script>
        var flag;
        flag=$("#bandera").val();
        $(document).ready(function (){
            $.ajax({
                type: 'get',
                url: '{!! URL::to('cargarNecropsias')!!}',
                data: {},
                success: function (data) {
                    console.log('exito colega')
                    console.log(data)
                    for (var i = 0; i < data.length; i++) {
                        $("#idNecropsia").append('<option value="' + data[i].id + '">' + data[i].id  +"  "+data[i].diagnosticoMuerte + "  " +data[i].nombrePropio +'</option>');
                    }
                },
                error: function () {
                    console.log('hay error')
                }
            });


        });

        $("select[name=idNecropsia]").change(function () {
            var idNecropsia=$(this).val();

            $.ajax({
                type: 'get',
                url: '{!! URL::to('cargarUnaNecropsia')!!}',
                data: {'idNecropsia':idNecropsia},
                success: function (data) {
                    console.log('exito colega');
                    console.log(data);
                    $("#lugar").val(data[0].lugar);
                    $("#fecha").val('' + data[0].fecha);
                    $("#marcajeEjemplar").val('' + data[0].marcajeEjemplar);
                    $("#nombreComun").val('' + data[0].nombreComun);
                    $("#nombreCientifico").val('' + data[0].nombreCientifico);
                    $("#hora").val(data[0].hora);
                    $("#antecedentes").val('' + data[0].antecedentes);
                    $("#diagnosticoMuerte").val('' + data[0].diagnosticoMuerte);
                    $("#estadoFisico").val('' + data[0].estadoFisico);
                    $("#lesiones").val('' + data[0].lesiones);
                    $("#toracica").val(data[0].lugar);
                    $("#abdominal").val('' + data[0].fecha);
                    $("#muestras").val('' + data[0].muestras);
                    var idV=data[0].idVeterinario;
                    var idE=data[0].idEncargado;
                    var marcaje=data[0].marcajeEjemplar;

                    $.ajax({
                        type:'get',
                        url:'{!! URL::to('cargarDatosEjemplares')!!}',
                        data:{'marcaje':marcaje},
                        success:function(data){
                            console.log('exito colega')
                            $("#nombreComun").val(data[0].nombreComun)
                            $("#nombreCientifico").val(data[0].nombreCientifico)

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
                error: function () {
                    console.log('hay error')
                }
            });
        });



    </script>

@endsection