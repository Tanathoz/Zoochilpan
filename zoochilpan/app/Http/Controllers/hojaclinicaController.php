<?php

namespace Zoochilpan\Http\Controllers;

use Zoochilpan\Http\Requests;
use Zoochilpan\Http\Controllers;

use Zoochilpan\hojaclinica;
use Illuminate\Http\Request;
use Session;

class hojaclinicaController extends Controller
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
            $hojaclinica = hojaclinica::where('lugar', 'LIKE', "%$keyword%")
				->orWhere('fecha', 'LIKE', "%$keyword%")
				->orWhere('antecedentes', 'LIKE', "%$keyword%")
				->orWhere('diagnostico', 'LIKE', "%$keyword%")
				->orWhere('tratamiento', 'LIKE', "%$keyword%")
				->orWhere('fechaAplicacion', 'LIKE', "%$keyword%")
				->orWhere('observaciones', 'LIKE', "%$keyword%")
				->orWhere('comentarios', 'LIKE', "%$keyword%")
				->orWhere('resultados', 'LIKE', "%$keyword%")
				->orWhere('marcajeEjemplar', 'LIKE', "%$keyword%")
				->orWhere('idEncargado', 'LIKE', "%$keyword%")
				
                ->paginate($perPage);
        } else {
            $hojaclinica = hojaclinica::paginate($perPage);
        }

        return view('Zoochilpan.hojaclinica.index', compact('hojaclinica'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('Zoochilpan.hojaclinica.create');
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
        
        hojaclinica::create($requestData);

        Session::flash('flash_message', 'hojaclinica added!');

        return redirect('hojaclinica');
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
        $hojaclinica = hojaclinica::findOrFail($id);

        return view('Zoochilpan.hojaclinica.show', compact('hojaclinica'));
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
        $hojaclinica = hojaclinica::findOrFail($id);

        return view('Zoochilpan.hojaclinica.edit', compact('hojaclinica'));
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
        
        $hojaclinica = hojaclinica::findOrFail($id);
        $hojaclinica->update($requestData);

        Session::flash('flash_message', 'hojaclinica updated!');

        return redirect('hojaclinica');
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
        hojaclinica::destroy($id);

        Session::flash('flash_message', 'hojaclinica deleted!');

        return redirect('hojaclinica');
    }
    public function getMaxId(Request $request ){
        $clinica=hojaclinica::select('id')->orderBy('id','desc')->take(1)->get();
        return response()->json($clinica);

    }
    public function getDatosClinica(Request $request ){

        $clinica=hojaclinica::join('ejemplares', 'marcajeEjemplar', '=', 'ejemplares.marcaje')
            ->select('lugar','fecha','marcajeEjemplar','idVeterinario','idEncargado','tratamiento','fechaAplicacion','fechaAlta','ejemplares.idAnimal','ejemplares.nombrePropio','ejemplares.sexo')
            ->where('id',$request->id)->take(100)->get();
        return response()->json($clinica);

    }
}
