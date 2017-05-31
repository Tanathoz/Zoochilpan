@extends('Layouts.principal')

@section('content')
    <div class="container">
        <div class="row">


            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Dieta</div>
                    <div class="panel-body">
                        <a href="{{ url('/dieta/create') }}" class="btn btn-success btn-sm" title="Registrar Dieta">
                            <i class="fa fa-plus" aria-hidden="true"><span class="glyphicon glyphicon-plus"></span></i>
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/dieta', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
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
                                        <th>Nombre Común</th> <th>Nombre Cientifíco</th><th>Cantidad</th><th>Alimento</th><th>Horario</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($dieta as $item)
                                    <tr>
                                        <td>{{ $item->nombreComun }}</td>
                                        <td>{{ $item->nombreCientifico }}</td> <td>{{ $item->cantidad }}</td><td>{{ $item->alimento }}</td><td>{{ $item->horario }}</td>
                                        <td>

                                            <a href="{{ url('/dieta/' . $item->idAnimal . '/edit') }}" title="Editar Dieta"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <span class="glyphicon glyphicon-pencil"></span></button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/dieta', $item->idAnimal],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> <span class="glyphicon glyphicon-trash"></span>', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Borrar Dieta',
                                                        'onclick'=>'return confirm("Confirmar Borrado?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $dieta->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
