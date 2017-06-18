@extends('Layouts.principal')

@section('content')


    {!! Form::model($animal,['route'=>['animal.update',$animal->id,'method'=>'PUT']]) !!}
    <input name="_method" type="hidden" value="PUT">
    <div class="col-md-9">
        <div class="panel panel-default">
         <div class="panel-heading">
             <h3 class="opcion_iluminada">Datos Del Animal :{{$animal->nombreComun}}</h3>
         </div>
             <div class="panel-body">


            @include('Animales.form.actualizar')
                 <a href="{{ url('/animal') }}" class="btn btn-success btn-sm" title="cerrar">
                     <i class="fa fa-plus" aria-hidden="true"></i> Cerrar
                 </a>

         </div>
        </div>

    {!! Form::close() !!}
</div>
@stop