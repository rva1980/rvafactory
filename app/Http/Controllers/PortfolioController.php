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
                'codigo' => 'Pro05',
                'grupo' => 'DiseñoGrafico',
                'nombre' => 'PAGO GARANTIZADO',
                'tipo' => 'Diseño de logotipo',
                'imagen' => 'LogoPagoGarantizado.png',
                'descripcion' => 'Imagen corporativa para empresa de gestión de cobros.',
                'link' => '',
                'visible' => true
            ),
            array(
                'codigo' => 'Pro04',
                'grupo' => 'DesarrolloWeb',
                'nombre' => 'CARABANCHEL LIGA SUPREME',
                'tipo' => 'Desarrollo web',
                'imagen' => 'WebCarabanchelLigaSupreme.png',
                'descripcion' => 'Aplicación para comunidad de fútbol fantasy en la que registrar estadísticas, histórico de clasificaciones, etc. Desarrollada en PHP, con el framework LARAVEL y base de datos MYSQL.',
                'link' => 'http://carabanchelligasupreme.rvafactory.com',
                'visible' => true
            ),
            array(
                'codigo' => 'Pro03',
                'grupo' => 'DesarrolloWeb',
                'nombre' => 'MROJO ARCHITECTURE',
                'tipo' => 'Desarrollo web',
                'imagen' => 'WebMarcosRojo.png',
                'descripcion' => 'Aplicación web personal para el arquitecto Marcos García Rojo. Desarrollada en PHP con el framework SIMPLE MVC FRAMEWORK (actualmente NOVA FRAMEWORK) y base de datos MYSQL.',
                'link' => 'http://marcosrojo.com/',
                'visible' => true
            ),
            array(
                'codigo' => 'Pro02',
                'grupo' => 'DiseñoGrafico',
                'nombre' => 'MUÑOZA ROCK',
                'tipo' => 'Diseño de cartelería',
                'imagen' => 'CartelMunozaRock.png',
                'descripcion' => 'Cartel para varias de las ediciones del festival Muñoza Rock.',
                'link' => '',
                'visible' => true
            ),
            array(
                'codigo' => 'Pro01',
                'grupo' => 'DesarrolloWeb',
                'nombre' => 'E.I. SAN VICENTE DE PAÚL',
                'tipo' => 'Desarrollo web',
                'imagen' => 'WebEscuelaInfantilSanVicente.png',
                'descripcion' => 'Aplicación para escuela de educación infantil. Desarrollada en HTML/CSS/JAVASCRIPT y complementada con el gestor de contenidos MONSTRA.',
                'link' => 'http://escuelainfantilsanvicente.com',
                'visible' => true
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
