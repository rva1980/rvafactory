@extends('layouts.rvafactory')

@section('contenido')
    <div class="container">
        <form method="post">
            {{ csrf_field() }}
            @if ($mensajeEnviado)
                <div class="row">
                    <div class="col">
                        <div class="alert alert-warning alert-dismissible fade show rva-alerta" role="alert">
                            Mensaje recibido. ¡Gracias!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            @endif
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="rva-color"><strong>CUÉNTAME...</strong></h2>
                    <p>
                        Si quieres realizar cualquier consulta puedes hacerlo rellenando este formulario de contacto o, si lo prefieres, puedes contactar conmigo directamente mediante el correo electrónico o el teléfono que hay a continuación.
                    </p>
                    <p>
                        En cualquiera de los casos, ¡muchas gracias!, intentaré contestarte lo antes posible.
                    </p>
                    <ul class="fa-ul">
                        <li><span class="fa-li"><i class="fas fa-envelope fa-fw rva-color rva-icono"></i></span>ruben@rvafactory.com</li>
                        <li><span class="fa-li"><i class="fas fa-phone fa-fw rva-color rva-icono"></i></span>(+34) 658 55 24 23</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    
                    <div class="form-group">
                        <label for="nombreInput" class="rva-color"><i class="fas fa-user rva-icono"></i> Nombre:</label>
                        <input type="text" class="form-control rva-input" id="nombreInput" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="emailInput" class="rva-color"><i class="fas fa-envelope rva-icono"></i> Correo electrónico:</label>
                        <input type="email" class="form-control rva-input" id="emailInput" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="asuntoInput" class="rva-color"><i class="fas fa-question-circle rva-icono"></i> Asunto:</label>
                        <input type="text" class="form-control rva-input" id="asuntoInput" name="asunto" required>
                    </div>
                    <div class="form-group">
                        <label for="mensajeInput" class="rva-color"><i class="fas fa-comment-alt rva-icono"></i> Mensaje:</label>
                        <textarea class="form-control rva-input" id="mensajeInput" rows="6" name="mensaje" required></textarea>
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-primary rva-boton"><i class="fas fa-arrow-circle-right rva-icono"></i> Enviar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection