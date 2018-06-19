<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurriculumController extends Controller
{
    public function show($color = '')
    {
        $paginaActual = 'curriculum';

        if ($color == '') {
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
                'codigo' => 'Exp13',
                'periodo' => 'Jun.2018 - Actualidad',
                'empresa' => '',
                'puesto' => 'Desarrollador Freelance',
                'descripcion' => '',
                'visible' => true
            ),
            array(
                'codigo' => 'Exp12',
                'periodo' => 'Sep.2015 - Jun.2018',
                'empresa' => 'BYG SOLUCIONES',
                'puesto' => 'Consultor',
                'descripcion' => '',
                'visible' => true
            ),
            array(
                'codigo' => 'Exp11',
                'periodo' => 'Ene.2010 - Sep.2015',
                'empresa' => '',
                'puesto' => 'Ejercicio Libre',
                'descripcion' => 'Realización de diversos encargos a nivel particular: Delineación de planos, Diseño de carteles, logotipos, etc., desarrollo de aplicaciones web, profesor particular de Dibujo Técnico, matemáticas, física y química.',
                'visible' => true
            ),
            array(
                'codigo' => 'Exp10',
                'periodo' => 'Oct.2014 - Nov.2014',
                'empresa' => 'SYMBOLIC INMUEBLES',
                'puesto' => 'Asesor Inmobiliario',
                'descripcion' => '',
                'visible' => true
            ),
            array(
                'codigo' => 'Exp09',
                'periodo' => 'Jul.2012 - Ago.2012',
                'empresa' => 'JERSEY ENGLISH SCHOOL',
                'puesto' => 'Profesor',
                'descripcion' => 'Profesor de Matemáticas, Física y Química en la academia JERSEY ENGLISH SCHOOL para alumnos de E.S.O. y Bachillerato.',
                'visible' => true
            ),
            array(
                'codigo' => 'Exp08',
                'periodo' => 'Jun.2011 - Sep.2011',
                'empresa' => 'ACCIONA INFRAESTRUCTURAS',
                'puesto' => 'Ayudante de Producción',
                'descripcion' => 'Prácticas de Formación del Certificado de Profesionalidad de Representación de Proyectos de Obra Civil en la obra "Ampliación de la Estación de Tratamiento de Aguas Potables de Valmayor" (P.E.M. 60.000.000 €). Colaboración con el Jefe de Producción y con el Responsable de Calidad y Medio Ambiente.',
                'visible' => true
            ),
            array(
                'codigo' => 'Exp07',
                'periodo' => 'Jun.2007 - Ago.2009',
                'empresa' => 'LENA CONSTRUCCIONES',
                'puesto' => 'Jefe de Producción',
                'descripcion' => 'Jefe de Producción en la obra "140 viviendas, el Bercial, Getafe" (P.E.M. 16.000.000 €). Estrecha colaboración con el Jefe de Obra. Control de la producción. Certificaciones de subcontratístas. Seguimiento del Plan de calidad y Medio Ambiente. Comparativos para contratación. Pedidos.',
                'visible' => true
            ),
            array(
                'codigo' => 'Exp06',
                'periodo' => 'Oct.2006 - May.2007',
                'empresa' => 'ESTUDIO GONZALO CASTIÑEIRA',
                'puesto' => 'Delineante Proyectista',
                'descripcion' => 'Desarrollo de proyectos de edificación y reformas. Dibujo de planos en AutoCAD. Elaboración de presupuestos con PRESTO.',
                'visible' => true
            ),
            array(
                'codigo' => 'Exp05',
                'periodo' => 'Abr.2006 - Sep.2006',
                'empresa' => 'PROSAVAR S.L. Arquitectos e Ingenieros',
                'puesto' => 'Delineante Proyectista',
                'descripcion' => 'Desarrollo de proyectos de edificación y estudio de obras. Delineación de planos con AutoCAD. Elaboración de presupuestos con PRESTO. Toma de datos y mediciones en obra.',
                'visible' => true
            ),
            array(
                'codigo' => 'Exp04',
                'periodo' => 'Sep.2001',
                'empresa' => 'D.T.M. Desarrollo Técnicos y Mantenimiento',
                'puesto' => 'Formador',
                'descripcion' => 'Profesor de AutoCAD 2000 para cursos de empresa.',
                'visible' => true
            ),
            array(
                'codigo' => 'Exp03',
                'periodo' => 'Oct.2006 - May.2007',
                'empresa' => 'BEGUERÍA Y BORDA Consultores Asociados S.L.',
                'puesto' => 'Delineante',
                'descripcion' => 'Colaboración en el desarrollo del módulo SENMUT ALLPLAN para el programa SENMUT EXPERTO, aplicación informática de gestión documental de Seguridad y Salud para obras de edificación u obra civil.',
                'visible' => true
            ),
            array(
                'codigo' => 'Exp02',
                'periodo' => 'Ago.2000 - Sep.2000',
                'empresa' => 'M.C.L. Managing Change Limited. London',
                'puesto' => 'Delineante Proyectista',
                'descripcion' => 'Eurobeca de la Obra Social de Caja de Madrid. Programa de intercambio con prácticas de empresa en Londres. Colaboración en el desarrollo de proyectos de edificación y reformas de edificios singulares.',
                'visible' => true
            ),
            array(
                'codigo' => 'Exp01',
                'periodo' => 'Mar.2000 - Jun.2000',
                'empresa' => 'R.E.N.F.E. Departamento de Arquitectura de Estaciones Comerciales',
                'puesto' => 'Delineante Proyectista',
                'descripcion' => 'Prácticas de formación del Ciclo Formativo de Grado Superior de Desarrollo y Aplicación de Proyectos de Construcción. Colaboración en el desarrollo de proyectos de reforma y ampliación de estaciones de ferrocarril.',
                'visible' => true
            )
        );

        $formaciones = array(
            array(
                'codigo' => 'For07',
                'periodo' => 'Abr.2015 - Sep.2015',
                'centro' => 'MICROFORUM',
                'titulo' => 'Desarrollador de Sitios Web Dinámicos',
                'descripcion' => 'Curso de 575 horas.',
                'visible' => true
            ),
            array(
                'codigo' => 'For06',
                'periodo' => 'Nov.2011 - Dic.2011',
                'centro' => 'FORMAD',
                'titulo' => 'Aplicaciones Informáticas para la Certificación Energética',
                'descripcion' => 'Curso de 158 horas.',
                'visible' => true
            ),
            array(
                'codigo' => 'For05',
                'periodo' => 'Ene.2011 - Jul.2011',
                'centro' => 'UNIVERSIDAD POLITÉCNICA DE MADRID',
                'titulo' => 'Certificado de Profesionalidad en Representación de de Proyectos de Obra Civil',
                'descripcion' => '',
                'visible' => true
            ),
            array(
                'codigo' => 'For04',
                'periodo' => 'Feb.2011 - Abr.2011',
                'centro' => 'AGENCIA PARA EL EMPLEO DE MADRID',
                'titulo' => 'Técnico en Energías Sostenibles y Respetuosas con el Medio Ambiente',
                'descripcion' => 'Curso de 190 horas.',
                'visible' => true
            ),
            array(
                'codigo' => 'For03',
                'periodo' => 'Oct.2009 - Nov.2009',
                'centro' => 'GARBEN CONSULTORES',
                'titulo' => 'Diseñador Web y Multimedia',
                'descripcion' => 'Curso de 230 horas.',
                'visible' => true
            ),
            array(
                'codigo' => 'For02',
                'periodo' => 'Sep.2000 - Feb.2007',
                'centro' => 'UNIVERSIDAD POLITÉCNICA DE MADRID',
                'titulo' => 'Arqutecto Técnico',
                'descripcion' => '',
                'visible' => true
            ),
            array(
                'codigo' => 'For01',
                'periodo' => '1998 - 2000',
                'centro' => 'SANTA MARÍA DEL CASTILLO',
                'titulo' => 'Técnico Superior en Desarrollo y Aplicación de Proyectos de Construcción',
                'descripcion' => '',
                'visible' => true
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
