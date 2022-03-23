<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilos_registro.css">
    <title>Citas literarias</title>

<body class="bg-image" style="
    background-image: url('{{ asset('Imagenes/FondoHeader.jpg') }}');



    ">

<div class="libro"></div>
@auth
<div>
    <form method="POST" action="{{ route('propuesta') }}">
        @csrf
        <fieldset>
            <legend>Cita</legend>
            <p>Todos los campos son obligatorios</p>
            <div>
                <label for="autor">Autor</label>
                <input id="autor"  type="text" name="autor" required/>
            </div>
            <div>
                <label for="cita">Cita</label>
                <input id="cita"  type="text" name="cita" value="" required />
            </div>
            <input id="usuario_id" name="usuario_id" type="hidden" value="{{auth()->id()}}">
        </fieldset>

        <div class="boton">
            <button class="enviar" type="submit">Enviar</button>ss
            <a href="{{url('/')}}" class="retroceso">Volver...</a>
        </div>


        </fieldset>


    </form>

</div>
@endauth
@if(!Auth::check())
    <div style="color:white;">
       <h2>¡¡¡<a href="{{url('/login')}}"><u style="color:white;">Inicia sesion</u></a> si quieres mandar una propuesta!!!</h2>
    </div>
@endif

</body>

</html>
