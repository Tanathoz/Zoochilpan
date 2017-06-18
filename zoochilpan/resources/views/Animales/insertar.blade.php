@extends('Layouts.principal')


@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">
                   <center> <h3 class="panel-title opcion_iluminada"> Registro de Animal </h3></center>
                </div>
                <div class="panel-body">
                    <a href="{{ url('/animal') }}" title="Volver"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> <span class="glyphicon glyphicon-arrow-left"></span></button></a>
                    {!! Form::open(['route'=>'animal.store','class' => 'form-horizontal','method'=>'POST']) !!}

                @include('Animales.form.registro',['ButtonText' => 'Registrar'])


            {!! Form::close() !!}
                  </div>
               </div>
             </div>
        </div>
    </div>

@stop






