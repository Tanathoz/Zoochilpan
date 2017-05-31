<?php

namespace Zoochilpan\Http\Controllers;

use Zoochilpan\Http\Requests;

use DB;
use Zoochilpan\Necropsium;
use Illuminate\Http\Request;
use Session;

class NecropsiaController extends Controller
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
            $necropsia = Necropsium::join('ejemplares', 'marcajeEjemplar', '=', 'ejemplares.marcaje')
                ->select('id','lugar','fecha','hora','marcajeEjemplar','diagnosticoMuerte', 'ejemplares.nombrePropio','ejemplares.sexo')
                ->where('lugar', 'LIKE', "%$keyword%")
                ->orWhere('fecha', 'LIKE', "%$keyword%")
                ->orWhere('hora', 'LIKE', "%$keyword%")
                ->orWhere('diagnosticoMuerte', 'LIKE', "%$keyword%")
                ->orWhere('marcajeEjemplar','LIKE', "%$keyword%" )
                ->orWhere('ejemplares.nombrePropio','LIKE', "%$keyword%" )
                ->orWhere('ejemplares.sexo', 'LIKE', "%$keyword%")
                ->paginate($perPage);

        } else {
            $necropsia = Necropsium::join('ejemplares', 'marcajeEjemplar','=','ejemplares.marcaje')
                ->select('id','lugar','fecha','hora','marcajeEjemplar','diagnosticoMuerte','ejemplares.nombrePropio','ejemplares.sexo')
                ->paginate($perPage);

        }

        return view('Zoochilpan.necropsia.index', compact('necropsia'));
    }
    public function getDatosNecropsia(Request $request ){

        $necro=Necropsium::join('ejemplares', 'marcajeEjemplar', '=', 'ejemplares.marcaje')
            ->select('lugar','fecha','marcajeEjemplar','idVeterinario','idEncargado','ejemplares.nombrePropio','ejemplares.sexo','ejemplares.idAnimal')
            ->where('id',$request->id)->take(100)->get();
        return response()->json($necro);

    }

    public function getNecropsias(Request $request ){

        $necro=Necropsium::join('ejemplares', 'marcajeEjemplar', '=', 'ejemplares.marcaje')
        ->select('id','diagnosticoMuerte','marcajeEjemplar','ejemplares.nombrePropio','ejemplares.idAnimal')->get();
        return response()->json($necro);
    }

    public function getUnaNecropsia(Request $request ){

        $necro=Necropsium::join('ejemplares', 'marcajeEjemplar', '=', 'ejemplares.marcaje')
            ->select('id','lugar','fecha','hora','diagnosticoMuerte','antecedentes','estadoFisico',
                'lesiones','toracica','abdominal','muestras','marcajeEjemplar','idVeterinario',
                'idEncargado','ejemplares.nombrePropio','ejemplares.sexo','ejemplares.idAnimal')->where('id',$request->idNecropsia)->take(100)->get();;
        return response()->json($necro);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('Zoochilpan.necropsia.create');
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
        
        Necropsium::create($requestData);

        Session::flash('flash_message', 'Necropsium added!');

        return redirect('necropsia');
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
        $necropsium = Necropsium::findOrFail($id);

        return view('Zoochilpan.necropsia.show', compact('necropsium'));
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
        $necropsium = Necropsium::findOrFail($id);

        return view('Zoochilpan.necropsia.edit', compact('necropsium'));
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
        
        $necropsium = Necropsium::findOrFail($id);
        $necropsium->update($requestData);

        Session::flash('flash_message', 'Necropsium updated!');

        return redirect('necropsia');
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
        Necropsium::destroy($id);

        Session::flash('flash_message', 'Necropsium deleted!');

        return redirect('necropsia');
    }
}
