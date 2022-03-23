@section('CSS')
    <script src="tailwind/tailwind.config.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/estilos_principal.css') }}">
    <link href="bootstrap-5.0.2-dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="iconos/css/all.css">
@endsection

@extends('layouts.principal')
@section('contenido')
    <div class="contenido">
    <p>
        Una cita literaria es un epígrafe o resumen con carácter intertextual en tanto que muestra la adecuación
        mental entre lo que evoca el autor de la cita y lo que se presenta a continuación
    </p>
    <p>Goethe aseguraba que "una colección de aforismos y máximas es el mayor tesoro para el hombre de mundo,
        que acierta a intercalar los primeros en su lugar debido y a recordar las segundas en el caso oportuno".
    </p>

    <p>En Citas literarias suscribimos esta idea. Nos gusta ir recopilando, siempre según nuestro criterio y
        teniendo en cuenta las propuestas, las frases, reflexiones y pensamientos sobre el tema que más nos
        interesa (la literatura), que extraemos de nuestras lecturas personales. A continuación compartimos
        nuestra propia selección de citas literarias y las de otros usuarios, esperamos que os resulte de
        interés.</p>
    <p>Todas las aportaciones son binvenidas, para aportar una cita solo debes acceder a la pestaña de inicio de
        sesion desde la barra de navegacion, ahi vienen indicadas las instrucciones para que cada uno pueda
        aportar su grano de arena, las citas no necesariamente tienen que ser de autores famosos, tambien esta
        la posibilidad de aportar citas de cosecha propia.</p>
    </div>
@endsection
