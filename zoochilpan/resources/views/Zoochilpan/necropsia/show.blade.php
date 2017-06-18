@extends('Layouts.principal')

@section('content')
    <div class="container">
        <div class="row">
        <style>
            .glyphicon.glyphicon-save-file {
                font-size: 18px;
            }
        </style>
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading" id="marcaje"><center><h3 class="opcion_iluminada">Datos de  Necropsia  #{{ $necropsium->id }}</h3></center></div>
                    <div class="panel-body">

                        <a href="{{ url('/necropsia') }}" title="Volver"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> <span class="glyphicon glyphicon-arrow-left"></span></button></a>
                        <a href="{{ url('/cargarReporte/' . $necropsium->marcajeEjemplar.'/'.$necropsium->id.'/'.$necropsium->idVeterinario.'/'.$necropsium->idEncargado ) }}" title="Descargar en PDF"><button class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <span class="glyphicon glyphicon-save-file"></span></button></a>

                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table id="tblNecro" class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $necropsium->id }}</td>
                                    </tr>
                                    <tr><th> Lugar </th><td class="cos"> {{ $necropsium->lugar }} </td></tr><tr><th> Fecha </th><td> {{ $necropsium->fecha }} </td></tr><tr><th> Marcaje </th><td> {{ $necropsium->marcajeEjemplar }} </td><tr><th> Hora </th><td> {{ $necropsium->hora }} </td></tr><tr><th> Antecedentes </th><td> {{ $necropsium->antecedentes }} </td></tr>
                                    <tr><th> Diagnostico muerte </th><td> {{ $necropsium->diagnosticoMuerte }} </td></tr><tr><th> Estado Fisico </th><td> {{ $necropsium->estadoFisico }} </td></tr><tr><th> Lesiones </th><td> {{ $necropsium->lesiones }} </td></tr><tr><th> Toracica </th><td> {{ $necropsium->toracica }} </td></tr>
                                    <tr><th> abdominal </th><td> {{ $necropsium->abdominal }} </td></tr><tr><th> Muestras </th><td> {{ $necropsium->muestras }} </td></tr>
                                    <tr><th> Nombre Encargado  </th><td> {{ $necropsium->idEncargado }} </td></tr>
                                </tbody>
                            </table>
                            <input type="hidden" name="bandera" id="bandera" value="{{$necropsium->marcajeEjemplar}}">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
    <script>
        $(document).ready(function () {

            var idV={{$necropsium->idVeterinario}};
            var idE={{$necropsium->idEncargado}}

            $.ajax({
                type: 'get',
                url: '{!! URL::to('cargarDatosVeterinarios')!!}',
                data: {'id': idV},
                success: function (data) {
                    console.log('exito colega22')
                    console.log(data)
                    $('#tblNecro tr:last').before('<tr ><th> Nombre Veterinario </th> <td class="idFarm"> ' + data[0].nombre +'  ' +data[0].apellidoPaterno +'   ' + data[0].apellidoMaterno +'</td><td></td></tr>');
                    $('#tblNecro tr:last').empty();
                },
                error: function () {
                    console.log('hay error')
                }
            });
            $.ajax({
                type: 'get',
                url: '{!! URL::to('cargarDatosVeterinarios')!!}',
                data: {'id': idE},
                success: function (data) {
                    console.log('exito colega22')
                    console.log(data)
                    //$('table:eq(0)').append(tr);
                   // $('#tblNecro tr:eq(3)').before('<tr ><th> Nombre Encargado Areá </th> <td class="idFarm"> ' + data[0].nombre +'  ' +data[0].apellidoPaterno +'   ' + data[0].apellidoMaterno +'</td><td></td></tr>');

                     $('#tblNecro tr:last').after('<tr ><th> Nombre Encargado Areá </th> <td class="idFarm"> ' + data[0].nombre +'  ' +data[0].apellidoPaterno +'   ' + data[0].apellidoMaterno +'</td><td></td></tr>');

                },
                error: function () {
                    console.log('hay error')
                }
            });

            var marcaje=$("#bandera").val();

            $.ajax({
                type:'get',
                url:'{!! URL::to('cargarDatosEjemplares')!!}',
                data:{'marcaje':marcaje},
                success:function(data){
                    console.log('exito colega')

                    $('#tblNecro tr:eq(3)').after('<tr ><th> Nombre Común </th> <td > ' + data[0].nombreComun +'</td></tr>');
                    $('#tblNecro tr:eq(4)').after('<tr ><th> Nombre Cientifico </th> <td > ' + data[0].nombreCientifico +'</td></tr>');
                    $('#tblNecro tr:eq(5)').after('<tr ><th> Nombre Propio </th> <td > ' + data[0].nombrePropio +'</td></tr>');
                    $('#tblNecro tr:eq(6)').after('<tr ><th> Sexo </th> <td > ' + data[0].sexo +'</td></tr>');

                },
                error:function(){
                    console.log('hay error')
                }
            });

        });
    </script>

@endsection