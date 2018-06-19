@extends('layouts.rvafactory')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8 col-md-7">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="rva-color"><strong>EXPERIENCIA</strong></h2>
                        @foreach ($experiencias as $experiencia)
                            @if ($experiencia['visible'])
                                <ul class="list-unstyled">
                                    <li class="rva-color"><i class="fas fa-briefcase rva-icono"></i> {{ $experiencia['periodo'] }}</li>
                                    @if ($experiencia['empresa'] != '')
                                        <li>{{ $experiencia['empresa'] }}</li>
                                    @endif
                                    <li>
                                        {{ $experiencia['puesto'] }}
                                        @if ($experiencia['descripcion'] != '')
                                            <a data-toggle="collapse" href="#collapse{{ $experiencia['codigo'] }}" role="button" aria-expanded="false" aria-controls="collapse"><i class="far fa-plus-square rva-color rva-icono" data-fa-i2svg=""></i></a></li>
                                            <li class="collapse rva-color" id="collapse{{ $experiencia['codigo'] }}">
                                                {{ $experiencia['descripcion'] }}
                                        @endif
                                    </li>
                                </ul>
                            @endif
                        @endforeach
                    </div>
                    <div class="col-lg-6">
                        <h2 class="rva-color"><strong>FORMACIÓN</strong></h2>
                        @foreach ($formaciones as $formacion)
                            @if ($formacion['visible'])
                                <ul class="list-unstyled">
                                    <li class="rva-color"><i class="fas fa-graduation-cap rva-icono"></i> {{ $formacion['periodo'] }}</li>
                                    <li>{{ $formacion['centro'] }}</li>
                                    <li>
                                        {{ $formacion['titulo'] }}
                                        @if ($formacion['descripcion'] != '')
                                            <a data-toggle="collapse" href="#collapse{{ $formacion['codigo'] }}" role="button" aria-expanded="false" aria-controls="collapse"><i class="far fa-plus-square rva-color rva-icono" data-fa-i2svg=""></i></a></li>
                                            <li class="collapse rva-color" id="collapse{{ $formacion['codigo'] }}">
                                            {{ $formacion['descripcion'] }}
                                        @endif
                                    </li>
                                </ul>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-5">
                <h2 class="rva-color"><strong>HABILIDADES</strong></h2>
                <ul class="list-unstyled">
                    @foreach ($habilidades as $habilidad)
                        <li>
                            @for ($i = 0; $i < $habilidad['nivel']; $i++)
                                <i class="far fa-dot-circle rva-color rva-icono"></i>
                            @endfor
                            @for ($i = 0; $i < (5 - $habilidad['nivel']); $i++)
                                <i class="far fa-circle rva-color rva-icono"></i>
                            @endfor
                            {{ $habilidad['nombre'] }}
                        </li>
                    @endforeach
                </ul>
                <h2 class="rva-color"><strong>IDIOMAS</strong></h2>
                <ul class="list-unstyled">
                    @foreach ($idiomas as $idioma)
                        <li>
                            @for ($i = 0; $i < $idioma['nivel']; $i++)
                                <i class="far fa-dot-circle rva-color rva-icono"></i>
                            @endfor
                            @for ($i = 0; $i < (5 - $idioma['nivel']); $i++)
                                <i class="far fa-circle rva-color rva-icono"></i>
                            @endfor
                            {{ $idioma['nombre'] }}
                        </li>
                    @endforeach
                </ul>
                <h2 class="rva-color"><strong>AFICIONES</strong></h2>
                <div class="form-group text-right">
                    <a class="btn btn-primary rva-boton" href="#" role="button"><i class="fas fa-file-alt rva-icono"></i> Descargar</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            $('a').on('click', function () {
            $(this)
                .find('[data-fa-i2svg]')
                .toggleClass('fa-plus-square')
                .toggleClass('fa-minus-square');
            });
        });
    </script>

@endsection