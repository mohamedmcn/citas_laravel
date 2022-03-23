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
<div>

    <form method="POST" action="{{ route('register') }}">

        @csrf
        <fieldset>
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <legend>1 Datos personales</legend>
            <p>Todos los campos son obligatorios</p>
            <div>
                <label for="name">Nombre*</label>
                <input id="name"  type="text" name="name" :value="old('name')" required autofocus />
            </div>
            <div>

                <label for="email">Correo Electronico*</label>
                <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>
            <div>

                <label for="password">Contraseña*</label>
                <input id="password" class="block mt-1 w-full"
                       type="password"
                       name="password"
                       required autocomplete="new-password" />
            </div>
            <div>

                <label for="password_confirmation">Confirmar contraseña*</label>
                <input id="password_confirmation" class="block mt-1 w-full"
                       type="password"
                       name="password_confirmation" required />
            </div>

        </fieldset>

        <div class="boton">
            <button class="enviar" type="submit">Registrarse</button>
            <a href="{{url('/')}}" class="retroceso">Volver...</a>
        </div>


        </fieldset>


    </form>

</div>


</body>

</html>
