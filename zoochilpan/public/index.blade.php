@extends('Layouts.principal')

@section('content')

<div class="container">
    <br>
    <center><h5>Bienvenido !!</h5></center>
    <div class="col-md-12">
        <div id="carrusel1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carrusel1" data-slide-to="0" class="active"></li>
                <li data-target="#carrusel1" data-slide-to="1"></li>
                <li data-target="#carrusel1" data-slide-to="2"></li>
                <li data-target="#carrusel1" data-slide-to="3"></li>
                <li data-target="#carrusel1" data-slide-to="4"></li>
            </ol>

            <!-- contenedor -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="img/zoo1.jpg" class="img-responsive" alt="">
                    <div class="carousel-caption hidden-xs hidden-sm">
                        <h3> Nuevos ejemplares</h3>
                        <p> Descrubelos en Zoochilpan</p>
                    </div>
                </div>

                <div class="item">
                    <img src="img/zoo2.jpeg" class="img-responsive" alt="">
                    <div class="carousel-caption hidden-xs hidden-sm">
                        <h3> Oso pardo  </h3>
                        <p> Descrubelos en Zoochilpan</p>
                    </div>
                </div>

                <div class="item">
                    <img src="img/zoo3.jpg" class="img-responsive" alt="">
                    <div class="carousel-caption hidden-xs hidden-sm">
                        <h3> Lobo Mexicano</h3>
                        <p> Descrubelos en Zoochilpan</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="img/zoo4.jpg" class="img-responsive" alt="">
                <div class="carousel-caption hidden-xs hidden-sm">
                    <h3> Cebras</h3>
                    <p> Descrubelos en Zoochilpan</p>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="img/zoo5.jpg" class="img-responsive" alt="">
            <div class="carousel-caption hidden-xs hidden-sm">
                <h3> Tigre de bengala</h3>
                <p> Descrubelos en Zoochilpan</p>
            </div>
        </div>
    </div>


    <a href="#carrusel1" class="left carousel-control" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only"></span>
            </a>

            <a href="#carrusel1" class="right carousel-control" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only"></span>
            </a>
        </div>
    </div>

</div>





@endsection