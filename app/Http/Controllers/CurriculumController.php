<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurriculumController extends Controller
{
    public function show($color = '')
    {
        $paginaActual = 'curriculum';
        if ($color == '')
        {
            $color = $this->dameColorAleatorio();
        }
        
        $habilidades = array(
            array(
                'nombre' => 'HTML',
                'nivel' => 3
            ),
            array(
                'nombre' => 'CSS3',
                'nivel' => 4
            ),
            array(
                'nombre' => 'Bootstrap',
                'nivel' => 4
            ),
            array(
                'nombre' => 'Java Script',
                'nivel' => 2
            ),
            array(
                'nombre' => 'JQuery',
                'nivel' => 2
            ),
            array(
                'nombre' => 'PHP',
                'nivel' => 3
            ),
            array(
                'nombre' => 'Java',
                'nivel' => 2
            ),
            array(
                'nombre' => 'VB.Net',
                'nivel' => 4
            ),
            array(
                'nombre' => 'C#.Net',
                'nivel' => 3
            ),
            array(
                'nombre' => 'MVC',
                'nivel' => 4
            ),
            array(
                'nombre' => 'SQL Server',
                'nivel' => 4
            ),
            array(
                'nombre' => 'MySQL',
                'nivel' => 3
            ),
            array(
                'nombre' => 'AutoCAD',
                'nivel' => 5
            ),
            array(
                'nombre' => 'Photoshop',
                'nivel' => 4
            )
        );

        $idiomas = array(
            array(
                'nombre' => 'Español',
                'nivel' => 5
            ),
            array(
                'nombre' => 'Inglés',
                'nivel' => 3
            )
        );

        $experiencias = array(
            array(
                'codigo' => 'Exp01',
                'periodo' => 'Sep.2015 - Actualidad',
                'empresa' => 'BYG SOLUCIONES',
                'puesto' => 'Desarrollador',
                'descripcion' => ''
            ),
            array(
                'codigo' => 'Exp02',
                'periodo' => 'Ene.2010 - Sep.2015',
                'empresa' => 'EJERCICIO LIBRE',
                'puesto' => 'Ejercicio Libre',
                'descripcion' => 'Realización de diversos encargos a nivel particular: Delineación de planos, Diseño de carteles, logotipos, etc., desarrollo de aplicaciones web, profesor particular de Dibujo Técnico, matemáticas, física y química.'
            ),
            array(
                'codigo' => 'Exp03',
                'periodo' => 'Oct.2014 - Nov.2014',
                'empresa' => 'SYMBOLIC INMUEBLES',
                'puesto' => 'Asesor Inmobiliario',
                'descripcion' => ''
            ),
            array(
                'codigo' => 'Exp04',
                'periodo' => 'Jul.2012 - Ago.2012',
                'empresa' => 'JERSEY ENGLISH SCHOOL',
                'puesto' => 'Profesor',
                'descripcion' => 'Profesor de Matemáticas, Física y Química en la academia JERSEY ENGLISH SCHOOL para alumnos de E.S.O. y Bachillerato.'
            ),
            array(
                'codigo' => 'Exp05',
                'periodo' => 'Jun.2011 - Sep.2011',
                'empresa' => 'ACCIONA INFRAESTRUCTURAS',
                'puesto' => 'Ayudante de Producción',
                'descripcion' => 'Prácticas de Formación del Certificado de Profesionalidad de Representación de Proyectos de Obra Civil en la obra "Ampliación de la Estación de Tratamiento de Aguas Potables de Valmayor" (P.E.M. 60.000.000 €). Colaboración con el Jefe de Producción y con el Responsable de Calidad y Medio Ambiente.'
            ),
            array(
                'codigo' => 'Exp06',
                'periodo' => 'Jun.2007 - Ago.2009',
                'empresa' => 'LENA CONSTRUCCIONES NOZAR GRUPO INMOBILIARIO',
                'puesto' => 'Jefe de Producción',
                'descripcion' => 'Jefe de Producción en la obra "140 viviendas, el Bercial, Getafe" (P.E.M. 16.000.000 €). Estrecha colaboración con el Jefe de Obra. Control de la producción. Certificaciones de subcontratístas. Seguimiento del Plan de calidad y Medio Ambiente. Comparativos para contratación. Pedidos.'
            ),
            array(
                'codigo' => 'Exp07',
                'periodo' => 'Oct.2006 - May.2007',
                'empresa' => 'ESTUDIO GONZALO CASTIÑEIRA',
                'puesto' => 'Delineante Proyectista',
                'descripcion' => 'Desarrollo de proyectos de edificación y reformas. Dibujo de planos en AutoCAD. Elaboración de presupuestos con PRESTO.'
            )
        );

        $formaciones = array(
            array(
                'codigo' => 'For01',
                'periodo' => 'Abr.2015 - Sep.2015',
                'centro' => 'MICROFORUM',
                'titulo' => 'Desarrollador de Sitios Web Dinámicos',
                'descripcion' => 'Curso de 575 horas.'
            ),
            array(
                'codigo' => 'For02',
                'periodo' => 'Nov.2011 - Dic.2011',
                'centro' => 'FORMAD',
                'titulo' => 'Aplicaciones Informáticas para la Certificación Energética',
                'descripcion' => 'Curso de 158 horas.'
            ),
            array(
                'codigo' => 'For03',
                'periodo' => 'Ene.2011 - Jul.2011',
                'centro' => 'UNIVERSIDAD POLITÉCNICA DE MADRID',
                'titulo' => 'Certificado de Profesionalidad en Representación de de Proyectos de Obra Civil',
                'descripcion' => ''
            ),
            array(
                'codigo' => 'For04',
                'periodo' => 'Feb.2011 - Abr.2011',
                'centro' => 'AGENCIA PARA EL EMPLEO DE MADRID',
                'titulo' => 'Técnico en Energías Sostenibles y Respetuosas con el Medio Ambiente',
                'descripcion' => 'Curso de 190 horas.'
            ),
            array(
                'codigo' => 'For05',
                'periodo' => 'Oct.2009 - Nov.2009',
                'centro' => 'GARBEN CONSULTORES',
                'titulo' => 'Diseñador Web y Multimedia',
                'descripcion' => 'Curso de 230 horas.'
            ),
            array(
                'codigo' => 'For06',
                'periodo' => 'Sep.2000 - Feb.2007',
                'centro' => 'UNIVERSIDAD POLITÉCNICA DE MADRID',
                'titulo' => 'Arqutecto Técnico',
                'descripcion' => ''
            ),
            array(
                'codigo' => 'For07',
                'periodo' => '1998 - 2000',
                'centro' => 'SANTA MARÍA DEL CASTILLO',
                'titulo' => 'Técnico Superior en Desarrollo y Aplicación de Proyectos de Construcción',
                'descripcion' => ''
            )
        );

        return view('curriculum', [
            'color' => $color,
            'paginaActual' => $paginaActual,
            'habilidades' => $habilidades,
            'idiomas' => $idiomas,
            'experiencias' => $experiencias,
            'formaciones' => $formaciones
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
