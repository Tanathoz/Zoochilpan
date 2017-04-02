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

</div><div class="form-group {{ $errors->has('alias') ? 'has-error' : ''}}">
    {!! Form::label('marcaje', 'Marcaje', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('marcaje', null, ['class' => 'form-control']) !!}
        {!! $errors->first('marcaje', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group {{ $errors->has('fechaNacimiento') ? 'has-error' : ''}}">
    {!! Form::label('fechaNacimiento', 'Fecha de nacimiento', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <input type="date" name="fecha">
        {!! $errors->first('fechaNacimiento', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('fechaIngreso') ? 'has-error' : ''}}">
    {!! Form::label('fechaIngreso', 'Fecha Alta', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <input type="date" name="fechaIngreso">
        {!! $errors->first('fechaIngreso', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('sexo') ? 'has-error' : ''}}">

    <div class="col-md-6">
        {!! Form::label('sexo', 'Sexo', ['class' => 'col-md-3 control-label']) !!}
        {!! Form::radio('sexo', null, ['class' => 'form-control']) !!}
        {!! Form::label('Macho', 'Macho', ['class' => ' control-label']) !!}
        {!! Form::radio('sexo', null, ['class' => 'form-control']) !!}
        {!! Form::label('Hembra', 'Hembra', ['class' => 'control-label']) !!}
        {!! $errors->first('sexo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('alias') ? 'has-error' : ''}}">
    {!! Form::label('alias', 'Nombre propio', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('alias', null, ['class' => 'form-control']) !!}
        {!! $errors->first('alias', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
@section('javascript')
    <script>

        $(document).ready(function (){
            $.ajax({
                type:'get',
                url:'{!! URL::to('cargarAnimales')!!}',
                data:{},
                success:function(data){
                    console.log('exito colega')
                    console.log(data)


                    $("#idAnimal").append('<option value="1"> Seleciona animal</option>');

                    for (var i=0;i<data.length;i++){

                        $("#idAnimal").append('<option value="' + data[i].id+ '">' + data[i].nombreComun+ '</option>');

                    }
                },
                error:function(){
                    console.log('hay error')
                }
            })

            $("select[name=idAnimal]").change(function () {
                var id=$(this).val();

                $.ajax({
                    type:'get',
                    url:'{!! URL::to('cargarDatosAnimales')!!}',
                    data:{'id':id},
                    success:function(data){
                        console.log('exito colega22')
                        console.log(data)
                        $("#nombreComun").val(''+data[0].nombreComun);
                        $("#nombreCientifico").val(''+data[0].nombreCientifico);
                    },
                    error:function(){
                        console.log('hay error')


                    }

                })

            });


        });
    </script>
@endsection