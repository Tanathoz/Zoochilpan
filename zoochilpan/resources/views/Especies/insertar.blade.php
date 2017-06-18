@extends('Layouts.principal')

@section('content')
    <div class="container">
        <div class="row">
            {!! Form::open(['route'=>'especie.store','class' => 'form-horizontal','method'=>'POST']) !!}
    <div class="col-md-8">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><center> <h3 class="opcion_iluminada">Registro De Especie</h3></center> </h3>
        </div>
        <div class="panel-body">


            @include('Especies.forms.registro')
            <div class="form-group  col-md-10 ">
            {!! Form::submit('Registrar',['class'=>'btn btn-primary',]) !!}
            </div>

    {!! Form::close() !!}
        </div>
    </div>
    </div>
        </div>
    </div>
@endsection