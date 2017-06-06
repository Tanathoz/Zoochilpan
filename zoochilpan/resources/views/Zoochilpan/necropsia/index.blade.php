@extends('Layouts.principal')

@section('content')
    <div class="container">
        <div class="row">


            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><center><h3 class="opcion_iluminada">Gestión de Necropsias</h3></center></div>
                    <div class="panel-body">
                        <a href="{{ url('/necropsia/create') }}" class="btn btn-success btn-sm" title="agregar Necropsia">

                            <i class="fa fa-plus" aria-hidden="true"><span class="glyphicon glyphicon-plus"></span></i>

                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/necropsia', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
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
                                        <th>ID</th><th>Lugar</th><th>Fecha</th><th>Hora</th><th>Causa Muerte</th><th>Marcaje</th><th>Ejemplar</th><th>sexo</th><th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($necropsia as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->lugar }}</td><td>{{ $item->fecha }}</td><td>{{ $item->hora }}</td> <td>{{ $item->diagnosticoMuerte }}</td><td>{{ $item->marcajeEjemplar }}</td><td>{{ $item->nombrePropio }}</td><td>{{ $item->sexo }}</td>
                                        <td>
                                            <a href="{{ url('/necropsia/' . $item->id) }}" title="Ver Necropsia"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> <span class="glyphicon glyphicon-eye-open"></span></button></a>
                                            <a href="{{ url('/necropsia/' . $item->id . '/edit') }}" title="Editar Necropsia"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <span class="glyphicon glyphicon-pencil"></span></button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/necropsia', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i><span class="glyphicon glyphicon-trash"></span> ', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Borrar Necropsium',
                                                        'onclick'=>'return confirm("Confirmar borrado")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $necropsia->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
