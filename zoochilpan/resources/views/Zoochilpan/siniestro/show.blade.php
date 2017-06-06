@extends('Layouts.principal')

@section('content')
    <div class="container">
        <div class="row">


            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Siniestro {{ $siniestro->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/siniestro') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> <span class="glyphicon glyphicon-arrow-left"></span></button></a>
                        <a href="{{ url('/cargarReporteSiniestro/' . $siniestro->idNecropsia.'/'.$siniestro->id) }}" title="Descargar PDF"><button class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <span class="glyphicon glyphicon-save-file"></span></button></a>

                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless" id="tblNecro">
                                <tbody>
                                    <tr>
                                        <th>Numero Siniestro</th><td>{{ $siniestro->id }}</td>
                                    </tr>

                                    <tr><th> Medida Preventiva </th><td> {{ $siniestro->medidaPreventiva }} </td></tr>
                                    <tr><th> Responsable de prevención </th><td> {{ $siniestro->nombreMedida }}&nbsp;&nbsp;{{ $siniestro->apellidoPaternoMedida }}&nbsp;&nbsp;{{ $siniestro->apellidoPaternoMedida }} </td></tr>



                                </tbody>
                            </table>
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

           var idN={{ $siniestro->idNecropsia }}
            $.ajax({
                type: 'get',
                url: '{!! URL::to('cargarUnaNecropsia')!!}',
                data: {'idNecropsia':idN},
                success: function (data) {
                    console.log('exito colega');
                    console.log(data)


                    $('#tblNecro tr:first').after('<tr ><th> Muestras </th> <td > ' + data[0].muestras +'</td></tr>');
                    $('#tblNecro tr:first').after('<tr ><th> Cavidad Abdominal </th> <td > ' + data[0].abdominal +'</td></tr>');
                    $('#tblNecro tr:first').after('<tr ><th> Cavidad Toracica </th> <td > ' + data[0].toracica +'</td></tr>');
                    $('#tblNecro tr:first').after('<tr ><th> Lesiones </th> <td > ' + data[0].lesiones +'</td></tr>')
                    $('#tblNecro tr:first').after('<tr ><th> Estado Físico </th> <td > ' + data[0].estadoFisico +'</td></tr>');
                    $('#tblNecro tr:first').after('<tr ><th> Diagnostico Muerte </th> <td > ' + data[0].diagnosticoMuerte +'</td></tr>');
                    $('#tblNecro tr:first').after('<tr ><th> Antecedentes </th> <td > ' + data[0].antecedentes +'</td></tr>');
                    $('#tblNecro tr:first').after('<tr ><th> Sexo </th> <td > ' + data[0].sexo +'</td></tr>');
                    $('#tblNecro tr:first').after('<tr ><th> Nombre Propio </th> <td > ' + data[0].nombrePropio +'</td></tr>');
                    $('#tblNecro tr:first').after('<tr ><th> Marcaje Ejemplar </th> <td > ' + data[0].marcajeEjemplar +'</td></tr>');
                    $('#tblNecro tr:first').after('<tr ><th> Hora </th> <td > ' + data[0].hora +'</td></tr>');
                    $('#tblNecro tr:first').after('<tr ><th> Fecha </th> <td > ' + data[0].fecha +'</td></tr>');
                    $('#tblNecro tr:first').after('<tr ><th> Lugar </th> <td > ' + data[0].lugar +'</td></tr>');


                    var idV=data[0].idVeterinario;
                    var idE=data[0].idEncargado;
                    var marcaje=data[0].marcajeEjemplar;
                    $.ajax({
                        type:'get',
                        url:'{!! URL::to('cargarDatosEjemplares')!!}',
                        data:{'marcaje':marcaje},
                        success:function(data){
                            console.log('exito colega')
                            $('#tblNecro tr:eq(3)').after('<tr ><th> Nombre Común </th> <td > ' + data[0].nombreComun +'</td></tr>');
                            $('#tblNecro tr:eq(4)').after('<tr ><th> Nombre Cientifico </th> <td > ' + data[0].nombreCientifico +'</td></tr>');

                            // $("#idAnimal").append('<option value="' + 2 + '">  cambiar animal</option>');
                        },
                        error:function(){
                            console.log('hay error')
                        }
                    });
                    $.ajax({
                        type: 'get',
                        url: '{!! URL::to('cargarDatosVeterinarios')!!}',
                        data: {'id': idV},
                        success: function (data) {
                            console.log('exito colega22')
                            console.log(data)
                            $('#tblNecro tr:eq(14)').after('<tr ><th> Nombre Veterinario </th> <td class="idFarm"> ' + data[0].nombre +'  ' +data[0].apellidoPaterno +'   ' + data[0].apellidoMaterno +'</td><td></td></tr>');

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
                            $('#tblNecro tr:eq(15)').after('<tr ><th> Nombre Encargado Areá </th> <td class="idFarm"> ' + data[0].nombre +'  ' +data[0].apellidoPaterno +'   ' + data[0].apellidoMaterno +'</td><td></td></tr>');
                        },
                        error: function () {
                            console.log('hay error')
                        }
                    });
                },
                error: function () {
                    console.log('hay error')
                }
            });
        });
    </script>

@endsection