@extends('Layouts.principal')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"> Formularios de registro de Ejemplar </h3>
        </div>
        <div class="panel-body">


            <form action="">
                <form action="" class="form-horizontal">
                    <div class="form-group">
                        <label for="num" > numero de registro </label>
                        <input type="number" class="form-control" name="num" id="num" placeholder="123">
                    </div>
                </form>
                <div class="form-group">
                    <label for="nombreCi"> nombre cientifico </label>
                    <input type="text" class="form-control" name="nombreCi" id="nombreCi" placeholder="Pathera Leo">
                </div>
                <div class="form-group">
                    <label for="nombreoi"> nombre comun </label>
                    <input type="text" class="form-control" name="nombreCo" id="nombreCo" placeholder="León">
                </div>

                <div class="form-group">
                    <label for="familia"> familia </label>
                    <input type="text" class="form-control" name="familia" id="familia" placeholder="Felinos">
                </div>


                <div class="form-group">
                    <label for="clase"> clase </label>
                    <input type="text" class="form-control" name="clase" id="clase" placeholder="Mamiferos">
                </div>

                <div class="form-group">
                    <label for="orden"> orden </label>
                    <input type="text" class="form-control" name="orden" id="orden" placeholder="Carnívoros">
                </div>
                <div class="form-group">
                    <label for="especie"> especie </label>
                    <input type="text" class="form-control" name="especie" id="especie" placeholder="Panthera">
                </div>
                <div class="form-group">
                    <label for="procedencia"> procedencia </label>
                    <input type="text" class="form-control" name="procedencia" id="procedencia" placeholder="Africa y Asia">
                </div>

                <div class="form-group">
                    <label for="habitat"> habitat </label>
                    <input type="text" class="form-control" name="habitat" id="habitat" placeholder="selva">


                </div>

                <div class="form-group">
                    <label for="gestacion"> gestacion </label>
                    <input type="text" class="form-control" name="gestacion" id="gestacion" placeholder="110 dias">
                </div>
                <div class="form-group">
                    <label for="camada"> camada </label>
                    <input type="text" class="form-control" name="camada" id="camada" placeholder="1-4 crias">
                </div>

                <div class="form-group">
                    <label for="logevidad"> logevidad </label>
                    <input type="text" class="form-control" name="longevidad" id="longevidad" placeholder="10-14 años">
                </div>


                <div class="form-group">
                    <label for="sexo"> sexo </label>
                    <input type="text" class="form-control" name="sexo" id="sexo" placeholder="Masculino">
                </div>


                <div class="form-group">
                    <label for="peso"> peso </label>
                    <input type="text" class="form-control" name="peso" id="peso" placeholder="130  kg">
                </div>

                <div class="form-group">
                    <label for="Ug"> Ubicacion Geografica </label>
                    <input type="text" class="form-control" name="ug" id="ug" placeholder="noreste de africa">
                </div>


                <div class="form-group">
                    <label for="alimentacion"> alimentacion </label>
                    <input type="text" class="form-control" name="alimentacion" id="alimentacion" placeholder="cebras,buffalos ">
                </div>

                <div class="form-group">
                    <label for="dato"> dato curioso </label>
                    <input type="text" class="form-control" name="dato" id="dato" placeholder="es el unico felino que forma manadas ">
                </div>
                  <button class="btn btn-primary">Registrar</button>

            </form>
        </div>
    </div>
@stop