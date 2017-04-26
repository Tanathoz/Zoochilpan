<?php

namespace Zoochilpan\Http\Controllers;

use Zoochilpan\Http\Requests;
use Zoochilpan\Http\Controllers\Controller;

use Zoochilpan\farmaco;
use Illuminate\Http\Request;
use Session;

class farmacoController extends Controller
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
            $farmaco = farmaco::where('nombre', 'LIKE', "%$keyword%")
				->orWhere('via', 'LIKE', "%$keyword%")
				
                ->paginate($perPage);
        } else {
            $farmaco = farmaco::paginate($perPage);
        }

        return view('Zoochilpan.farmaco.index', compact('farmaco'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('Zoochilpan.farmaco.create');
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
        
        farmaco::create($requestData);

        Session::flash('flash_message', 'farmaco added!');

        return redirect('Zoochilpan/farmaco');
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
        $farmaco = farmaco::findOrFail($id);

        return view('Zoochilpan.farmaco.show', compact('farmaco'));
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
        $farmaco = farmaco::findOrFail($id);

        return view('Zoochilpan.farmaco.edit', compact('farmaco'));
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
        
        $farmaco = farmaco::findOrFail($id);
        $farmaco->update($requestData);

        Session::flash('flash_message', 'farmaco updated!');

        return redirect('Zoochilpan/farmaco');
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
        farmaco::destroy($id);

        Session::flash('flash_message', 'farmaco deleted!');

        return redirect('Zoochilpan/farmaco');
    }
}
