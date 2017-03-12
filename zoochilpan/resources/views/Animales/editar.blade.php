@extends('Layouts.principal')

@section('content')


    {!! Form::model($animal,['route'=>['animal.update',$animal->id,'method'=>'PUT']]) !!}
    <input name="_method" type="hidden" value="PUT">
        <div class="panel panel-default">
         <div class="panel-heading">
            <h3>Editar el animal :{{$animal->nombreComun}}</h3>
         </div>
             <div class="panel-body">


            @include('Animales.form.registro')
            {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}


         </div>
        </div>

    {!! Form::close() !!}


    {!! Form::open(['route'=>['animal.destroy',$animal->id,'method'=>'DELETE']]) !!}
    <input name="_method" type="hidden" value="DELETE">
    <br>
            {!! Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}

    {!! Form::close() !!}

@stop