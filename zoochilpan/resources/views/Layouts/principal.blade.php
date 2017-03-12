<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- {!! Html::style('/css/formulario.css') !!}-->
    {!! Html::style('/css/bootstrap.css') !!}
    {!! Html::style('/css/bootstrap.min.css') !!}
   <!--{!! Html::style('/css/estiloTablas.css') !!}-->
    <title>Registro de ejemplar</title>
</head>
<body>
<section class="container">
    <div class="row">
        <div class="col-md-12">
            @yield('content')

        </div>
    </div>
</section>
{!! Html::script('js/jquery-3.1.1.js') !!}
{!! Html::script('js/bootstrap.min.js') !!}
{!! Html::script('js/mostrarOpciones.js') !!}
@yield('javascript')
</body>

</html>