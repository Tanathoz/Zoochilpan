@extends('Layouts.principal')

@section('content')
    {!! Form::open(['route'=>'familia.store','method'=>'POST']) !!}
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"> Formularios de registro de familia </h3>
        </div>
        <div class="panel-body">
            @include('Familias.forms.registro')
            {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}

        </div>
    </div>

    {!! Form::close() !!}
@endsection