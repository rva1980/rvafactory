<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{

    public function show($colorC = '')
    {
        $paginaActual = 'contacto';

        if ($colorC == '')
        {
            $color = $this->dameColorAleatorio();
        }
        else
        {
            $color = $colorC;
        }
        
        return view('contacto', [
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
