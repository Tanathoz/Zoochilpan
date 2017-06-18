@extends('Layouts.principal')

@section('content')
    <div class="container">
        <div class="row">


            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading"><center><h3 class="opcion_iluminada">Editar  Hoja Clínica  #{{ $hojaclinica->id }}</h3></center></div>
                    <div class="panel-body">
                        <a href="{{ url('/hojaclinica') }}" title="Volver"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> <span class="glyphicon glyphicon-arrow-left"></button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($hojaclinica, [
                            'method' => 'PATCH',
                            'url' => ['/hojaclinica', $hojaclinica->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('Zoochilpan.hojaclinica.formActualiza', ['submitButtonText' => 'Actualizar'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
