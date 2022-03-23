<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citas literarias</title>

    <link href="bootstrap-5.0.2-dist/css/bootstrap.css" rel="stylesheet">

    <script src="jquery/jquery-3.6.0.min.js"></script>

    <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#myModal').modal('toggle')
        });
    </script>
</head>

<body class="bg-image" style="
    background-image: url('{{ asset('Imagenes/FondoLogin.jpg') }}');
        height: 100vh;
  ">

<div id="myModal" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title">Inicia sesion</h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal" data-dismiss="modal" aria-hidden="true"
                        aria-label="Close"></button>

            </div>
            <div class="modal-body">
                <p>Debes iniciar sesion para continuar</p>
            </div>
            <div class="modal-footer">
                <p>Gracias por tu interes</p>
            </div>
        </div>
    </div>
</div>


<div id="contenedor" class="container-sm mt-3">

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="  ">
            <div class="card-header mb-3  ">
                <div class="row">
                    <p class=" col-sm-9">Inicia Sesion</p>


                </div>
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
            </div>
            <div class="card-body">
                <div class="input-group mb-4 ">
                    <span class="input-group-text"><img src="bootstrap-icons-1.8.1/person-fill.svg" alt="persona"></span>
                    <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <div class="input-group mb-4">
                    <span class="input-group-text"><img src="bootstrap-icons-1.8.1/lock-fill.svg" alt="candado" /></span>
                    <input id="password" class="form-control"
                           type="password"
                           name="password"
                           required autocomplete="current-password" />
                </div>

                <div class="form-check mb-2">
                    <label class="form-check-label">
                        <input id="remember_me" class="form-check-input" type="checkbox" name="remember"> Recordarme
                    </label>
                </div>
                <button type="submit" class="btn btn-success">Iniciar sesión</button>

                <hr>

                    @if (Route::has('register'))
                    <p class="small text-light font-weight-bold"> No tienes cuenta? Registrate <a href="{{ route('register') }}">aqui</a>
                    @endif
                </p>
            </div>


        </div>

    </form>

</div>
</body>

</html>
