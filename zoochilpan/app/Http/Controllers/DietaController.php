<?php

namespace Zoochilpan\Http\Controllers;

use Zoochilpan\Http\Requests;
use Zoochilpan\Http\Controllers;
use Zoochilpan\Dietas;
use Illuminate\Http\Request;
use Session;

class DietaController extends Controller
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
            $dieta = Dietas::join('animal', 'idAnimal', '=', 'animal.id')
                ->select('idAnimal','alimento','horario','cantidad','animal.nombreComun','animal.nombreCientifico')
				->where('cantidad','LIKE',"$keyword%")
                ->orWhere('alimento', 'LIKE', "%$keyword%")
				->orWhere('horario', 'LIKE', "%$keyword%")
				->orWhere('consideraciones', 'LIKE', "%$keyword%")
                ->orWhere('animal.nombreCientifico', 'LIKE', "%$keyword%")
                ->orWhere('animal.nombreComun','LIKE', "%$keyword%" )
                ->paginate($perPage);
        } else {
            $dieta = Dietas::join('animal', 'idAnimal', '=', 'animal.id')
            ->select('idAnimal','alimento','horario','cantidad','animal.nombreComun','animal.nombreCientifico')
                ->paginate($perPage);
        }

        return view('zoochilpan.dieta.index', compact('dieta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('zoochilpan.dieta.create');
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
        
        Dietas::create($requestData);

        Session::flash('flash_message', 'Dietum added!');

        return redirect('dieta');
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
        $dietum = Dietas::findOrFail($id);

        return view('zoochilpan.dieta.show', compact('dietum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($idAnimal)
    {
        $dietum = Dietas::find($idAnimal);

        return view('zoochilpan.dieta.edit', compact('dietum'));
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
        
        $dietum = Dietas::findOrFail($id);
        $dietum->update($requestData);

        Session::flash('flash_message', 'Dietum updated!');

        return redirect('dieta');
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
        Dietas::destroy($id);

        Session::flash('flash_message', 'Dieta borrada!');

        return redirect('dieta');
    }
}
