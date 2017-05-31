@extends('Layouts.principal')

@section('content')


    {!! Form::model($animal,['route'=>['animal.update',$animal->id,'method'=>'PUT']]) !!}
    <input name="_method" type="hidden" value="PUT">
    <div class="col-md-9">
        <div class="panel panel-default">
         <div class="panel-heading">
            <h3 class="opcion_iluminada">Editar el animal :{{$animal->nombreComun}}</h3>
         </div>
             <div class="panel-body">


            @include('Animales.form.actualizar')
            {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}


         </div>
        </div>
    {!! Form::close() !!}
    </div>

@stop