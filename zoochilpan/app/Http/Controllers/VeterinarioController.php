<?php
namespace Zoochilpan\Http\Controllers;

use Zoochilpan\Http\Requests;
use Zoochilpan\Http\Controllers\Controller;

use Zoochilpan\Veterinario;
use Illuminate\Http\Request;
use Session;

class VeterinarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $veterinarios = Veterinario::paginate(25);

        return view('Veterinario.veterinario.lista', compact('veterinarios'));
    }

    public function getVeterinarios(Request $request ){

        $veterinarios=Veterinario::select('nombre','id','apellidoPaterno','apellidoMaterno')->get();
        return response()->json($veterinarios);

    }

    public function getDatosVeterinario(Request $request ){

        $veterinarios=Veterinario::select('nombre','apellidoPaterno','apellidoMaterno','sexo','especialidad')->where('id',$request->id)->take(100)->get();
        return response()->json($veterinarios);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('Veterinario.veterinario.insertar');
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
        try {
            $requestData = $request->all();

            Veterinario::create([
                'id' => $request['id'],
                'nombre' => $request['nombre'],
                'apellidoPaterno' => $request['apellidoPaterno'],
                'apellidoMaterno' => $request['apellidoMaterno'],
                'sexo' => $request['sexo'],
                'especialidad' => $request['especialidad'],
                'areaEncargada' => $request['areaEncargada'],
            ]);

            Session::flash('message', 'Veterinario Agregado!');

            return redirect('/veterinario');
        } catch (\Illuminate\Database\QueryException $e) {
            Session::flash('messageError','No se pudo guardar revise que ha llenado todos los datos ');
            return Redirect::to('/veterinario');

        } catch (PDOException $e) {
            dd($e);
        }
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
        $veterinario = Veterinario::findOrFail($id);

        return view('Veterinario.veterinario.show', compact('veterinario'));
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
        $veterinario = Veterinario::findOrFail($id);

        return view('Veterinario.veterinario.editar', compact('veterinario'));

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
        try {
            $requestData = $request->all();

            $veterinario = Veterinario::findOrFail($id);
            $veterinario->update($requestData);

            Session::flash('message', 'Veterinario Actualizado!');

            return redirect('/veterinario');
        } catch (\Illuminate\Database\QueryException $e) {
            Session::flash('messageError','No se pudo guardar revise que ha llenado todos los datos ');
            return Redirect::to('/veterinario');

        } catch (PDOException $e) {
            dd($e);
        }
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
        Veterinario::destroy($id);

        Session::flash('message', 'Veterinario Borrado!');

        return redirect('/veterinario');
    }
}
