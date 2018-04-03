@extends('layouts.rvafactory')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <h2 class="rva-color"><strong>MIS PROYECTOS</strong></h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eget consectetur nisl. Aliquam eget libero finibus, fermentum ligula non, egestas justo. Phasellus tempus enim vitae mattis rutrum.
                </p>
            </div>
            @foreach ($proyectos as $proyecto)
                <div class="col-lg-4 col-md-6">
                    <img src="/images/portfolio/{{ $proyecto['imagen'] }}" class="img-fluid rounded mb-2 rva-imagen" alt="{{ $proyecto['nombre'] }}">
                    <ul class="list-unstyled">
                        <li class="rva-color"><i class="fas fa-paint-brush rva-icono"></i> {{ $proyecto['nombre'] }}</li>
                        <li>
                            {{ $proyecto['tipo'] }}
                            @if ($proyecto['descripcion'] != '')
                                <a data-toggle="collapse" href="#collapse{{ $proyecto['codigo'] }}" role="button" aria-expanded="false" aria-controls="collapse"><i class="fas fa-plus-circle rva-color rva-icono" data-fa-i2svg=""></i></a></li>
                                <li class="collapse rva-color" id="collapse{{ $proyecto['codigo'] }}">
                                    {{ $proyecto['descripcion'] }}
                                    @if ($proyecto['link'] != '')
                                        <br><a class="btn btn-primary rva-boton mt-1" href="{{ $proyecto['link'] }}" target="_blank" role="button"><i class="fas fa-external-link-alt rva-icono"></i> Visitar</a>
                                    @endif
                            @endif
                        </li>
                    </ul>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            $('a').on('click', function () {
            $(this)
                .find('[data-fa-i2svg]')
                .toggleClass('fa-plus-circle')
                .toggleClass('fa-minus-circle');
            });
        });
    </script>
@endsection