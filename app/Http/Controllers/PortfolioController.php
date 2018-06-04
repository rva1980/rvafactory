<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function show($color = '')
    {
        $paginaActual = 'portfolio';
        
        if ($color == '') {
            $color = $this->dameColorAleatorio();
        }
        
        $proyectos = array(
            array(
                'codigo' => 'Pro01',
                'grupo' => 'DiseñoGrafico',
                'nombre' => 'PAGO GARANTIZADO',
                'tipo' => 'Diseño de logotipo',
                'imagen' => 'LogoPagoGarantizado.png',
                'descripcion' => 'Descripción de prueba',
                'link' => ''
            ),
            array(
                'codigo' => 'Pro02',
                'grupo' => 'DesarrolloWeb',
                'nombre' => 'CARABANCHEL LIGA SUPREME',
                'tipo' => 'Desarrollo web',
                'imagen' => 'WebCarabanchelLigaSupreme.png',
                'descripcion' => 'Aplicación para comunidad de fútbol fantasy en la que registrar estadísticas, histórico de clasificaciones, etc. Desarrollada en php, con el framework Laravel y base de datos MySQL.',
                'link' => 'http://carabanchelligasupreme.rvafactory.com'
            ),
            array(
                'codigo' => 'Pro03',
                'grupo' => 'DesarrolloWeb',
                'nombre' => 'MROJO ARCHITECTURE',
                'tipo' => 'Desarrollo web',
                'imagen' => 'WebMarcosRojo.png',
                'descripcion' => 'Descripción de prueba',
                'link' => 'http://marcosrojo.com/'
            ),
            array(
                'codigo' => 'Pro04',
                'grupo' => 'DiseñoGrafico',
                'nombre' => 'MUÑOZA ROCK',
                'tipo' => 'Diseño de cartelería',
                'imagen' => 'CartelMunozaRock.png',
                'descripcion' => 'Descripción de prueba',
                'link' => ''
            ),
            array(
                'codigo' => 'Pro05',
                'grupo' => 'DesarrolloWeb',
                'nombre' => 'E.I. SAN VICENTE DE PAÚL',
                'tipo' => 'Desarrollo web',
                'imagen' => 'WebEscuelaInfantilSanVicente.png',
                'descripcion' => 'Descripción de prueba',
                'link' => 'http://escuelainfantilsanvicente.com'
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
