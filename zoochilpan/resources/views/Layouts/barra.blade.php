

<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion">
                <span class="sr-only"> Desplegar/Ocultar Menu </span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="/home" class="navbar-brand">Zoochilpan</a>
        </div>
        <!-- inicia menu -->
        <div class="collapse navbar-collapse  " id="navegacion">
            <ul class="nav navbar-nav">
                @if(Auth::user())
                <li class="dropdown ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gestión de Fauna <span class="caret"></span> </a>
                    <ul class="dropdown-menu" role="menu">
                        <li > Animales  </li>
                        <li > <a href="/animal"> Animales</a> </li>

                        <li > Ejemplares </li>
                        <li > <a href="/ejemplar"> Ejemplares</a> </li>
                        <li > Taxonomia</li>
                        <li > <a href="/familia/create"> Familias</a> </li>
                        <li > <a href="/especie/create"> Especies</a> </li>



                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Control Alimenticio <span class="caret"></span> </a>
                    <ul class="dropdown-menu" role="menu">
                        <li > <a href="/dieta"> Dietas Animales</a> </li>


                        <li class="divider">  </li>
                        <li > <a href="/dietaEjemplar">Dietas Ejemplares</a> </li>

                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">&nbsp;&nbsp;&nbsp;&nbsp;Control de  Salud <span class="caret"></span> </a>
                    <ul class="dropdown-menu" role="menu">
                        <li > Profilaxis  </li>
                        <li > <a href="hojaclinica">Consultas Clínicas</a> </li>
                        <li > <a href="/profilaxis">Medicina Preventiva</a> </li>
                        <li > <a href="/farmaco">Gestión Farmacos</a> </li>

                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">&nbsp;&nbsp;&nbsp;&nbsp; Mortalidad <span class="caret"></span> </a>
                    <ul class="dropdown-menu" role="menu">
                        <li > Necropsias </li>
                        <li > <a href="/necropsia">Gestión Necropsias</a> </li>

                        <li > Siniestro </li>
                        <li > <a href="/siniestro">Gestión Siniestros</a> </li>

                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">&nbsp;&nbsp;&nbsp; {{Auth::user()->name}} <span class="caret"></span> </a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ url('/logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Cerrar sesión
                            </a>

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
                    @else
                        <li><a href="{{ url('/login') }}"> &nbsp;&nbsp;&nbsp;<strong>Iniciar Sesión</strong></a></li>


                @endif
            </ul>


        </div>

    </div>
</nav>