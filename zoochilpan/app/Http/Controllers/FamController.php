<?php

namespace Zoochilpan\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Zoochilpan\Veterinario;
use Zoochilpan\Familium;

class FamController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create()
    {

        return view('Familias.insertar');
    }


    public function getFamilias(Request $request ){

       // public function getFamilias(Request $request, $id ){
            //if($request->ajax()){
              //  $familias=Familium::familis($id);
            //    return response()->json($familias);
          //  }

        //}
        $familias=Familium::select('nombre','idFam')->where('idOrden',$request->idOrden)->take(100)->get();
        return response()->json($familias);
    }

    public function store(Request $request)
    {
        try {
        Familium::create([
            'idFam'=>$request['idFam'],
            'idOrden'=>$request['idOrden'],
            'nombre'=>$request['nombre'],

        ]);

        Session::flash('message', 'Familia  Guardada!');

        return redirect('/animal');
        } catch (\Illuminate\Database\QueryException $e) {
            Session::flash('messageError','No se pudo guardar verifique la seleccion de clase y orden ');
            return Redirect::to('/animal');

        } catch (PDOException $e) {
            dd($e);
        }
    }

}
