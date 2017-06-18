<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="stylesheet" href="{{asset('plugin/css/bootstrap.css')}}">
   <link rel="stylesheet" href="{{asset('plugin/css/miEstilo.css')}}">
    <link rel="stylesheet" href="{{asset('plugin/css/bootstrap-datetimepicker.min.css')}}">

    <!-- {!! Html::style('/css/formulario.css') !!}-->
  <!--  {!! Html::style('/css/bootstrap.css') !!}-->
  <!--  {!! Html::style('/css/bootstrap.min.css') !!}-->
   <!--{!! Html::style('/css/estiloTablas.css') !!}-->
    <title>Zoochilpan</title>
    <link rel="shortcut icon" href="/plugin/img/huella.ico">
</head>
<body >

<header>

    <img src="/plugin/img/logos.PNG"  class="img-responsive" width="1300px" height="50px"/>
</header>
 @include('Layouts.barra')


<section class="container"  >

    <div   class="row" >
        <div class="col-md-12 " >
            @yield('content')

        </div>
    </div>

</section>


{!! Html::script('js/jquery-3.1.1.js') !!}
{!! Html::script('js/jquery-1.11.3.js') !!}
{!! Html::script('js/bootstrap.min.js') !!}
{!! Html::script('js/moment.min.js') !!}
{!! Html::script('js/bootstrap-datetimepicker.min.js') !!}
{!! Html::script('js/bootstrap-datetimepicker.es.js') !!}
{!! Html::script('js/mostrarOpciones.js') !!}


@yield('javascript')
<footer>
    <img src="/plugin/img/footer.png"  width="1400px" height="50px"/>

</footer>
</body>

</html>