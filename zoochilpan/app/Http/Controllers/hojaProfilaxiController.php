<?php

namespace Zoochilpan\Http\Controllers;

use Zoochilpan\Http\Requests;
use Zoochilpan\Http\Controllers\Controller;
use DB;
use Zoochilpan\hojaProfilaxi;
use Illuminate\Http\Request;
use Session;

class hojaProfilaxiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
           // $hojaprofilaxi = hojaProfilaxi::where('lugar', 'LIKE', "%$keyword%")
		//		->orWhere('fecha', 'LIKE', "%$keyword%")
		//		->orWhere('tratamiento', 'LIKE', "%$keyword%")
		//		->orWhere('fechaAplicacion', 'LIKE', "%$keyword%")
	   //			->orWhere('observaciones', 'LIKE', "%$keyword%")
		//		->orWhere('comentarios', 'LIKE', "%$keyword%")
          //      ->paginate($perPage);

            $hojaprofilaxi = hojaProfilaxi::join('ejemplares', 'marcajeEjemplar', '=', 'ejemplares.marcaje')
                ->select('id','lugar','fecha','marcajeEjemplar','tratamiento','fechaAplicacion', 'ejemplares.nombrePropio','ejemplares.sexo')
                ->where('lugar', 'LIKE', "%$keyword%")
                ->orWhere('fecha', 'LIKE', "%$keyword%")
                ->orWhere('tratamiento', 'LIKE', "%$keyword%")
                ->orWhere('fechaAplicacion', 'LIKE', "%$keyword%")
                ->orWhere('ejemplares.nombrePropio','LIKE', "%$keyword%" )
                ->orWhere('ejemplares.sexo', 'LIKE', "%$keyword%")
                ->paginate($perPage);

        } else {
            //$ejemplar = Ejemplar::join('animal', 'idAnimal', '=', 'animal.id')
              //  ->select('marcaje','fechaNacimiento','fechaAlta','sexo','nombrePropio', 'animal.nombreComun', 'animal.especie','animal.nombreCientifico')
               // ->paginate($perPage);

            $hojaprofilaxi = hojaProfilaxi::join('ejemplares', 'marcajeEjemplar','=','ejemplares.marcaje')
            ->select('id','lugar','fecha','marcajeEjemplar','tratamiento','fechaAplicacion','ejemplares.nombrePropio','ejemplares.sexo')
            ->paginate($perPage);
        }

        return view('Zoochilpan.hoja-profilaxi.index', compact('hojaprofilaxi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */

    public function getDatosProfilaxis(Request $request ){

        $profilaxis=hojaProfilaxi::join('ejemplares', 'marcajeEjemplar', '=', 'ejemplares.marcaje')
            ->select('lugar','fecha','marcajeEjemplar','idVeterinario','idEncargado','tratamiento','fechaAplicacion','fechaAplicacion','ejemplares.nombrePropio','ejemplares.sexo')
            ->where('id',$request->id)->take(100)->get();
        return response()->json($profilaxis);

    }
    public function create()
    {
        return view('Zoochilpan.hoja-profilaxi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        
        hojaProfilaxi::create($requestData);

        Session::flash('flash_message', 'hojaProfilaxi agregado!');

        return redirect('/profilaxis');

    }

    public function guardaFarmaco(){
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $hojaprofilaxi = hojaProfilaxi::findOrFail($id);

        return view('Zoochilpan.hoja-profilaxi.show', compact('hojaprofilaxi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $hojaprofilaxi = hojaProfilaxi::findOrFail($id);

        return view('Zoochilpan.hoja-profilaxi.edit', compact('hojaprofilaxi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        
        $requestData = $request->all();
        
        $hojaprofilaxi = hojaProfilaxi::findOrFail($id);
        $hojaprofilaxi->update($requestData);

        Session::flash('flash_message', 'hojaProfilaxi updated!');

        return redirect('/profilaxis');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $cf=csrf_token();
        hojaProfilaxi::destroy($id);
        DB::table('farmacoprofilaxis')->where('idProfilaxis', '=', $id)
            ->delete();
        Session::flash('flash_message', 'hojaProfilaxis borrada!');
        return redirect('/profilaxis');
    }

    public function getMaxId(Request $request ){
       $profilaxis=hojaProfilaxi::select('id')->orderBy('id','desc')->take(1)->get();
        return response()->json($profilaxis);

    }



}
