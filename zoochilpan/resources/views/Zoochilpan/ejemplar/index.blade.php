@extends('Layouts.principal')

@section('content')
    <div id="tudiv">
        <div class="container" >
            <div class="row">


                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-heading"><center><h3 class="opcion_iluminada">Gestión de Ejemplares</h3></center></div>
                        <div class="panel-body">


                            <a href="{{ url('/ejemplar/create') }}" class="btn btn-success btn-sm" title="Agregar Ejemplar">
                                <i class="fa fa-plus" aria-hidden="true"></i> <span class="glyphicon glyphicon-plus"></span>
                            </a>

                            {!! Form::open(['method' => 'GET', 'url' => '/ejemplar/', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Buscar...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <span class="glyphicon glyphicon-search">  </span>
                                    <i class="fa fa-search"> </i>
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
                                        <th>Nombre Común</th>  <th>Nombre Cientifíco</th><th>Marcaje</th><th>FechaNacimiento</th><th>FechaIngreso</th><th>Sexo</th><th>Nombre propio</th><th>Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>



                                    @foreach($ejemplar as $item)
                                        <tr>

                                            <td>{{ $item->nombreComun }}</td>
                                            <td>{{ $item->especie }}</td>
                                            <td>{{ $item->marcaje }}</td>
                                            <td>{{ $item->fechaNacimiento }}</td><td>{{ $item->fechaAlta }}</td><td>{{ $item->sexo }}</td>
                                            <td>{{ $item->nombrePropio }}</td>

                                            <td>

                                                <a href="{{ url('/ejemplar/' . $item->marcaje . '/edit') }}" title="Editar Ejemplar"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <span class="glyphicon glyphicon-pencil">  </span></button></a>

                                                {!! Form::open([
                                                    'method'=>'DELETE',
                                                    'url' => ['/ejemplar', $item->marcaje],
                                                    'style' => 'display:inline'
                                                ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i><span class="glyphicon glyphicon-trash">  </span>', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Borrar Ejemplar',
                                                        'onclick'=>'return confirm("Confirmar borrado?")'
                                                )) !!}
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="pagination-wrapper"> {!! $ejemplar->appends(['search' => Request::get('search')])->render() !!} </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection