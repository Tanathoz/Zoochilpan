@extends('Layouts.principal')

@section('content')
    <div class="container">
        <div class="row">


            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Dietua #{{ $dietum->idAnimal  }} </div>
                    <div class="panel-body">
                        <a href="{{ url('/dieta') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($dietum, [
                            'method' => 'PATCH',
                            'url' => ['/dieta', $dietum->idAnimal],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('zoochilpan.dieta.formActualiza', ['submitButtonText' => 'Actualizar'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
