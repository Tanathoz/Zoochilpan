@extends('Layouts.principal')

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
    <table class="table " >
        <thead>
            <th>Animal</th>
            <th>Marcaje</th>
            <th>Fecha Nacimiento</th>
            <th>Fecha Alta</th>
            <th>Sexo</th>
            <th>Nombre Propio</th>
            <th>Acciones</th>
        </thead>

        @foreach($ejemplares as $ejemplare)
        <tbody>
           <td>{{$ejemplare->idAnimal}} </td>
           <td>{{$ejemplare->marcaje}}  </td>
           <td> {{$ejemplare->fechaNacimiento}} </td>
           <td> {{$ejemplare->fechaIngreso}} </td>
           <td> {{$ejemplare->sexo}} </td>
           <td> {{$ejemplare->alias}} </td>

           <td>   {!!  link_to_route('animal.edit', $title = 'Editar', $parameters = $ejemplare->id, $attributes = ['class'=>'btn btn-primary']) !!}
               {!!link_to_route('animal.destroy', $title = 'Eliminar', $parameters = $ejemplare->id, $attributes = ['class'=>'btn btn-danger']) !!}
           </td>

        </tbody>
@endforeach
    </table>

{!! $ejemplares->render() !!}

@stop


