@extends('Layouts.principal')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading"><center><h3 class="opcion_iluminada">Editar  Ejemplar  #{{ $ejemplar->marcaje }}</h3></center></div>
                    <div class="panel-body">
                        <a href="{{ url('/ejemplar') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> <span class="glyphicon glyphicon-arrow-left"></span></button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($ejemplar, [
                            'method' => 'PATCH',
                            'url' => ['/ejemplar', $ejemplar->marcaje],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('Zoochilpan.ejemplar.form', ['ButtonText' => 'Actualizar'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

@section('javascript')
@endsection

@endsection