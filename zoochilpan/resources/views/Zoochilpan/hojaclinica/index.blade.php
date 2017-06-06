@extends('Layouts.principal')

@section('content')
    <div class="container">
        <div class="row">


            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><center><h3 class="opcion_iluminada">Gestión de Hojas Clinicas</h3></center></div>
                    <div class="panel-body">
                        <a href="{{ url('/hojaclinica/create') }}" class="btn btn-success btn-sm" title="Registrar hoja clinica">
                            <i class="fa fa-plus" aria-hidden="true"></i> <span class="glyphicon glyphicon-plus"></span>
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/hojaclinica', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
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
                                        <th>ID</th><th>Lugar</th><th>Fecha</th><th>Antecedentes</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($hojaclinica as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->lugar }}</td><td>{{ $item->fecha }}</td><td>{{ $item->antecedentes }}</td>
                                        <td>
                                            <a href="{{ url('/hojaclinica/' . $item->id) }}" title="Ver hojaclinica"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> <span class="glyphicon glyphicon-eye-open"></span></button></a>
                                            <a href="{{ url('/hojaclinica/' . $item->id . '/edit') }}" title="Editar hojaclinica"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><span class="glyphicon glyphicon-pencil"></span></button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/hojaclinica', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i><span class="glyphicon glyphicon-trash"></span>', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Borrar hojaclinica',
                                                        'onclick'=>'return confirm("Confirmar borrado?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $hojaclinica->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
