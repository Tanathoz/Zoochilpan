@extends('Layouts.principal')

@section('content')
    <div class="container">
        <div class="row">


            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading"><center><h3 class="opcion_iluminada">Gestión de Profilaxis</h3></center></div>
                    <div class="panel-body">
                        <a href="{{ url('/profilaxis/create') }}" class="btn btn-success btn-sm" title="Agregar hoja">
                            <i class="fa fa-plus" aria-hidden="true"> <span class="glyphicon glyphicon-plus"></span></i>
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/profilaxis', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Buscar...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <span class="glyphicon glyphicon-search">  </span>
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        {!! Form::close() !!}

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th>Lugar</th><th>Fecha</th><th>Tratamiento</th><th>Marcaje</th><th>Ejemplar</th><th>Sexo</th><th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($hojaprofilaxi as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->lugar }}</td><td>{{ $item->fecha }}</td><td>{{ $item->tratamiento }}</td><td>{{ $item->marcajeEjemplar }}</td><td>{{ $item->nombreComun }}</td><td>{{ $item->sexo }}</td>
                                        <td>
                                            <a href="{{ url('/profilaxis/' . $item->id . '/edit') }}" title="Edit hojaProfilaxi"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <span class="glyphicon glyphicon-pencil"></span></button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/profilaxis', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> <span class="glyphicon glyphicon-trash">', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Borrar Hoja',
                                                        'onclick'=>'return confirm("Confirmar borrado?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $hojaprofilaxi->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
