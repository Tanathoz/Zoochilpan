@extends('Layouts.principal')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><center><h3 class="opcion_iluminada">Registrar Siniestro</h3></center></div>
                    <div class="panel-body">
                        <a href="{{ url('/siniestro') }}" title="Volver"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                                <span class="glyphicon glyphicon-arrow-left"></button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/siniestro', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('zoochilpan.siniestro.form',['submitButtonText' => 'Registrar'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
