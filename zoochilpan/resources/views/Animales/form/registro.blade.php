<div class="form-group col-md-4">
    {!! Form::label('Numero de registro') !!}
    {!! Form::number('id',null,['class'=>'form-control','placeholder'=>'numero de identificacion']) !!}

</div>

<div class="form-group">
    {!! Form::label('Nombre cientifico') !!}
    {!! Form::text('nombreCientifico',null,['class'=>'form-control','placeholder'=>'Pathera Leo']) !!}

</div>
<div class="form-group">
    {!! Form::label('Nombre Común') !!}
    {!! Form::text('nombreComun',null,['class'=>'form-control','placeholder'=>'León']) !!}

</div>

<div class="form-group">

    {!! Form::label('Familia') !!}
    {!! Form::text('familia',null,['class'=>'form-control','placeholder'=>'Felinos']) !!}

</div>


<div class="form-group">
    {!! Form::label('Clase') !!}
    {!! Form::text('clase',null,['class'=>'form-control','placeholder'=>'Mamiferos']) !!}

</div>

<div class="form-group">
    {!! Form::label('Orden') !!}
    {!! Form::text('orden',null,['class'=>'form-control','placeholder'=>'Carnivoros']) !!}

</div>
<div class="form-group">
    {!! Form::label('Especie') !!}
    {!! Form::text('especie',null,['class'=>'form-control','placeholder'=>'Pathera ']) !!}

</div>
<div class="form-group">
    {!! Form::label('Procedencia') !!}
    {!! Form::text('procedencia',null,['class'=>'form-control','placeholder'=>'Africa']) !!}

</div>

<div class="form-group">
    {!! Form::label('Habitat') !!}
    {!! Form::text('habitat',null,['class'=>'form-control','placeholder'=>'selva']) !!}

</div>

<div class="form-group">
    {!! Form::label('Gestación') !!}
    {!! Form::text('gestacion',null,['class'=>'form-control','placeholder'=>'110 dias']) !!}

</div>
<div class="form-group">
    {!! Form::label('Camada') !!}
    {!! Form::text('camada',null,['class'=>'form-control','placeholder'=>'1-4 Crías']) !!}

</div>

<div class="form-group">
    {!! Form::label('Longevidad') !!}
    {!! Form::text('longevidad',null,['class'=>'form-control','placeholder'=>'10-14 años']) !!}

</div>


<div class="form-group">
    {!! Form::label('Sexo') !!}
    <br>
    {!! Form::radio('sexo', 'M') !!}
    {!! Form::label('M') !!}
    {!! Form::radio('sexo', 'F') !!}
    {!! Form::label('F') !!}


</div>


<div class="form-group">
    {!! Form::label('Peso') !!}
    {!! Form::text('peso',null,['class'=>'form-control','placeholder'=>'130 kg']) !!}

</div>

<div class="form-group">
    {!! Form::label('Ubicación Geografíca') !!}
    {!! Form::text('ubicacionGeografica',null,['class'=>'form-control','placeholder'=>'Noroeste de Africa']) !!}

</div>


<div class="form-group">
    {!! Form::label('Alimentacion') !!}
    {!! Form::text('alimentacion',null,['class'=>'form-control','placeholder'=>'cebras,buffalos']) !!}

</div>

<div class="form-group">
    {!! Form::label('Dato Curioso') !!}
    {!! Form::text('datoCurioso',null,['class'=>'form-control','placeholder'=>'Es el unico felino que forma manadas']) !!}

</div>