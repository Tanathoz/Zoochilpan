@extends('Layouts.principal')

@section('content')
    <div class="container">
        <div class="row">


            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading"><center><h3 class="opcion_iluminada">Gestión de Farmacos</h3></center></div>
                    <div class="panel-body">
                        <a href="{{ url('/farmaco/create') }}" class="btn btn-success btn-sm" title="Agregar farmaco">
                            <i class="fa fa-plus" aria-hidden="true"></i><span class="glyphicon glyphicon-plus">  </span>
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/farmaco', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
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
                                        <th>ID</th><th>Nombre</th><th>Via</th><th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($farmaco as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nombre }}</td><td>{{ $item->via }}</td>
                                        <td>

                                            <a href="{{ url('/farmaco/' . $item->id . '/edit') }}" title="Editar farmaco"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <span class="glyphicon glyphicon-pencil">  </span></button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/farmaco', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i><span class="glyphicon glyphicon-trash">  </span> ', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Borrar farmaco',
                                                        'onclick'=>'return confirm("Confirmar borrado?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $farmaco->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
