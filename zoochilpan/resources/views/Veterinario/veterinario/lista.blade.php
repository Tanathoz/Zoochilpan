@extends('Layouts.principal')

@if(Session::has('message'))
    <div class="alert alert-success alert-dismissible " role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{Session::get('message')}}
    </div>
@endif
@section('content')
    <table class="table ">
        <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Sexo</th>

        </thead>

        @foreach($veterinarios as $veterinario)
            <tbody>
            <td>{{$veterinario->id}} </td>
            <td>{{$veterinario->nombre}}  </td>
            <td> {{$veterinario->apellidoPaterno}} </td>
            <td> {{$veterinario->apellidoMaterno}} </td>
            <td> {{$veterinario->sexo}} </td>

            <td>   {!!  link_to_route('veterinario.edit', $title = 'Editar', $parameters = $veterinario->id, $attributes = ['class'=>'btn btn-primary']) !!}
            </td>
            </tbody>
        @endforeach
    </table>
    {!! $veterinarios->render() !!}
@stop