@extends('Layouts.principal')

@section('content')
    <div class="container">
        <div class="row">
    {!! Form::model($veterinario,['route'=>['veterinario.update',$veterinario->id,'method'=>'PUT']]) !!}
    <input name="_method" type="hidden" value="PUT">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3>Editar el veterinario :{{$veterinario->nombre}}</h3>
        </div>
        <div class="panel-body">
            @include('Veterinario.veterinario.forms.registro')
            {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}


        </div>
    </div>

    {!! Form::close() !!}
        </div>
    </div>

    {!! Form::open(['route'=>['veterinario.destroy',$veterinario->id,'method'=>'DELETE']]) !!}
    <input name="_method" type="hidden" value="DELETE">
    <br>
    {!! Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}

    {!! Form::close() !!}

@endsection