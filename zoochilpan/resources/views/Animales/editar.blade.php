@extends('Layouts.principal')

@section('content')

    <div class="container">
        <div class="row">

    <input name="_method" type="hidden" value="PUT">
    <div class="col-md-10">
        <div class="panel panel-default">
         <div class="panel-heading">
          <center>  <h3 class="opcion_iluminada">Editar el animal :{{$animal->nombreComun}}</h3></center>
         </div>
             <div class="panel-body">
                 <a href="{{ url('/animal') }}" title="Volver"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> <span class="glyphicon glyphicon-arrow-left"></span></button></a>

                 {!! Form::model($animal, [
                                                         'method' => 'PATCH',
                                                         'url' => ['/animal', $animal->id],
                                                         'class' => 'form-horizontal',
                                                         'files' => true
                                                     ]) !!}
            @include('Animales.form.actualizar', ['ButtonText' => 'Actualizar'])

                 {!! Form::close() !!}
         </div>
        </div>

       </div>
     </div>
    </div>

@endsection