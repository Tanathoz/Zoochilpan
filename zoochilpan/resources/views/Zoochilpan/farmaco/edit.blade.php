@extends('Layouts.principal')

@section('content')
    <div class="container">
        <div class="row">


            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading"><center><h3 class="opcion_iluminada">Editar  Farmaco #{{ $farmaco->nombre }}</h3></center></div>
                    <div class="panel-body">

                        <a href="{{ url('/farmaco') }}" title="Volver"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> <span class="glyphicon glyphicon-arrow-left">  </span></button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($farmaco, [
                            'method' => 'PATCH',
                            'url' => ['/farmaco', $farmaco->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('Zoochilpan.farmaco.form', ['submitButtonText' => 'Actualizar'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
