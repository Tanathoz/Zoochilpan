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
            <th>Num</th>
            <th>Nombre Común</th>
            <th>Nombre Cientifico</th>
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
        </thead>

        @foreach($ejemplares as $ejemplare)
        <tbody>
           <td>{{$ejemplare->id}} </td>
           <td>{{$ejemplare->nombreCientifico}}  </td>
           <td> {{$ejemplare->nombreComun}} </td>
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
           </td>
        </tbody>
@endforeach
    </table>

{!! $ejemplares->render() !!}

@stop


