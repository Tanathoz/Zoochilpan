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
    public function index(Request $request)
    {

        $keyword = $request->get('search');
        $perPage = 25;


        if (!empty($keyword)) {

            $ejemplar = Ejemplar::join('animal', 'idAnimal', '=', 'animal.id')
                ->select('marcaje','fechaNacimiento','fechaAlta','sexo','nombrePropio', 'animal.nombreComun', 'animal.especie','animal.nombreCientifico')
                ->where('fechaNacimiento', 'LIKE', "%$keyword%")
                ->orWhere('fechaAlta', 'LIKE', "%$keyword%")
                ->orWhere('animal.especie', 'LIKE', "%$keyword%")
                ->orWhere('animal.nombreComun','LIKE', "%$keyword%" )
                ->orWhere('sexo', 'LIKE', "%$keyword%")
                ->orWhere('nombrePropio', 'LIKE', "%$keyword%")

                ->paginate($perPage);
        } else {
            $ejemplar = Ejemplar::join('animal', 'idAnimal', '=', 'animal.id')
                ->select('marcaje','fechaNacimiento','fechaAlta','sexo','nombrePropio', 'animal.nombreComun', 'animal.especie')
                ->paginate($perPage);
        }

        return view('Zoochilpan.ejemplar.index', compact('ejemplar'));


       // $ejemplares=Ejemplar::paginate(5);
        //return view('Zoochilpan.ejemplar.lista',compact('ejemplares'));
    }




        public function getDatosEjemplar(Request $request ){

            $ejemplar=Ejemplar::join('animal', 'idAnimal', '=', 'animal.id')
                ->select('fechaNacimiento','fechaAlta','sexo','nombrePropio','idAnimal', 'animal.nombreComun', 'animal.especie')
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
        
        $requestData = $request->all();
        
        Ejemplar::create($requestData);

        Session::flash('flash_message', 'Ejemplar registrado!');

        return redirect('/ejemplar');
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
        
        $requestData = $request->all();
        
        $ejemplar = Ejemplar::findOrFail($id);
        $ejemplar->update($requestData);

        Session::flash('flash_message', 'Ejemplar updated!');

        return redirect('/ejemplar');
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
