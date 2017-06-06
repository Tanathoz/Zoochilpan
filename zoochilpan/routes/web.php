<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('ejemplar',function(){
    return "hola ejemplar";
});
//Route::put('animal/{id}','AnimalControl@update');

Route::resource('animal','AnimalControl');

Route::resource('veterinario','VeterinarioController');
Route::resource('familia','FamController');
Route::resource('especie','EspController');
Route::resource('ejemplar','EjemplarController');
Route::resource('farmaco','farmacoController');
Route::resource('profilaxis','hojaProfilaxiController');
Route::resource('necropsia','NecropsiaController');
Route::resource('dieta','DietaController');
Route::resource('dietaEjemplar','dietaEjemplarController');
Route::resource('farmacoProfilaxis','farmacoProfilaxisController');
Route::resource('siniestro','SiniestroController');
Route::resource('farmacoClinica','farmacoClinicaController');
Route::resource('hojaclinica','hojaclinicaController');
Route::resource('reporte','pdfReporte');
Route::get('/cargarFamilias','FamController@getFamilias');
Route::get('/cargarEspecies','EspController@getEspecies');
Route::get('/cargarAnimales','AnimalControl@getAnimales');
Route::get('/cargarDatosAnimales','AnimalControl@getDatosAnimal');
Route::get('/cargarEjemplares','EjemplarController@getEjemplares');
Route::get('/cargarDatosEjemplares','EjemplarController@getDatosEjemplar');
Route::get('/cargarVariosEjemplares','EjemplarController@getVariosEjemplares');
Route::get('/cargarVeterinarios','VeterinarioController@getVeterinarios');
Route::get('/cargarDatosVeterinarios','VeterinarioController@getDatosVeterinario');
Route::get('/cargarFarmacos','farmacoController@getFarmacos');
Route::get('/cargarDatosFarmacos','farmacoController@getDatosFarmaco');
Route::get('/cargarDatosDietaEjemplar','dietaEjemplarController@getDatosDietaEjemplar');
Route::get('/cargarMaxId','hojaProfilaxiController@getMaxId');
Route::get('/cargarMaxIdClinica','hojaclinicaController@getMaxId');
Route::get('/cargarNum','farmacoProfilaxisController@numeroFarmaco');
Route::get('/cargarNumClinica','farmacoClinicaController@numeroFarmaco');
Route::post('guardarFarmacos','farmacoProfilaxisController@guardaFarmaco');
Route::post('guardarFarmacosClinicos','farmacoClinicaController@guardaFarmacos');
Route::get('/cargarNumeroFarmaco','farmacoProfilaxisController@numeroFarmaco');
Route::get('/cargarDatosProfilaxis','hojaProfilaxiController@getDatosProfilaxis');
Route::get('/cargarDatosClinica','hojaclinicaController@getDatosClinica');
Route::get('/DatosFarmacos','farmacoProfilaxisController@getFarmacosProfilaxis');
Route::get('/DatosFarmacosClinica','farmacoClinicaController@getFarmacosClinica');
Route::delete('/borrarFarmaco','farmacoProfilaxisController@DeleteFarmacoProfilaxis');
Route::delete('/borrarFarmacoClinica','farmacoClinicaController@DeleteFarmacoClinica');
Route::put('/ActualizarFarmaco','farmacoProfilaxisController@UpdateFarmacoProfilaxis');
Route::put('/ActualizarFarmacoClinica','farmacoClinicaController@UpdateFarmacoClinica');
Route::delete('/borrarAllFarmaco','farmacoProfilaxisController@DeleteTodosFarmacos');
Route::delete('/borrarAllFarmacoClinica','farmacoProfilaxisController@DeleteTodosFarmacos');
Route::get('/cargarDatosNecropsia','NecropsiaController@getDatosNecropsia');
Route::get('/cargarNecropsias','NecropsiaController@getNecropsias');
Route::get('/cargarUnaNecropsia','NecropsiaController@getUnaNecropsia');
Route::get('/cargarDatosSiniestro','SiniestroController@getDatosSiniestro');
Route::get('/cargarReporte/{marcajeEjemplar}/{id}/{idVeterinario}/{idEncargado}','pdfReporte@crearPDF');
Route::get('/cargarReporteSiniestro/{idNecropsia}/{id}','pdfReporte@crearPDFSiniestro');
Route::get('pdf', function () {

   $pdf = PDF::loadView('Animales.insertar');
    return $pdf->download('archivo1.pdf');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


//Route::resource('Zoochilpan/ejemplar', 'Zoochilpan\\EjemplarController');
//Route::resource('hoja-profilaxi', 'Zoochilpan/Http/Controller\\hojaProfilaxiController');
//Route::resource('necropsia', 'Zoochilpan/Http/Controller\\NecropsiaController');
//Route::resource('hojaclinica', 'Zoochilpan\\hojaclinicaController');
//Route::resource('farmaco-clinica', 'zoochilpan\\farmacoClinicaController');