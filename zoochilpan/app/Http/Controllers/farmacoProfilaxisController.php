<?php

namespace Zoochilpan\Http\Controllers;

use Illuminate\Http\Request;
use Zoochilpan\Http\Requests;
use Zoochilpan\Http\Controllers\Controller;

use Zoochilpan\farmacoProfilaxis;
use DB;
use Session;
class farmacoProfilaxisController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function store(Request $request)
    {
        try {
            if ($request->ajax()) {
                farmacoProfilaxis::create([
                    'idProfilaxis' => $request['idProfilaxis'],
                    'idFarmaco' => $request['idFarmaco'],
                    'dosis' => $request['dosis'],
                    'frecuencia' => $request['frecuencia'],
                    'fechaAplicacion' => $request['fechaAplicacion'],
                ]);
                return response()->json([
                    "mensaje" => "guardado"
                ]);
            }
        } catch (\Illuminate\Database\QueryException $e) {
            Session::flash('messageError','No se pudo guardar revise que ha llenado todos los datos ');
            return Redirect::to('/profilaxis');

        } catch (PDOException $e) {
            dd($e);
        }
    }



    public function guardaFarmaco(Request $request)
    {
        if ($request->ajax()) {
            farmacoProfilaxis::create($request->all());
            return response()->json([
                "mensaje" => $request->all()
            ]);
        }
    }

    public function numeroFarmaco(Request $request)
    {
        $numFarmaco=DB::table('farmacoprofilaxis')
            ->select(DB::raw('count(*) as idPro, idProfilaxis'))
           ->where('idProfilaxis','=',$request->idProfilaxis )-> groupBy('idProfilaxis')->get();
       return response()->json($numFarmaco);

    }
    public function getFarmacosProfilaxis(Request $request)
    {
        $farmaco=farmacoProfilaxis::join('farmacos','idFarmaco','=','farmacos.id')
        ->select('idFarmaco','dosis','frecuencia','fechaAplicacion','farmacos.nombre','farmacos.via')
            ->where('idProfilaxis',$request->idProfilaxis)->take(100)->get();
        return response()->json($farmaco);

    }
    public function DeleteFarmacoProfilaxis(Request $request)
    {
        DB::table('farmacoprofilaxis')->where('idProfilaxis', '=', $request->idProfilaxis)
            ->where('idFarmaco', '=', $request->idFarmaco)->delete();

    }

    public function DeleteTodosFarmacos(Request $request)
    {
        DB::table('farmacoprofilaxis')->where('idProfilaxis', '=', $request->idProfilaxis)
            ->delete();
    }
    public function UpdateFarmacoProfilaxis(Request $request)
    {
        try {
        DB::table('farmacoprofilaxis')
            ->where('idProfilaxis','=',$request->idProfilaxis)
            ->where('idFarmaco','=',$request->idFarmaco)
            ->update(['dosis' => $request->dosis, 'frecuencia'=>$request->frecuencia, 'fechaAplicacion'=>$request->fechaAplicacion]);
        } catch (\Illuminate\Database\QueryException $e) {
            Session::flash('messageError','No se pudo guardar revise que ha llenado todos los datos ');
            return Redirect::to('/profilaxis');

        } catch (PDOException $e) {
            dd($e);
        }
    }



    //    DB::table('farmacoprofilaxis')->insert(
      //      ['idProfilaxis' => $request->idProfilaxis, 'idFarmaco'=>$request->idFarmaco,'dosis'=>$request->dosis, 'frecuencia'=>$request->frecuencia,'fechaAplicacion'=>$request->fechaAplicacion ]
      //  );
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
    } */
}
