@extends('Layouts.principal')

@section('content')
    <div class="container">
        <div class="row">


            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading"><center><h3 class="opcion_iluminada">Gestión de Siniestros</h3></center></div>
                    <div class="panel-body">
                        <a href="{{ url('/siniestro/create') }}" class="btn btn-success btn-sm" title="Registrar Siniestro">
                            <i class="fa fa-plus" aria-hidden="true"></i> <span class="glyphicon glyphicon-plus"></span>
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/siniestro', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
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
                                        <th>ID</th><th>Causa Muerte</th><th>Fecha</th><th>Hora</th><th>Marcaje</th><th>MedidaPreventiva</th><th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($siniestro as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->diagnosticoMuerte }}</td><td>{{ $item->fecha }}</td><td>{{ $item->hora }}</td><td>{{ $item->marcajeEjemplar }}</td><td>{{ $item->medidaPreventiva }}</td>
                                        <td>
                                            <a href="{{ url('/siniestro/' . $item->id) }}" title="Ver Siniestro"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> <span class="glyphicon glyphicon-eye-open"></span></button></a>
                                            <a href="{{ url('/siniestro/' . $item->id . '/edit') }}" title="Editar Siniestro"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>  <span class="glyphicon glyphicon-pencil"></span></button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/siniestro', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> <span class="glyphicon glyphicon-trash"></span> ', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Borrar Siniestro',
                                                        'onclick'=>'return confirm("Confirmar Borrado?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $siniestro->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
