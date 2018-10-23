@extends('layouts.rvafactory')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <h2 class="rva-color"><strong>MIS PROYECTOS</strong></h2>
                <p>
                    Aquí puedes ver una selección de algunos de los trabajos que he realizado.<span class="rva-parpadeo">█</span>
                </p>
                <p>
                    <a class="btn btn-primary rva-boton" data-toggle="collapse" href=".GrupoDesarrolloWeb" role="button" aria-expanded="false" aria-controls="collapse"><i class="far fa-check-square rva-icono" data-fa-i4svg=""></i> Desarrollo Web</a>
                </p>
                <p>
                    <a class="btn btn-primary rva-boton" data-toggle="collapse" href=".GrupoDiseñoGrafico" role="button" aria-expanded="false" aria-controls="collapse"><i class="far fa-check-square rva-icono" data-fa-i4svg=""></i> Diseño Gráfico</a>
                </p>
            </div>
            @foreach ($proyectos as $proyecto)
                @if ($proyecto['visible'])
                    <div class="col-lg-4 col-md-6 Grupo{{ $proyecto['grupo'] }} collapse show">
                        <a data-toggle="collapse" href="#collapse{{ $proyecto['codigo'] }}" role="button" aria-expanded="false" aria-controls="collapse">
                            <img src="/images/portfolio/{{ $proyecto['imagen'] }}" class="img-fluid rounded mb-2 rva-imagen" alt="{{ $proyecto['nombre'] }}">
                        </a>
                        <ul class="list-unstyled">
                            <li class="rva-color"><i class="fas fa-paint-brush rva-icono"></i> {{ $proyecto['nombre'] }}</li>
                            <li>
                                {{ $proyecto['tipo'] }}
                                @if ($proyecto['descripcion'] != '')
                                    <a data-toggle="collapse" href="#collapse{{ $proyecto['codigo'] }}" role="button" aria-expanded="false" aria-controls="collapse"><i class="far fa-plus-square rva-color rva-icono" data-fa-i2svg=""></i></a></li>
                                    <li class="collapse rva-color" id="collapse{{ $proyecto['codigo'] }}">
                                        {{ $proyecto['descripcion'] }}
                                        @if ($proyecto['link'] != '')
                                            <br><a class="btn btn-primary rva-boton mt-2" href="{{ $proyecto['link'] }}" target="_blank" role="button"><i class="fas fa-external-link-alt rva-icono"></i> Visitar</a>
                                        @endif
                                @endif
                            </li>
                        </ul>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            $('a').on('click', function () {
            $(this)
                .find('[data-fa-i2svg]')
                .toggleClass('fa-plus-square')
                .toggleClass('fa-minus-square');
            $(this)
                .find('[data-fa-i4svg]')
                .toggleClass('fa-square')
                .toggleClass('fa-check-square');
            });
        });
    </script>
@endsection