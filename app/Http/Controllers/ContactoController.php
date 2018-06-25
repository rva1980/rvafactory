<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{

    public function show($color = '')
    {
        $paginaActual = 'contacto';
        $mensajeEnviado = false;

        if ($color == '') {
            $color = $this->dameColorAleatorio();
        }
        
        return view('contacto', [
            'color' => $color,
            'paginaActual' => $paginaActual,
            'mensajeEnviado' => $mensajeEnviado
            ]);
    }

    public function enviarFormulario($color = '', Request $request)
    {
        $paginaActual = 'contacto';

        if ($color == '') {
            $color = $this->dameColorAleatorio();
        }
        
        //dd($request->all());

        $datosContacto = array(
            'nombre' => $request->nombre,
            'email' => $request->email,
            'asunto' => $request->asunto,
            'mensaje' => $request->mensaje
        );

        Mail::send('correo', $datosContacto, function($correo) {
            $correo->from('ruben@rvafactory.com', 'www.rvafactory.com');    
            $correo->to('ruben@rvafactory.com');
            $correo->subject('FORMULARIO DE CONTACTO');
        });

        $mensajeEnviado = true;

        return view('contacto', [
            'color' => $color,
            'paginaActual' => $paginaActual,
            'mensajeEnviado' => $mensajeEnviado
            ]);
    }

    function dameColorAleatorio()
    {
        $numeroColor = rand(1, 3);
        if ($numeroColor == 1) {
            $color = 'r';
        } elseif ($numeroColor == 2) {
            $color = 'v';
        } elseif ($numeroColor == 3) {
            $color = 'a';
        }
        return $color;
    }
}
