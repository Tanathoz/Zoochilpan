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
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getAnimales(Request $request ){

        $animales=Animal::select('nombreComun','id')->get();
        return response()->json($animales);
    }

    public function getDatosAnimal(Request $request ){

        $animal=Animal::select('nombreCientifico','nombreComun','familia','orden','especie')->where('id',$request->id)->take(100)->get();
        return response()->json($animal);
    }
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 20;

        if (!empty($keyword)) {
            $ejemplares = Animal::where('nombreCientifico', 'LIKE', "%$keyword%")
                ->orWhere('nombreComun', 'LIKE', "%$keyword%")
                ->orWhere('clase', 'LIKE', "%$keyword%")
                ->orWhere('orden', 'LIKE', "%$keyword%")
                ->orWhere('familia', 'LIKE', "%$keyword%")
                ->orWhere('especie', 'LIKE', "%$keyword%")
                ->orWhere('habitat', 'LIKE', "%$keyword%")
                ->orWhere('ubicacionGeografica', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $ejemplares = Animal::paginate($perPage);
        }

        return view('Animales.lista', compact('ejemplares'));


      //  $ejemplares=Animal::paginate(3);
        // return view('Animales.lista',compact('ejemplares'));
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
            Session::flash('messageError','No se pudo guardar revise que el id no este en la base de datos  ');
            return Redirect::to('/animal');

        } catch (PDOException $e) {
            dd($e);
        }
       // return redirect('/animal')->with('message','store');
    }
    public function update( Request $request, $id){
        try {
        $animal = Animal::find($id);
        $animal->update($request->all());
        //$animal->fill($request->all());
        //$animal->save();
        Session::flash('message','Se actualizo correctamente ');
        return Redirect::to('/animal');
        } catch (\Illuminate\Database\QueryException $e) {
            Session::flash('messageError','No se pudo guardar revise que ha llenado todos los datos ');
            return Redirect::to('/animal');

        } catch (PDOException $e) {
            dd($e);
        }
    }

    public  function show($id){
        $animal = Animal::find($id);
        return view('Animales.form.ver',['animal'=>$animal]);
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
