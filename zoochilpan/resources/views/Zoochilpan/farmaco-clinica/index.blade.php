@extends('Layouts.principal')

@section('content')
    <div class="container">
        <div class="row">


            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Farmacoclinica</div>
                    <div class="panel-body">
                        <a href="{{ url('/farmaco-clinica/create') }}" class="btn btn-success btn-sm" title="Add New farmacoClinica">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/farmaco-clinica', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
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
                                        <th>ID</th><th>IdProfilaxis</th><th>IdFarmaco</th><th>Dosis</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($farmacoclinica as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->idProfilaxis }}</td><td>{{ $item->idFarmaco }}</td><td>{{ $item->dosis }}</td>
                                        <td>
                                            <a href="{{ url('/farmaco-clinica/' . $item->id) }}" title="View farmacoClinica"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/farmaco-clinica/' . $item->id . '/edit') }}" title="Edit farmacoClinica"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/farmaco-clinica', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete farmacoClinica',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $farmacoclinica->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
