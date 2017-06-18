@extends('Layouts.principal')

@section('content')

    <div class="col-md-8">
    {!! Form::open(['route'=>'familia.store','method'=>'POST']) !!}
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><center><h3 class="opcion_iluminada">Registro De Familia</h3></center></h3>
        </div>
        <div class="panel-body">

            @include('Familias.forms.registro')
            <div class="form-group col-md-10  align-content-center">
            {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
            </div>
        </div>
    </div>

    {!! Form::close() !!}
    </div>
@endsection