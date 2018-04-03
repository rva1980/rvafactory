<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function show($color = '')
    {
        $paginaActual = 'portfolio';
        
        if ($color == '')
        {
            $color = $this->dameColorAleatorio();
        }
        
        $proyectos = array(
            array(
                'codigo' => 'Pro01',
                'nombre' => 'PAGO GARANTIZADO',
                'tipo' => 'Diseño de logotipo',
                'imagen' => 'logoPagoGarantizado.png',
                'descripcion' => 'Descripción de prueba',
                'link' => ''
            ),
            array(
                'codigo' => 'Pro02',
                'nombre' => 'CARABANCHEL LIGA SUPREME',
                'tipo' => 'Desarrollo web',
                'imagen' => 'logoPagoGarantizado.png',
                'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eget consectetur nisl. Aliquam eget libero finibus, fermentum ligula non, egestas justo.',
                'link' => 'http://carabanchelligasupreme.rvafactory.com'
            ),
            array(
                'codigo' => 'Pro03',
                'nombre' => 'MROJO ARCHITECTURE',
                'tipo' => 'Desarrollo web',
                'imagen' => 'logoPagoGarantizado.png',
                'descripcion' => 'Descripción de prueba',
                'link' => 'http://marcosrojo.com/'
            ),
            array(
                'codigo' => 'Pro04',
                'nombre' => 'E.I. SAN VICENTE DE PAÚL',
                'tipo' => 'Desarrollo web',
                'imagen' => 'logoPagoGarantizado.png',
                'descripcion' => 'Descripción de prueba',
                'link' => 'http://escuelainfantilsanvicente.com'
            ),
            array(
                'codigo' => 'Pro05',
                'nombre' => 'MUÑOZA ROCK',
                'tipo' => 'Diseño de cartelería',
                'imagen' => 'logoPagoGarantizado.png',
                'descripcion' => 'Descripción de prueba',
                'link' => ''
            )
        );


        return view('portfolio', [
            'color' => $color,
            'paginaActual' => $paginaActual,
            'proyectos' => $proyectos
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
