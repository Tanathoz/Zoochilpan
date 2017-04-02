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

    public function getAnimales(Request $request ){

        $animales=Animal::select('nombreComun','id')->get();
        return response()->json($animales);
    }

    public function getDatosAnimal(Request $request ){

        $animal=Animal::select('nombreCientifico','nombreComun','familia','orden','especie')->where('id',$request->id)->take(100)->get();
        return response()->json($animal);
    }
    public function index()
    {
        $ejemplares=Animal::paginate(3);
         return view('Animales.lista',compact('ejemplares'));
    }
    public function create(){

        return view('Animales.insertar');
    }

    public function store(Request $request){
        try {
        Animal::create([
            'id' =>$request['id'],
            'nombreCientifico'=>$request['nombreCientifico'],
            'nombreComun'=>$request['nombreComun'],
            'familia'=>$request['famili'],
            'clase'=>$request['clase'],
            'orden'=>$request['orden'],
            'especie'=>$request['especie'],
            'procedencia'=>$request['procedencia'],
            'habitat'=>$request['habitat'],
            'gestacion'=>$request['gestacion'],
            'camada'=>$request['camada'],
            'longevidad'=>$request['longevidad'],
            'peso'=>$request['peso'],
            'ubicacionGeografica'=>$request['ubicacionGeografica'],
            'Alimentacion'=>$request['Alimentacion'],

        ]);

        //return "se ha registrado un animal";
        Session::flash('message','Se agrego  correctamente ');
        return Redirect::to('/animal');

        } catch (\Illuminate\Database\QueryException $e) {
            Session::flash('messageError','No se pudo guardar revise que el id no este en la base de datos ');
            return Redirect::to('/animal');

        } catch (PDOException $e) {
            dd($e);
        }
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
