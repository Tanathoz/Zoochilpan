@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">hojaProfilaxi {{ $hojaprofilaxi->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/hoja-profilaxi') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/hoja-profilaxi/' . $hojaprofilaxi->id . '/edit') }}" title="Edit hojaProfilaxi"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['hojaprofilaxi', $hojaprofilaxi->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete hojaProfilaxi',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $hojaprofilaxi->id }}</td>
                                    </tr>
                                    <tr><th> Lugar </th><td> {{ $hojaprofilaxi->lugar }} </td></tr><tr><th> Fecha </th><td> {{ $hojaprofilaxi->fecha }} </td></tr><tr><th> Tratamiento </th><td> {{ $hojaprofilaxi->tratamiento }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
