@section('CSS')

    <link rel="stylesheet" type="text/css" href="{{ asset('css/estilos_principal.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/estilos_mapa.css') }}">
    <link rel="stylesheet" href="iconos/css/all.css">
@endsection
@extends('layouts.principal')
@section('contenido')
    <div class="contenido">
        <p class="texto">Si estas interesado en participar en alguno de los eventos que se organizan en las
            bibliotecas de la ciudad, pasa el raton por encima de la biblioteca que sea de tu interes para obtener
            mas informacion,gracias.</p>
        <div class="mapa_imagen" >
            <img  src="Imagenes/mapa.png" alt="imagen de mapa de bibliotecas de zaragoza" class="mapa_img" />

            <ul class="notas">
                <li id="nota1">
                    <p class="not1">Biblioteca Municipal Rafael Andolz Horario: lunes-sabado de 8:30 a 21:00 Evento:
                        Actualmente no hay ningun evento</p>
                </li>
                <li id="nota2">
                    <p class="not2">Biblioteca Municipal Benjamín Jarnés Horario: Martes-sabado de 8:30 a 21:00
                        Evento:Firma de libros Ángel Martín</p>
                </li>
                <li id="nota3">
                    <p class="not3">Biblioteca Municipal Santa Orosia Horario: lunes-sabado de 8:30 a 21:00
                        Evento:Taller literario surrealista </p>
                </li>
                <li id="nota4">
                    <p class="not4">Biblioteca Municipal Vientos del Pueblo Horario: lunes-sabado de 8:30 a 21:00
                        Evento:Taller literario surrealista</p>
                </li>
                <li id="nota5">
                    <p class="not5">Centro de Documentación del Agua y del Medio Ambiente Horario: lunes-sabado de
                        9:30 a 20:30 Evento:Encuentro con las editoras de La Biblioteca</p>
                </li>
                <li id="nota6">
                    <p class="not6">Biblioteca Municipal María Moliner (Casco Histórico) Horario: lunes-sabado de
                        8:30 a 21:00 PRESENTACION DEL LIBRO “EL SUEÑO DEL GRAMÁTICO</p>
                </li>
                <li id="nota7">
                    <p class="not7">Biblioteca Municipal Ricardo Magdalena Horario: lunes-sabado de 8:30 a 21:00
                        Evento:XXVII Certamen Literario </p>
                </li>
                <li id="nota8">
                    <p class="not8">Biblioteca de Aragón. Instituto Bibliográfico Aragonés Horario: lunes-sabado de
                        9:00 a 21:00 Evento:Actualmente no hay ningun evento</p>
                </li>
                <li id="nota9">
                    <p class="not9">Biblioteca Municipal Manuel Alvar Horario: lunes-sabado de 8:30 a 21:00
                        Evento:Club de Lectura infantil</p>
                </li>
                <li id="nota10">
                    <p class="not10">Biblioteca Pública José Antonio Rey del Corral Horario: lunes-sabado de 8:30 a
                        21:00 Evento:Presentación del libro: "Un maestro más"</p>
                </li>
                <li id="nota11">
                    <p class="not11">Biblioteca Pública Miguel de Cervantes Horario: lunes-sabado de 10:30-13:30 y
                        16:30-20:30 Evento:Club de Lectura para Adultos</p>
                </li>
                <li id="nota12">
                    <p class="not12">Biblioteca CAI Universidad de Zaragoza Obra Social Horario: jueves y viernes de
                        8:15-14:30 Evento:Taller literario surrealista</p>
                </li>
                <li id="nota13">
                    <p class="not13">Biblioteca Pública Luis Del Val Horario: lunes-viernes de 10:30-13:30 y
                        16:30-20:00 Evento:Actualmente no hay ningun evento</p>
                </li>
                <li id="nota14">
                    <p class="not14">Biblioteca Pública Jesús M Alemany Briz Horario: lunes-viernes de 10:30-13:30 y
                        16:30-20:00 Evento:Club de Lectura(Clasicos de terror)</p>
                </li>
                <li id="nota15">
                    <p class="not15">Biblioteca Pública Municipal Fernando Lázaro Carreter Horario: lunes-sabado de
                        8:30 a 21:00 Evento:CLUB de LECTURA CLÁSICOS CONTEMPORÁNEOS</p>
                </li>
            </ul>
        </div>
    </div>

@endsection
