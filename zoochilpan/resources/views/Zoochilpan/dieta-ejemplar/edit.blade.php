@extends('Layouts.principal')

@section('content')
    <div class="container">
        <div class="row">


            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading"><center><h3 class="opcion_iluminada">Editar  Dieta De Ejemplar  #{{ $dietaejemplar->marcajeEjemplar }}</h3></center></div>
                    <div class="panel-body">
                        <a href="{{ url('/dietaEjemplar') }}" title="Volver"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> <span class="glyphicon glyphicon-arrow-left"></span></button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($dietaejemplar, [
                            'method' => 'PATCH',
                            'url' => ['/dietaEjemplar', $dietaejemplar->marcajeEjemplar],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('zoochilpan.dieta-ejemplar.form', ['submitButtonText' => 'Actualizar'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
