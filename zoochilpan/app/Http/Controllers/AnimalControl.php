<?php

namespace Zoochilpan\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Zoochilpan\Animal;


class AnimalControl extends Controller
{
    public function hola(){
        return 'hol MUNDO';
    }


    public function index()
    {
        $ejemplares=Animal::All();
         return view('Animales.lista',compact('ejemplares'));
    }
    public function create(){

        return view('Animales.insertar');
    }

    public function store(Request $request){
        Animal::create([
            'id' =>$request['id'],
            'nombreCientifico'=>$request['nombreCientifico'],
            'nombreComun'=>$request['nombreComun'],
            'familia'=>$request['familia'],
            'clase'=>$request['clase'],
            'orden'=>$request['orden'],
            'especie'=>$request['especie'],
            'procedencia'=>$request['procedencia'],
            'habitat'=>$request['habitat'],
            'gestacion'=>$request['gestacion'],
            'camada'=>$request['camada'],
            'longevidad'=>$request['longevidad'],
            'sexo'=>$request['sexo'],
            'peso'=>$request['peso'],
            'ubicacionGeografica'=>$request['ubicacionGeografica'],
            'Alimentacion'=>$request['alimentacion'],
            'datoCurioso'=>$request['datoCurioso'],
        ]);

        //return "se ha registrado un animal";
        Session::flash('message','Se agrego  correctamente ');
        return Redirect::to('/animal');
       // return redirect('/animal')->with('message','store');
    }
    public function update( Request $request, $id){
       $animal = Animal::find($id);
        $animal->update($request->all());
        //$animal->fill($request->all());
        //$animal->save();
        Session::flash('message','Se actualizo correctamente ');
        return Redirect::to('/animal');

    }

    public  function show($id){
        return 'Aqui mostramos la info del animal del id'.$id;
    }

    public function edit($id)
    {
        $animal = Animal::find($id);


      // return view('Animales.editar')->with('animal',$animal);
      return view('Animales.editar',['animal'=>$animal]);
       // return 'Aqui editamos el animal: ' . $id;
    }

    public function destroy($id){
        Animal::destroy($id);
        Session::flash('message','Animal eliminado Correctamente');
        return Redirect::to('/animal');
    }
}