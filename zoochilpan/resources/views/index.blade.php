@extends('Layouts.principal')

@section('content')

   <style>
       .carousel-inner > .item > img {
           margin: 0 auto;
       }



   </style>
   <section id="carousel">
       <div class="hero-unit span6 columns">
           <center><h3 class="opcion_iluminada"> Sistema  de gestión de control  veterinario  </h3></center>
           <div id="myCarousel" class="carousel  slide" >
               <ol class="carousel-indicators">
                   <li data-target="#carrusel1" data-slide-to="0" class="active"></li>
                   <li data-target="#carrusel1" data-slide-to="1"></li>
                   <li data-target="#carrusel1" data-slide-to="2"></li>
                   <li data-target="#carrusel1" data-slide-to="3"></li>
                   <li data-target="#carrusel1" data-slide-to="4"></li>
               </ol>
               <!-- Carousel items -->
               <div class="carousel-inner">
                   <div class="item  active" >
                       <img alt=""  src="img/zoo1.jpg"  height="200">
                       <div class="carousel-caption">
                           <h4>Nuevos ejemplares en zoochilpan</h4>
                           <h2> Canguro con bigotes</h2>
                       </div>
                   </div>
                   <div class="item">
                       <img alt="100"  class="img-responsive" src="img/zoo8.jpg" height="200">
                       <div class="carousel-caption hidden-xs hidden-sm">
                           <h4>Nuevos ejemplares en zoochilpan</h4>
                           <h2> Jaguarundi</h2>
                       </div>
                   </div>
                   <div class="item">
                       <img alt=""   src="img/zoo4.jpg" height="200">
                       <div class="carousel-caption">
                           <h4>Nuevos ejemplares en zoochilpan</h4>
                           <h2> Cebras </h2>
                       </div>
                   </div>
                   <div class="item">
                       <img alt=""   src="img/zoo5.jpg" height="200">
                       <div class="carousel-caption">
                           <h4>Nuevos ejemplares en zoochilpan</h4>
                           <h2> Tigre de bengala</h2>
                       </div>
                   </div>
                   <div class="item">
                       <img alt=""   src="img/zoo6.jpeg" height="200">
                       <div class="carousel-caption">
                           <h4>Nuevos ejemplares en zoochilpan</h4>
                           <h2> Oso Pardo</h2>
                       </div>
                   </div>
               </div>
               <!-- Carousel nav -->
               <a href="#myCarousel" class="left carousel-control" role="button" data-slide="prev">
                   <span class="glyphicon glyphicon-chevron-left"></span>
                   <span class="sr-only"></span>
               </a>
               <a href="#myCarousel" class="right carousel-control" role="button" data-slide="next">
                   <span class="glyphicon glyphicon-chevron-right"></span>
                   <span class="sr-only"></span>
               </a>
           </div>
       </div>




@endsection