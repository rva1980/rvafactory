<!DOCTYPE html>

<html lang="es-ES">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <p><strong>Nombre:</strong> {!! $nombre !!}<p>
        <p><strong>Email:</strong> {!! $email !!}<p>
        <p><strong>Asunto:</strong> {!! $asunto !!}<p>
        <div>
            <strong>Mensaje:</strong><br>
            {!! nl2br($mensaje) !!}
        </div>
        <p><strong>Mensaje enviado desde formulario de contacto de www.rvafactory.com</strong></p>
    </body>
</html>
