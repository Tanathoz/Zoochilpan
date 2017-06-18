<?php

namespace Zoochilpan\Http\Controllers;

use Zoochilpan\Http\Requests;
use Zoochilpan\Http\Controllers\Controller;

use Zoochilpan\Siniestro;
use Illuminate\Http\Request;
use Session;

class SiniestroController extends Controller
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
            $siniestro = Siniestro::join('necropsias','idNecropsia','=','necropsias.id')
                ->select('siniestros.id','medidaPreventiva','necropsias.lugar','necropsias.fecha','necropsias.hora','necropsias.marcajeEjemplar','necropsias.diagnosticoMuerte')
                ->where('necropsias.lugar', 'LIKE', "%$keyword%")
                ->orWhere('necropsias.fecha', 'LIKE', "%$keyword%")
                ->orWhere('necropsias.hora', 'LIKE', "%$keyword%")
                ->orWhere('necropsias.diagnosticoMuerte', 'LIKE', "%$keyword%")
                ->orWhere('necropsias.marcajeEjemplar','LIKE', "%$keyword%" )
                ->orWhere('medidaPreventiva', 'LIKE', "%$keyword%")
				->orWhere('nombreMedida', 'LIKE', "%$keyword%")
				->orWhere('apellidoPaternoMedida', 'LIKE', "%$keyword%")
				->orWhere('apellidoMaternoMedida', 'LIKE', "%$keyword%")
                ->paginate($perPage);

        } else {
            $siniestro = Siniestro::join('necropsias','idNecropsia','=','necropsias.id')
                ->select('apellidoPaternoMedida','nombreMedida','medidaPreventiva','siniestros.id','necropsias.lugar','necropsias.fecha','necropsias.hora','necropsias.marcajeEjemplar','necropsias.diagnosticoMuerte')
                 ->paginate($perPage);
        }

        return view('zoochilpan.siniestro.index', compact('siniestro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function getDatosSiniestro(Request $request ){

        $necro=Siniestro::select('id','idNecropsia','medidaPreventiva','nombreMedida')
            ->where('id',$request->id)->take(100)->get();
        return response()->json($necro);

    }

    public function create()
    {
        return view('zoochilpan.siniestro.create');
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

            Siniestro::create($requestData);

            Session::flash('flash_message', 'Siniestro Registrado!');

            return redirect('siniestro');
        } catch (\Illuminate\Database\QueryException $e) {
            Session::flash('messageError','No se pudo guardar revise que ha llenado todos los datos ');
            return Redirect::to('/siniestro');

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
        $siniestro = Siniestro::findOrFail($id);

        return view('zoochilpan.siniestro.show', compact('siniestro'));
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
        $siniestro = Siniestro::findOrFail($id);

        return view('zoochilpan.siniestro.edit', compact('siniestro'));
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

            $siniestro = Siniestro::findOrFail($id);
            $siniestro->update($requestData);

            Session::flash('flash_message', 'Siniestro Actualizado!');

            return redirect('siniestro');
        } catch (\Illuminate\Database\QueryException $e) {
            Session::flash('messageError','No se pudo guardar revise que ha llenado todos los datos ');
            return Redirect::to('/siniestro');

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
        Siniestro::destroy($id);

        Session::flash('flash_message', 'Siniestro Borrado!');

        return redirect('siniestro');
    }
}
