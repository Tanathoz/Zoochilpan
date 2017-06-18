<?php

namespace Zoochilpan\Http\Controllers;

use Zoochilpan\Http\Requests;
use Zoochilpan\Http\Controllers\Controller;
use Zoochilpan\Http\Controllers\DB;
use Zoochilpan\Ejemplar;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class EjemplarController extends Controller
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
        $perPage = 20;


        if (!empty($keyword)) {

            $ejemplar = Ejemplar::join('animal', 'idAnimal', '=', 'animal.id')
                ->select('marcaje','fechaNacimiento','fechaAlta','sexo','nombrePropio', 'animal.nombreComun', 'animal.especie','animal.nombreCientifico')
                ->where('fechaNacimiento', 'LIKE', "%$keyword%")
                ->orWhere('fechaAlta', 'LIKE', "%$keyword%")
                ->orWhere('animal.nombreCientifico', 'LIKE', "%$keyword%")
                ->orWhere('animal.nombreComun','LIKE', "%$keyword%" )
                ->orWhere('sexo', 'LIKE', "%$keyword%")
                ->orWhere('nombrePropio', 'LIKE', "%$keyword%")

                ->paginate($perPage);
        } else {
            $ejemplar = Ejemplar::join('animal', 'idAnimal', '=', 'animal.id')
                ->select('marcaje','fechaNacimiento','fechaAlta','sexo','nombrePropio', 'animal.nombreComun', 'animal.especie','animal.nombreCientifico')
                ->paginate($perPage);
        }

        return view('Zoochilpan.ejemplar.index', compact('ejemplar'));


       // $ejemplares=Ejemplar::paginate(5);
        //return view('Zoochilpan.ejemplar.lista',compact('ejemplares'));
    }
    public function getEjemplares(Request $request ){

        $ejemplares=Ejemplar::select('nombrePropio','marcaje')->get();
        return response()->json($ejemplares);
    }
    public function getDatosEjemplares(Request $request ){

        $ejemplar=Ejemplar::select('fechaNacimiento','nombrePropio','sexo')->where('marcaje',$request->marcaje)->take(100)->get();
        return response()->json($ejemplar);
    }
    public function getVariosEjemplares(Request $request ){

        $ejemplar=Ejemplar::select('marcaje','fechaNacimiento','nombrePropio','sexo')->where('idAnimal',$request->idAnimal)->take(100)->get();
        return response()->json($ejemplar);
    }
    public function getDatosEjemplar(Request $request ){

            $ejemplar=Ejemplar::join('animal', 'idAnimal', '=', 'animal.id')
                ->select('fechaNacimiento','fechaAlta','sexo','nombrePropio','idAnimal', 'animal.nombreComun', 'animal.especie','animal.nombreCientifico')
            ->where('marcaje',$request->marcaje)->take(100)->get();
            return response()->json($ejemplar);

           // $ejemplar=Ejemplar::select('fechaNacimiento','fechaAlta','sexo','nombrePropio')->where('marcaje',$request->marcaje)->take(100)->get();
            //return response()->json($ejemplar);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        return view('Zoochilpan.ejemplar.create');
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
        try {
        $requestData = $request->all();
        
        Ejemplar::create($requestData);

        Session::flash('flash_message', 'Ejemplar registrado!');

        return redirect('/ejemplar');
        } catch (\Illuminate\Database\QueryException $e) {
            Session::flash('messageError','No se pudo guardar revise que ha llenado todos los datos ');
            return Redirect::to('/ejemplar');

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
        $ejemplar = Ejemplar::findOrFail($id);

        return view('Zoochilpan.ejemplar.show', compact('ejemplar'));
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
        $ejemplar = Ejemplar::findOrFail($id);

        return view('Zoochilpan.ejemplar.edit', compact('ejemplar'));
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
        try {
        $requestData = $request->all();
        
        $ejemplar = Ejemplar::findOrFail($id);
        $ejemplar->update($requestData);

        Session::flash('flash_message', 'Ejemplar Actualizado!');

        return redirect('/ejemplar');
        } catch (\Illuminate\Database\QueryException $e) {
            Session::flash('messageError','No se pudo guardar revise que ha llenado todos los datos ');
            return Redirect::to('/ejemplar');

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
        Ejemplar::destroy($id);

        Session::flash('flash_message', 'Ejemplar Borrado!');

        return redirect('/ejemplar');
    }
}
