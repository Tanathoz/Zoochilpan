<?php

namespace Zoochilpan\Http\Controllers;

use Zoochilpan\Http\Requests;
use Zoochilpan\Http\Controllers\Controller;

use Zoochilpan\farmacoClinica;
use Illuminate\Http\Request;
use Session;
use DB;

class farmacoClinicaController extends Controller
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
            $farmacoclinica = farmacoClinica::where('idProfilaxis', 'LIKE', "%$keyword%")
				->orWhere('idFarmaco', 'LIKE', "%$keyword%")
				->orWhere('dosis', 'LIKE', "%$keyword%")
				->orWhere('frecuencia', 'LIKE', "%$keyword%")
				
                ->paginate($perPage);
        } else {
            $farmacoclinica = farmacoClinica::paginate($perPage);
        }

        return view('zoochilpan.farmaco-clinica.index', compact('farmacoclinica'));
    }
    public function guardaFarmacos(Request $request)
    {

        if ($request->ajax()) {
            farmacoClinica::create($request->all());
           return response()->json([
                "mensaje" => $request->all()
            ]);
       }
    }
    public function getFarmacosClinica(Request $request)
    {
        $farmaco=farmacoClinica::join('farmacos','idFarmaco','=','farmacos.id')
            ->select('idFarmaco','dosis','frecuencia','fechaAplicacion','farmacos.nombre','farmacos.via')
            ->where('idClinica',$request->idClinica)->take(100)->get();
        return response()->json($farmaco);

    }
    public function numeroFarmaco(Request $request)
    {
        $numFarmaco=DB::table('farmaco_clinicas')
            ->select(DB::raw('count(*) as idCli, idClinica'))
            ->where('idClinica','=',$request->idClinica )-> groupBy('idClinica')->get();
        return response()->json($numFarmaco);

    }

    public function DeleteFarmacoClinica(Request $request)
    {
        DB::table('farmaco_clinicas')->where('idClinica', '=', $request->idClinica)
            ->where('idFarmaco', '=', $request->idFarmaco)->delete();

    }
    public function DeleteTodosFarmacos(Request $request)
    {
        DB::table('farmaco_clinicas')->where('idClinica', '=', $request->idClinica)
            ->delete();
    }
    public function UpdateFarmacoClinica(Request $request)
    {
        DB::table('farmaco_clinicas')
            ->where('idClinica','=',$request->idClinica)
            ->where('idFarmaco','=',$request->idFarmaco)
            ->update(['dosis' => $request->dosis, 'frecuencia'=>$request->frecuencia, 'fechaAplicacion'=>$request->fechaAplicacion]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('zoochilpan.farmaco-clinica.create');
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
        
        farmacoClinica::create($requestData);

        Session::flash('flash_message', 'farmacoClinica added!');

        return redirect('farmaco-clinica');
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
        $farmacoclinica = farmacoClinica::findOrFail($id);

        return view('zoochilpan.farmaco-clinica.show', compact('farmacoclinica'));
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
        $farmacoclinica = farmacoClinica::findOrFail($id);

        return view('zoochilpan.farmaco-clinica.edit', compact('farmacoclinica'));
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
        
        $farmacoclinica = farmacoClinica::findOrFail($id);
        $farmacoclinica->update($requestData);

        Session::flash('flash_message', 'farmacoClinica updated!');

        return redirect('farmaco-clinica');
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
        farmacoClinica::destroy($id);

        Session::flash('flash_message', 'farmacoClinica deleted!');

        return redirect('farmaco-clinica');
    }
}
