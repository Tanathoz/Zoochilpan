@extends('Layouts.principal')

@section('content')
    <div class="container">
        <div class="row">


            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading"><center><h3 class="opcion_iluminada">Gestión de Dietas de Ejemplar</h3></center></div>
                    <div class="panel-body">
                        <a href="{{ url('/dietaEjemplar/create') }}" class="btn btn-success btn-sm" title="Registrar dietaEjemplar">
                            <i class="fa fa-plus" aria-hidden="true"><span class="glyphicon glyphicon-plus"></span></i>
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/dietaEjemplar', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
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
                                        <th>MarcajeEjemplar</th> <th>Nombre Ejemplar</th><th>Sexo</th><th>FechaCambio</th> <th>CausaCambio</th><th>Alimento</th><th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($dietaejemplar as $item)
                                    <tr>

                                        <td>{{ $item->marcajeEjemplar }}</td> <td>{{ $item->nombrePropio }}</td><td>{{ $item->sexo }}</td><td>{{ $item->fechaCambio }}</td><td>{{ $item->causaCambio }}</td><td>{{ $item->alimento }}</td>
                                        <td>

                                            <a href="{{ url('/dietaEjemplar/' . $item->marcajeEjemplar . '/edit') }}" title="Edit dietaEjemplar"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <span class="glyphicon glyphicon-pencil"></span></button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/dietaEjemplar', $item->marcajeEjemplar],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> <span class="glyphicon glyphicon-trash"></span>', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete dietaEjemplar',
                                                        'onclick'=>'return confirm("Confirmar borrado?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $dietaejemplar->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
