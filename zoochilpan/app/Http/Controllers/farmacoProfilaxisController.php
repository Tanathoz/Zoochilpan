<?php

namespace Zoochilpan\Http\Controllers;

use Illuminate\Http\Request;
use Zoochilpan\Http\Requests;
use Zoochilpan\Http\Controllers\Controller;

use Zoochilpan\farmacoProfilaxis;

use Session;
class farmacoProfilaxisController extends Controller
{
    public function store(Request $request)
    {
        if($request->ajax()){
            return response()->json([
                "mensaje"=>$request->all()
            ]);
        }
    }



    public function guardaFarmaco(Request $request){


if($request->ajax()){
    return response()->json([
        "mensaje"=>$request->all()
    ]);
}

        DB::table('farmacoprofilaxis')->insert(
            ['idProfilaxis' => $request->idProfilaxis, 'idFarmaco'=>$request->idFarmaco,'dosis'=>$request->dosis, 'frecuencia'=>$request->frecuencia,'fechaAplicacion'=>$request->fechaAplicacion ]
        );
        /*
        $bd_host = "127.0.0.1";
        $bd_usuario = "root";
        $bd_password = "12345";
        $bd_base = "zoochilpan";

        $conexion = mysqli_connect ($bd_host, $bd_usuario, $bd_password,$bd_base);
//mysql_select_db ($bd_base, $conexion);
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        else{
            echo "todo bien";
        }
        $idFarmaco=$_POST['idFarmaco'];
        $idProfilaxis=$_POST['idProfilaxis'];
        $dosis=$_POST['dosis'];
        $frecuencia=$_POST['frecuencia'];
        $fechaAplicacion=$_POST['fechaAplicacion'];


        mysqli_query($conexion,"insert into farmacoprofilaxis values('".$idProfilaxis."','".$idFarmaco."','".$dosis."','".$frecuencia."','".$fechaAplicacion."')");
        mysqli_close($conexion);
    } */}
}
