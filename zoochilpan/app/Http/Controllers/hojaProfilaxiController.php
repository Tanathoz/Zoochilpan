<?php

namespace Zoochilpan\Http\Controllers;

use Zoochilpan\Http\Requests;
use Zoochilpan\Http\Controllers\Controller;

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
            $hojaprofilaxi = hojaProfilaxi::where('lugar', 'LIKE', "%$keyword%")
				->orWhere('fecha', 'LIKE', "%$keyword%")
				->orWhere('tratamiento', 'LIKE', "%$keyword%")
				->orWhere('fechaAplicacion', 'LIKE', "%$keyword%")
				->orWhere('observaciones', 'LIKE', "%$keyword%")
				->orWhere('comentarios', 'LIKE', "%$keyword%")
				
                ->paginate($perPage);
        } else {
            $hojaprofilaxi = hojaProfilaxi::paginate($perPage);
        }

        return view('Zoochilpan.hoja-profilaxi.index', compact('hojaprofilaxi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
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

        Session::flash('flash_message', 'hojaProfilaxi added!');

        return redirect('hoja-profilaxi');
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

        return redirect('hoja-profilaxi');
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
        hojaProfilaxi::destroy($id);

        Session::flash('flash_message', 'hojaProfilaxi deleted!');

        return redirect('hoja-profilaxi');
    }
}
