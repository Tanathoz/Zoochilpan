<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/public/plugin/js/bootstrap.min.js">
    <title>pdf</title>
</head>
<body>
<style>
    body {
        margin: 0;
        leftmargin:0;


    }
    div{
        text-align: center;
        margin-left: 2.5em;
    }
    div.centraTabla{
        text-align: center;
    }
    div.centraTabla table {
        margin-left: 50.0em;
        text-align: left;
    }

    table {
        margin:auto;
        margin-left: 10.0em;
    }
    @page {

        margin-left: 0.0em;
    }

    footer {
        background-color: white;
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 100px;
        color: #080808;
        margin: 0;
        margin-left: 0.0em;
    }
</style>
<header>

    <div class="centrardiv"><img align="center" src="logos.png" width="780" height="100" border=0>

    </div>
</header>
<center><h2>Datos del siniestro</h2></center>
<div style="border: 2pt solid #000000;">
    <div class="centraTabla">
        <table style="text-align: left; margin: auto;" border="1">
            @foreach($necropsia as $necropsium )




                <tr><th> ID </th><td> <h4>{{ $necropsium->id }}</h4> </td></tr>
                <tr><th> Lugar </th><td> {{ $necropsium->lugar }} </td></tr>
                <tr><th> Fecha </th><td> <h4>{{ $fecha = date('d/m/Y',strtotime( $necropsium->fecha)) }}</h4> </td></tr>
                <tr><th> Hora </th><td> {{ $necropsium->hora }} </td></tr>

                <tr><th> Nombre Común </th><td> {{ $necropsium->nombreComun }} </td></tr>
                <tr><th> Nombre Cientifico </th><td> {{ $necropsium->nombreCientifico }} </td></tr>

                <tr><th> Nombre </th><td> {{ $necropsium->nombrePropio }} </td></tr>
                <tr><th> sexo </th><td> {{ $necropsium->sexo }} </td></tr>

                <tr><th> Antecedentes </th><td> {{ $necropsium->antecedentes }} </td></tr>
                <tr><th> Diagnostico muerte </th><td> {{ $necropsium->diagnosticoMuerte }} </td></tr><tr><th> Estado Fisico </th><td> {{ $necropsium->estadoFisico }} </td></tr><tr><th> Lesiones </th><td> {{ $necropsium->lesiones }} </td></tr><tr><th> Toracica </th><td> {{ $necropsium->toracica }} </td></tr>
                <tr><th> abdominal </th><td> {{ $necropsium->abdominal }} </td></tr><tr><th> Muestras </th><td> {{ $necropsium->muestras }} </td></tr>


                <tr><th> Nombre Veterinario : </th><td> {{ $necropsium->nombre }}&nbsp;&nbsp;{{ $necropsium->apellidoPaterno }}&nbsp;&nbsp; {{ $necropsium->apellidoMaterno }} </td><td>    </td></tr>
                <tr><th> Nombre Encargado aréa médica : </th><td> {{ $encargado[0]->nombre }}&nbsp;&nbsp;{{ $encargado[0]->apellidoPaterno }}&nbsp;&nbsp;{{ $encargado[0]->apellidoMaterno }} </td> <td>  </td></tr>
                <tr><th> Medida Preventiva </th><td> {{ $necropsium->medidaPreventiva }} </td></tr>
                <tr><th> Responsable Prevención : </th><td> {{ $necropsium->nombreMedida }}&nbsp;&nbsp;{{ $necropsium->apellidoPaternoMedida }}&nbsp;&nbsp; {{ $necropsium->apellidoMaternoMedida }} </td><td>    </td></tr>


            @endforeach

        </table>
    </div>

</div>
<footer>
    <img src="footer.PNG" width=820" height="50"/>
    <center> <p>Zoológico Zoochilpan.- Calle Cerrada de Arturo Martínez Adame S/N,  esquina Moisés Guevara, Centro,
            <br>  C.P. 39000. Chilpancingo, Guerrero.      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;              Correo Electrónico: zoologicozoochilpan@hotmail.com
        </p></center>
</footer>
</body>
</html>