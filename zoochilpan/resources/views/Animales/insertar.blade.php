@extends('Layouts.principal')


@section('content')




            {!! Form::open(['route'=>'animal.store','method'=>'POST']) !!}
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"> Formularios de registro de Ejemplar </h3>
                </div>
                <div class="panel-body">
                @include('Animales.form.registro')
                {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}


                   </div>
                </div>

            {!! Form::close() !!}


@stop




