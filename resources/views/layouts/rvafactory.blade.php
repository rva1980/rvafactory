<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>
            @if ($paginaActual != 'inicio')
                {{ $paginaActual }} - 
            @endif
            rvafactory
        </title>
        <!-- Styles -->
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Mis estilos -->
        <link href="/css/rvafactory.css" rel="stylesheet">
        <link href="/css/rvafactory{{ $color }}.css" rel="stylesheet">
    </head>
    <body class="rva-fondo">
        <div class="container">
            <div class="clearfix border border-top-0 border-right-0 border-left-0 rva-bloque">
                <nav class="nav float-left flex-column flex-sm-row mt-3">
                    @if ($paginaActual == 'inicio')                                
                        <a class="nav-link pb-0 pb-sm-2 pr-0 rva-menu-activo" href="/inicio/{{ $color }}">rvafactory</a>
                    @else
                        <a class="nav-link pb-0 pb-sm-2 pr-0" href="/inicio/{{ $color }}">rvafactory</a>
                    @endif
                    @if ($paginaActual == 'portfolio')                                
                        <a class="nav-link pt-0 pt-sm-2 pr-0 rva-menu-activo" href="/portfolio/{{ $color }}">portfolio</a>
                    @else
                        <a class="nav-link pt-0 pt-sm-2 pr-0" href="/portfolio/{{ $color }}">portfolio</a>
                    @endif
                </nav>
                <nav class="nav float-right text-right flex-column flex-sm-row mt-3">
                    @if ($paginaActual == 'curriculum')                                
                        <a class="nav-link pb-0 pb-sm-2 pl-0 rva-menu-activo" href="/curriculum/{{ $color }}">curriculum</a>
                    @else
                        <a class="nav-link pb-0 pb-sm-2 pl-0" href="/curriculum/{{ $color }}">curriculum</a>
                    @endif
                    @if ($paginaActual == 'contacto')                                
                        <a class="nav-link pt-0 pt-sm-2 pl-0 rva-menu-activo" href="/contacto/{{ $color }}">contacto</a>
                    @else
                        <a class="nav-link pt-0 pt-sm-2 pl-0" href="/contacto/{{ $color }}">contacto</a>
                    @endif
                </nav>
            </div>
            <header class="border border-right-0 border-left-0 rva-bloque">
                <div class="container text-center">
                    <div class="rva-perfil">
                        <img class="img-fluid" src="/images/perfil.png" alt="perfil"/>
                    </div>
                    <!--div class="rva-factory">
                        <img class="img-fluid" src="images/rvafactory.png" alt="rvafactory"/>
                        <img class="img-fluid rva-sombra" src="images/rvafactory{{ $color }}.png" alt="rvafactory"/>
                    </div-->
                    <div class="rva-rvafactory">
                        <a href="/{{ $paginaActual }}/r" class="rva-r">r</a><a href="/{{ $paginaActual }}/v" class="rva-v">v</a><a href="/{{ $paginaActual }}/a" class="rva-a">a</a>factory
                    </div>
                    <p>
                        Desarrollador
                    </p>
                </div>
            </header>
            <main class="border border-right-0 border-left-0 pt-3 rva-bloque">
                @section('contenido')
                    Contenido principal.
                @show
            </main>
            <footer class="border border-right-0 border-left-0 border-bottom-0 pt-3 pb-2 rva-bloque">
                <div class="container">
                    <p class="text-center">
                        <a href="https://github.com/rva1980" target="_blank"><i class="fab fa-github fa-lg rva-icono"></i></a>&nbsp;
                        <a href="https://www.linkedin.com/in/rva1980" target="_blank"><i class="fab fa-linkedin-in fa-lg rva-icono"></i></a>&nbsp;
                        <a href="https://twitter.com/rva1980" target="_blank"><i class="fab fa-twitter fa-lg rva-icono"></i></a>
                    </p>
                </div>
            </footer>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <!-- Font Awesome -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.1/js/all.js"></script>
    </body>
</html>
