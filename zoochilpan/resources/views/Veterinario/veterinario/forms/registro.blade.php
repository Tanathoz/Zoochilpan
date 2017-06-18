

<div class="form-group col-md-10">
    {!! Form::label('Nombre ') !!}
    {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Arturo']) !!}

</div>


<div class="form-group col-md-10">
    {!! Form::label('Apellido Paterno ') !!}
    {!! Form::text('apellidoPaterno',null,['class'=>'form-control','placeholder'=>'Salazar']) !!}

</div>


<div class="form-group col-md-10">
    {!! Form::label('Apellido Materno ') !!}
    {!! Form::text('apellidoMaterno',null,['class'=>'form-control','placeholder'=>'Barrera']) !!}

</div>

<div class="form-group col-md-10">
    {!! Form::label('Sexo') !!}
    <br>
    {!! Form::radio('sexo', 'M') !!}
    {!! Form::label('M') !!}
    {!! Form::radio('sexo', 'F') !!}
    {!! Form::label('F') !!}


</div>

<div class="form-group col-md-10">
    {!! Form::label('Especialidad ') !!}
    {!! Form::text('especialidad',null,['class'=>'form-control','placeholder'=>'pequeñas especies']) !!}

</div>



<div class="form-group col-md-10">
    {!! Form::label('Area a cargo ') !!}
    {!! Form::text('areaEncargada',null,['class'=>'form-control','placeholder'=>'primates ']) !!}

</div>

