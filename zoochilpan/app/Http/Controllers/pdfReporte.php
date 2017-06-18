<?php

namespace Zoochilpan\Http\Controllers;

use Illuminate\Http\Request;
use Zoochilpan\Ejemplar;
use DB;
use Zoochilpan\Veterinario;
use Illuminate\Support\Facades\View;
use Illuminate\Database\Eloquent\Collection;
use Zoochilpan\Necropsium;
use Session;
use Zoochilpan\Siniestro;
use PDF;

class pdfReporte extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
public function crearPDF( Request $request, $marcaje){

    //$necropsia= Necropsium::all();
    //$view =\View::make($vista,compact('data'))->render();

    $veterinarios=Veterinario::select('nombre','apellidoPaterno','apellidoMaterno')->where('id',$request->idVeterinario)->take(100)->get();
  //  $encargado=Veterinario::select('nombre','apellidoPaterno','apellidoMaterno')->where('id',$request->idEncargado)->take(100)->get();
    $ejemplar=Ejemplar::join('animal', 'idAnimal', '=', 'animal.id')
        ->select('fechaNacimiento','fechaAlta','sexo','nombrePropio','idAnimal', 'animal.nombreComun', 'animal.especie','animal.nombreCientifico')
        ->where('marcaje',$request->marcajeEjemplar)->take(100)->get();

    $necropsia=Necropsium::join('ejemplares', 'marcajeEjemplar', '=', 'ejemplares.marcaje')
        ->join('veterinarios','idVeterinario','=','veterinarios.id')
        ->join('animal','ejemplares.idAnimal','=','animal.id')
        ->select('necropsias.id','lugar','fecha','hora','diagnosticoMuerte','antecedentes','estadoFisico','animal.nombreComun','animal.nombreCientifico',
            'lesiones','toracica','abdominal','muestras','marcajeEjemplar','idEncargado','idVeterinario','veterinarios.nombre',
            'veterinarios.apellidoMaterno','veterinarios.apellidoPaterno','ejemplares.nombrePropio','ejemplares.sexo','ejemplares.idAnimal')->where('necropsias.id',$request->id)->take(100)->get();

    $encargado=Necropsium::join('veterinarios', 'idEncargado', '=', 'veterinarios.id')
        ->select( 'veterinarios.nombre','veterinarios.apellidoPaterno','veterinarios.apellidoMaterno')->where('veterinarios.id',$request->idEncargado)->take(100)->get();

    $nombre=$request->id;
    $pdf=PDF::loadView('Zoochilpan.necropsia.reporte',['necropsia'=>$necropsia],['encargado'=>$encargado]);
    return $pdf->download('Necro'.'"'+$nombre+'"'.'reporte.pdf');

}
    public function crearPDFSiniestro( Request $request){

     //   $encargado=Necropsium::join('veterinarios', 'idEncargado', '=', 'veterinarios.id')
       //     ->select( 'veterinarios.nombre','veterinarios.apellidoPaterno','veterinarios.apellidoMaterno')->where('necropsias.id',$request->idNecropsia)->take(100)->get();

        $encargado=Necropsium::join('veterinarios', 'idEncargado', '=', 'veterinarios.id')
            ->select('veterinarios.nombre','veterinarios.apellidoPaterno','veterinarios.apellidoMaterno',
                'lesiones','toracica','abdominal','muestras','marcajeEjemplar',
                'idEncargado')->where('necropsias.id',$request->idNecropsia)->take(100)->get();;

        $necropsia=Siniestro::join('necropsias','idNecropsia','=','necropsias.id')
            ->join('ejemplares', 'necropsias.marcajeEjemplar', '=', 'ejemplares.marcaje')
            ->join('veterinarios','necropsias.idVeterinario','=','veterinarios.id')
            ->join('animal','ejemplares.idAnimal','=','animal.id')
            ->select('necropsias.lugar','necropsias.fecha','necropsias.hora',
                'necropsias.diagnosticoMuerte','necropsias.antecedentes','necropsias.estadoFisico','animal.nombreComun','animal.nombreCientifico',
                'necropsias.lesiones','necropsias.toracica','necropsias.abdominal','necropsias.muestras','necropsias.marcajeEjemplar','necropsias.idEncargado','necropsias.idVeterinario','veterinarios.nombre',
                'veterinarios.apellidoMaterno','veterinarios.apellidoPaterno','ejemplares.nombrePropio','ejemplares.sexo','ejemplares.idAnimal',
                'medidaPreventiva','siniestros.id','nombreMedida','apellidoPaternoMedida','apellidoMaternoMedida')->where('siniestros.id',$request->id)->take(100)->get();

        $pdf=PDF::loadView('Zoochilpan.siniestro.reporte',['necropsia'=>$necropsia],['encargado'=>$encargado]);
        return $pdf->download('Siniestro'.$request->id.'reporte.pdf');
    }
}
