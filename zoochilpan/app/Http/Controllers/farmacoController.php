<?php

namespace Zoochilpan\Http\Controllers;

use Zoochilpan\Http\Requests;
use Zoochilpan\Http\Controllers\Controller;
use Zoochilpan\Http\Controllers\DB;
use Zoochilpan\Farmaco;
use Illuminate\Http\Request;
use Carbon\Carbon;
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
            $farmaco = Farmaco::where('nombre', 'LIKE', "%$keyword%")
				->orWhere('via', 'LIKE', "%$keyword%")
				
                ->paginate($perPage);
        } else {
            $farmaco = Farmaco::paginate($perPage);
        }

        return view('Zoochilpan.farmaco.index', compact('farmaco'));
    }

    public function getFarmacos(Request $request ){

        $farmacos=Farmaco::select('nombre','id')->get();
        return response()->json($farmacos);
    }
    public function getMaxId(Request $request ){
        //$farmacos=  DB::table('farmacos')->where('id', DB::raw("(select max(`id`) from farmacos)"))->get();
        //$farmacos=Farmaco::whereRaw('id =(select max (`id`) from farmacos)')->get();
       // $order = Orders::whereRaw('id = (select max(`id`) from orders)')->get();
        //$farmaco = DB::table('farmacos')->latest();
      //  $farmaco=Farmaco::select('nombre','via')->get();
       //$farmaco = Farmaco::find(DB::table('farmacos')->max('id'))->get();
      // $farmaco= Farmaco::all();
       // var_dump($farmaco->last());
        $farmaco=Farmaco::select('id','nombre')->orderBy('id','desc')->take(1)->get();
       // $farmaco=DB::table('farmacos')->orderBy('id', 'desc')->first();
        return response()->json($farmaco);
    }
    public function getDatosFarmaco(Request $request ){

        $farmaco=Farmaco::select('nombre','via')->where('id',$request->id)->take(100)->get();
        return response()->json($farmaco);
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
        
        Farmaco::create($requestData);

        Session::flash('flash_message', 'farmaco agregado!');

        return redirect('farmaco');
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
        $farmaco = Farmaco::findOrFail($id);

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
        $farmaco = Farmaco::findOrFail($id);

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
        
        $farmaco = Farmaco::findOrFail($id);
        $farmaco->update($requestData);

        Session::flash('flash_message', 'farmaco actualizado!');

        return redirect('farmaco');
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

        Session::flash('flash_message', 'farmaco borrado!');

        return redirect('farmaco');
    }
}
