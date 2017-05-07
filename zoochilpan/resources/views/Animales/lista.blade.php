
@extends('Layouts.principal')
@section('menu')
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

@section('content')

    <h2> Gestión de Animales</h2>

    <br>
    {!! Form::open(['method' => 'GET', 'url' => '/animal', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
    <div class="input-group col-8">
        <input type="text" class="form-control" name="search" placeholder="Buscar...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <span class="glyphicon glyphicon-search">  </span>
                                    <i class="fa fa-search"> Buscar</i>
                                </button>
                            </span>
    </div>
    {!! Form::close() !!}
    <br>
    <table class="table " >
        <thead>
            <th>Num</th>
            <th>Nombre Común</th>
            <th>Nombre Científico</th>
            <th>Clase</th>
            <th>Orden</th>
            <th>Familia</th>
            <th>Especie</th>
            <th>Habitat</th>
            <th>Gestacion</th>
            <th>Camada</th>
            <th>Longevidad</th>
            <th>Peso</th>
            <th>Ubicación</th>
            <th>Alimentación</th>
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
           <td> {{$ejemplare->gestacion}} </td>
           <td> {{$ejemplare->camada}} </td>
           <td> {{$ejemplare->longevidad}} </td>
           <td> {{$ejemplare->peso}} </td>
           <td> {{$ejemplare->ubicacionGeografica}} </td>
           <td> {{$ejemplare->Alimentacion}} </td>
           <td>   {!!  link_to_route('animal.edit', $title = 'Editar', $parameters = $ejemplare->id, $attributes = ['class'=>'btn btn-primary']) !!}
               {!! Form::open([
                                                 'method'=>'DELETE',
                                                 'url' => ['/animal', $ejemplare->id],
                                                 'style' => 'display:inline'
                                             ]) !!}
               {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>Borrar', array(
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

{!! $ejemplares->render() !!}

@stop


