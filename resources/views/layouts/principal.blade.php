<!DOCTYPE html>
<html lang="es" dir="ltr">
<style>
    .usuario{
         float:right;
        color: white;
    }
    .usuario a {
        color: white;
    }
</style>


<head>
    <title>Citas literarias</title>
    <meta name="autor" content="Mohamed Camara">
    <meta name="date" content="20 febrero de 2022">
    <meta name="description" content="Web que publica diferentes citas literarias">
    <meta charset="UTF-8" />
    @yield('CSS')


</head>

<body>
<header>
    <div id="logo">

        <a title="Inicio Citas literarias" href="{{ url('/') }}"><img class="img_logo" src="Imagenes/logo.png"
                                                                  alt="Logo"></a>

        <h2 class="TituloLogo">Citas literarias</h2>


    </div>
    @auth
    <div class="usuario">Bienvenido {{ Auth::user()->name }}
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <a href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">Cerrar Sesion</a>
    </form>
    @endauth
    </div>

        @if(!Auth::check())
            <div class="usuario">
            @if (Route::has('login'))
                 <a href="{{ route('login') }}">Iniciar sesion</a>
            @endif
            </div>
        @endif



    <div id="MenuNAV">
        <nav class="barra py-3">
            <ul class="MenuNAV">
                <li><a href="{{url('/')}}">Inicio</a></li>
                <li> <a href="{{url('/citas')}}">Citas</a></li>
                <li> <a href="{{url('/propuestas')}}">Propuestas</a></li>
                <li> <a href="{{url('/donde')}}">Donde encontrarnos</a></li>
                @auth
                    <li> <a href="{{url('/mis_citas')}}">mis citas</a></li>
                @endauth

            </ul>


        </nav>
    </div>
</header>
<main>

       @yield('contenido')

    <footer>


        <div class="footer">

            <div class="redes">

                <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" class="google"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="youtube"><i class="fab fa-youtube"></i></a>
                <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
            </div>




        </div>
    </footer>
</main>



</body>







</html>
