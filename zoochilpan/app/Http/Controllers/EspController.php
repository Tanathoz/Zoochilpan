<?php

namespace Zoochilpan\Http\Controllers;

use Illuminate\Http\Request;
use Zoochilpan\Especie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
class EspController extends Controller
{


    public function create()
    {

        return view('Especies.insertar');
    }

    public function getEspecies(Request $request ){

        // public function getFamilias(Request $request, $id ){
        //if($request->ajax()){
        //  $familias=Familium::familis($id);
        //    return response()->json($familias);
        //  }

        //}
        $especies=Especie::select('nombre','idEspecie')->where('idFamilia',$request->idFamilia)->take(100)->get();
        return response()->json($especies);
    }

    public function store(Request $request)
    {

        Especie::create([
            'idEspecie'=>$request['idEspecie'],
            'idFamilia'=>$request['idFamilia'],
            'nombre'=>$request['nombre'],

        ]);

        Session::flash('message', 'Especie Guardada!');

        return redirect('/animal');
    }
}
