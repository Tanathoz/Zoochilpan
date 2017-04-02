<?php

namespace Zoochilpan\Http\Controllers;

use Zoochilpan\Http\Requests;
use Zoochilpan\Http\Controllers\Controller;

use Zoochilpan\Ejemplar;
use Illuminate\Http\Request;
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
        print "hoola mndo";
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $ejemplar = Ejemplar::where('fechaNacimiento', 'LIKE', "%$keyword%")
				->orWhere('fechaIngreso', 'LIKE', "%$keyword%")
				->orWhere('sexo', 'LIKE', "%$keyword%")
				->orWhere('alias', 'LIKE', "%$keyword%")
				
                ->paginate($perPage);
        } else {
            $ejemplar = Ejemplar::paginate($perPage);
        }

        return view('Zoochilpan.ejemplar.index', compact('ejemplar'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
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

        Session::flash('flash_message', 'Ejemplar added!');

        return redirect('Zoochilpan/ejemplar');
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

        return redirect('Zoochilpan/ejemplar');
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

        Session::flash('flash_message', 'Ejemplar deleted!');

        return redirect('Zoochilpan/ejemplar');
    }
}
