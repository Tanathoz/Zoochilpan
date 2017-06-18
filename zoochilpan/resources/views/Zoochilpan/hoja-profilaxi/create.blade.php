@extends('Layouts.principal')

@section('content')
    <div class="container">
        <div class="row">


            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading"><center><h3 class="opcion_iluminada">Registrar Hoja Profilaxis </h3></center></div>
                    <div class="panel-body">
                        <a href="{{ url('/profilaxis') }}" title="Volver"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i>  <span class="glyphicon glyphicon-arrow-left"></span></button></a>
                        <br />
                        <br />



                    @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <input type="hidden" name="idp"  value="idp" >

                        {!! Form::open(['route'=>'profilaxis.store','class' => 'form-horizontal','method'=>'POST']) !!}
                    <input type="hidden" name="_token"  value="{{csrf_token()}}" id="token">

                        @include ('Zoochilpan.hoja-profilaxi.form',['ButtonText' => 'Registrar'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
