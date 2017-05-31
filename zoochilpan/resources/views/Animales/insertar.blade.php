@extends('Layouts.principal')


@section('content')




            {!! Form::open(['route'=>'animal.store','method'=>'POST']) !!}
            {!! Html::script('js/mostrarOpciones') !!}
            <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                   <center> <h3 class="panel-title opcion_iluminada"> Formularios de registro de Animal </h3></center>
                </div>
                <div class="panel-body">
                @include('Animales.form.registro')
                    <center>
                {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}

                    </center>
                   </div>
                </div>

            {!! Form::close() !!}
            </div>

@stop






