@extends('Layouts.principal')

@section('content')
    <div class="container">
        <div class="row">


            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Siniestro #{{ $siniestro->id }}</div>
                    <div class="panel-body">
                        <a href="{{ url('/siniestro') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Volver</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($siniestro, [
                            'method' => 'PATCH',
                            'url' => ['/siniestro', $siniestro->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('zoochilpan.siniestro.formActualiza', ['submitButtonText' => 'Actualizar'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
