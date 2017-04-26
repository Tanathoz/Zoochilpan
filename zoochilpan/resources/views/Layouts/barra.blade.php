

<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion">
                <span class="sr-only"> Desplegar/Ocultar Menu </span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Zoochilpan</a>
        </div>
        <!-- inicia menu -->
        <div class="collapse navbar-collapse  " id="navegacion">
            <ul class="nav navbar-nav">
                <li class="dropdown ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Ejemplares <span class="caret"></span> </a>
                    <ul class="dropdown-menu" role="menu">
                        <li > Animales </li>
                        <li > <a href="/animal">Consultar animales</a> </li>
                        <li > <a href="/animal/create">Registrar animal</a> </li>

                        <li class="divider">  </li>
                        <li > Ejemplares </li>
                        <li > <a href="/ejemplar">Consultar Ejemplares</a> </li>
                        <li > <a href="/ejemplar/create">Registro Ejemplar</a> </li>
                        <li class="divider">  </li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Dietas <span class="caret"></span> </a>
                    <ul class="dropdown-menu" role="menu">
                        <li > <a href="#">Consultar dietas</a> </li>
                        <li > <a href="#">Registrar dieta</a> </li>

                        <li class="divider">  </li>
                        <li > <a href="#">Consultar dietas ejemplares</a> </li>
                        <li > <a href="#">Registro dieta ejemplar</a> </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Farmacos <span class="caret"></span> </a>
                    <ul class="dropdown-menu" role="menu">
                        <li > <a href="#">Consultar fármacos</a> </li>
                        <li > <a href="#">Registrar fármaco</a> </li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Historial Médico <span class="caret"></span> </a>
                    <ul class="dropdown-menu" role="menu">
                        <li > Hojas Clínicas </li>
                        <li > <a href="#">Consultar hojas</a> </li>
                        <li > <a href="#">Registrar hojas</a> </li>

                        <li class="divider">  </li>
                        <li > Hojas de Profilaxis </li>
                        <li > <a href="#">Consultar hojas</a> </li>
                        <li > <a href="#">Registro hoja</a> </li>
                        <li class="divider">  </li>
                        <li > <a href="#">Ver expediente</a> </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Necropsias <span class="caret"></span> </a>
                    <ul class="dropdown-menu" role="menu">
                        <li > Necropsias </li>
                        <li > <a href="#">Consultar necropsias</a> </li>
                        <li > <a href="#">Registrar necropsia</a> </li>

                        <li class="divider">  </li>
                        <li > Siniestro </li>
                        <li > <a href="#">Consultar siniestros</a> </li>
                        <li > <a href="#">Registro siniestro</a> </li>

                    </ul>
                </li>
            </ul>
            <form action="" class="navbar-form navbar-right" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="buscar">
                </div>
                <button type="submit" class="btn btn-primary">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </form>

        </div>

    </div>
</nav>