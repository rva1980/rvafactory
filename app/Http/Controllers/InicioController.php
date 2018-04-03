<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function show($color = '')
    {
        $paginaActual = 'inicio';

        if ($color == '')
        {
            $color = $this->dameColorAleatorio();
        }
        
        return view('inicio', [
            'color' => $color,
            'paginaActual' => $paginaActual
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
