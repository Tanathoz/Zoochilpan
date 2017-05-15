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
Route::resource('farmacoProfilaxis','farmacoProfilaxisController');
Route::get('/cargarFamilias','FamController@getFamilias');
Route::get('/cargarEspecies','EspController@getEspecies');
Route::get('/cargarAnimales','AnimalControl@getAnimales');
Route::get('/cargarDatosAnimales','AnimalControl@getDatosAnimal');
Route::get('/cargarEjemplares','EjemplarController@getEjemplares');
Route::get('/cargarDatosEjemplares','EjemplarController@getDatosEjemplar');
Route::get('/cargarVeterinarios','VeterinarioController@getVeterinarios');
Route::get('/cargarDatosVeterinarios','VeterinarioController@getDatosVeterinario');
Route::get('/cargarFarmacos','farmacoController@getFarmacos');
Route::get('/cargarDatosFarmacos','farmacoController@getDatosFarmaco');
Route::get('/cargarMaxId','hojaProfilaxiController@getMaxId');
Route::post('guardarFarmacos','farmacoProfilaxisController@guardaFarmaco');
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');



//Route::resource('Zoochilpan/ejemplar', 'Zoochilpan\\EjemplarController');


//Route::resource('hoja-profilaxi', 'Zoochilpan/Http/Controller\\hojaProfilaxiController');