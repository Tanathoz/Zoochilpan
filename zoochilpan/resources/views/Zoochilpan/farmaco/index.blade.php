@extends('Layouts.principal')

@section('content')
    <div class="container">
        <div class="row">


            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Farmaco</div>
                    <div class="panel-body">
                        <a href="{{ url('/Zoochilpan/farmaco/create') }}" class="btn btn-success btn-sm" title="Agregar farmaco">
                            <i class="fa fa-plus" aria-hidden="true"></i> <span class="glyphicon glyphicon-plus-sign"> Agregar</span>
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/Zoochilpan/farmaco', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
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
                                        <th>ID</th><th>Nombre</th><th>Via</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($farmaco as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nombre }}</td><td>{{ $item->via }}</td>
                                        <td>
                                            <a href="{{ url('/Zoochilpan/farmaco/' . $item->id) }}" title="View farmaco"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/Zoochilpan/farmaco/' . $item->id . '/edit') }}" title="Edit farmaco"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/Zoochilpan/farmaco', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete farmaco',
                                                        'onclick'=>'return confirm("Confirm delete?")'
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
