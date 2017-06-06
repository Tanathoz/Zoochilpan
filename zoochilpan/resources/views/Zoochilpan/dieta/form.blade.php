

<div class="form-group">
    {!! Form::label('idAnimal', 'Animal', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select ('idAnimal',['placeholder'=>'Selecciona animal'],null,['id'=>'idAnimal','class'=>'form-control']) !!}
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
<div class="form-group {{ $errors->has('cantidad') ? 'has-error' : ''}}">
    {!! Form::label('cantidad', 'Cantidad', ['class' => 'col-md-4 control-label']) !!}
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
<input type="hidden" name="bandera" id="bandera" value="{{$submitButtonText}}">
<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Registrar', ['class' => 'btn btn-primary']) !!}
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

             //    $("#idAnimal").empty().append('<option value="' + id + '">' + nomC + '</option>');


                                $.ajax({
                                    type:'get',
                                    url:'{!! URL::to('cargarDatosAnimales')!!}',
                                    data:{'id':id},
                                    success:function(data){
                                        console.log('exito colega22')
                                        console.log(data)

                                        $("#idAnimal").empty().append('<option value="' + id+ '">' + data[0].nombreComun+ '</option>');
                                        $("#nombreComun").val('' + data[0].nombreComun);
                                        $("#nombreCientifico").val('' + data[0].nombreCientifico);
                                        $("#idAnimal").attr("readonly","readonly");
                                    },
                                    error:function(){
                                        console.log('hay error')


                                    }

                                })



            }


        });

    </script>

@endsection