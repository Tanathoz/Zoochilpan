<?php

namespace Zoochilpan\Http\Controllers;

use Zoochilpan\Http\Requests;
use Zoochilpan\Http\Controllers;

use Zoochilpan\dietaEjemplar;
use Illuminate\Http\Request;
use Session;

class dietaEjemplarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $dietaejemplar = dietaEjemplar::join('ejemplares', 'marcajeEjemplar', '=', 'ejemplares.marcaje')
                ->select('marcajeEjemplar','fechaCambio','causaCambio','cantidad','alimento','horario','consideraciones','ejemplares.nombrePropio','ejemplares.sexo')
                  -> where('marcajeEjemplar', 'LIKE', "%$keyword%")
				->orWhere('fechaCambio', 'LIKE', "%$keyword%")
				->orWhere('causaCambio', 'LIKE', "%$keyword%")
				->orWhere('cantidad', 'LIKE', "%$keyword%")
				->orWhere('alimento', 'LIKE', "%$keyword%")
				->orWhere('horario', 'LIKE', "%$keyword%")
                       ->orWhere('ejemplares.nombrePropio', 'LIKE', "%$keyword%")
                       ->orWhere('ejemplares.sexo', 'LIKE', "%$keyword%")
				->orWhere('consideraciones', 'LIKE', "%$keyword%")
				
                ->paginate($perPage);
        } else {
            $dietaejemplar = dietaEjemplar::join('ejemplares', 'marcajeEjemplar', '=', 'ejemplares.marcaje')
                ->select('marcajeEjemplar','fechaCambio','causaCambio','cantidad','alimento','horario','consideraciones','ejemplares.nombrePropio','ejemplares.sexo')
                ->paginate($perPage);
        }

        return view('zoochilpan.dieta-ejemplar.index', compact('dietaejemplar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function getDatosDietaEjemplar(Request $request ){

        $animal=dietaEjemplar::select('fechaCambio','causaCambio','marcajeEjemplar')->where('marcajeEjemplar',$request->marcajeEjemplar)->take(100)->get();
        return response()->json($animal);
    }
    public function create()
    {
        return view('zoochilpan.dieta-ejemplar.create');
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
        try{
        $requestData = $request->all();
        
        dietaEjemplar::create($requestData);

        Session::flash('flash_message', 'dietaEjemplar added!');

        return redirect('dietaEjemplar');
        } catch (\Illuminate\Database\QueryException $e) {
            Session::flash('messageError','No se pudo guardar revise que ha llenado todos los datos ');
            return Redirect::to('/dietaEjemplar');

        } catch (PDOException $e) {
            dd($e);
        }
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
        $dietaejemplar = dietaEjemplar::findOrFail($id);

        return view('zoochilpan.dieta-ejemplar.show', compact('dietaejemplar'));
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
        $dietaejemplar = dietaEjemplar::findOrFail($id);

        return view('zoochilpan.dieta-ejemplar.edit', compact('dietaejemplar'));
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
        try{
        $requestData = $request->all();
        
        $dietaejemplar = dietaEjemplar::findOrFail($id);
        $dietaejemplar->update($requestData);

        Session::flash('flash_message', 'dietaEjemplar updated!');

        return redirect('dietaEjemplar');
        } catch (\Illuminate\Database\QueryException $e) {
            Session::flash('messageError','No se pudo guardar revise que ha llenado todos los datos ');
            return Redirect::to('/dietaEjemplar');

        } catch (PDOException $e) {
            dd($e);
        }
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
        dietaEjemplar::destroy($id);

        Session::flash('flash_message', 'dietaEjemplar deleted!');

        return redirect('dietaEjemplar');
    }
}
