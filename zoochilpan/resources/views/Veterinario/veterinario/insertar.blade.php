@extends('Layouts.principal')


@section('content')
    <div class="container">
        <div class="row">
    {!! Form::open(['route'=>'veterinario.store','class' => 'form-horizontal','method'=>'POST']) !!}
            <div class="col-md-8">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"> Formularios de registro de Veterinario </h3>
        </div>
        <div class="panel-body">
            @include('Veterinario.veterinario.forms.registro')
            <div class="form-group  col-md-10 ">
            {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
            </div>
        </div>
    </div>

    {!! Form::close() !!}
        </div>
    </div>
    </div>

    @endsection