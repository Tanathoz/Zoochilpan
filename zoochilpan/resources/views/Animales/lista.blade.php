
@extends('Layouts.principal')



@section('content')
    <div class="container">
        <div class="row">
            @if(Session::has('message'))

                <div class="alert alert-success alert-dismissible " role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    {{Session::get('message')}}
                </div>

            @elseif(Session::has('messageError'))

                <div class="alert alert-danger alert-dismissible " role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    {{Session::get('messageError')}}
                </div>

            @endif
    <div class="col-md-18">
        <div class="panel panel-default">
            <div class="panel-heading"><center><h3 class="opcion_iluminada">Gestión de Animales</h3></center></div>
            <div class="panel-body">
                <a href="{{ url('/animal/create') }}" class="btn btn-success btn-sm" title="Registrar animal">
                    <i class="fa fa-plus" aria-hidden="true"></i><span class="glyphicon glyphicon-plus">  </span>
                </a>

    {!! Form::open(['method' => 'GET', 'url' => '/animal', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
    <div class="input-group ">
        <input type="text" class="form-control" name="search" placeholder="Buscar...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <span class="glyphicon glyphicon-search">  </span>
                                    <i class="fa fa-search"> Buscar</i>
                                </button>
                            </span>
    </div>
    {!! Form::close() !!}
                <br/>
                <br/>
                <div class="table-responsive">
                   <table class="table table-borderless " >
        <thead>
            <th>Num</th>
            <th>Nombre Común</th>
            <th>Nombre Científico</th>
            <th>Clase</th>
            <th>Orden</th>
            <th>Familia</th>
            <th>Especie</th>
            <th>Habitat</th>
            <th>Acciones</th>
        </thead>

        @foreach($ejemplares as $ejemplare)
        <tbody>
           <td>{{$ejemplare->id}} </td>
           <td> {{$ejemplare->nombreComun}} </td>
           <td>{{$ejemplare->nombreCientifico}}  </td>
           <td> {{$ejemplare->clase}} </td>
           <td> {{$ejemplare->orden}} </td>
           <td> {{$ejemplare->familia}} </td>
           <td> {{$ejemplare->especie}} </td>
           <td> {{$ejemplare->habitat}} </td>

           <td>
               <a href="{{ url('/animal/' . $ejemplare->id.'') }}" title="Ver Animal"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> <span class="glyphicon glyphicon-eye-open">  </span></button></a>
               <a href="{{ url('/animal/' . $ejemplare->id . '/edit') }}" title="Editar Animal"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <span class="glyphicon glyphicon-pencil">  </span></button></a>

               {!! Form::open([
                                                 'method'=>'DELETE',
                                                 'url' => ['/animal', $ejemplare->id],
                                                 'style' => 'display:inline'
                                             ]) !!}
               {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i><span class="glyphicon glyphicon-trash">  </span>', array(
                       'type' => 'submit',
                       'class' => 'btn btn-danger btn-xs',
                       'title' => 'Borrar animal',
                       'onclick'=>'return confirm("Confirmar borrado")'
               )) !!}
               {!! Form::close() !!}
           </td>

        </tbody>
@endforeach
    </table>
                <div class="pagination-wrapper"> {!! $ejemplares->appends(['search' => Request::get('search')])->render() !!} </div>
            </div>
            </div>

        </div>
    </div>
</div>
    </div>
@endsection


