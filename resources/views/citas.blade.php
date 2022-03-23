@section('CSS')
    <script src="tailwind/tailwind.config.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/estilos_principal.css') }}">
    <link href="bootstrap-5.0.2-dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="iconos/css/all.css">
@endsection
@extends('layouts.principal')
@section('contenido')
    <div class="contenido_citas overflow-hidden">
        @if(count($citas_all)==0 && Auth::check())
            <div>
                <p>¡¡¡No hay citas actualmente!!!</p>
                <p>¡¡¡<a href="{{url('/propuestas')}}"><u>Pulsa aqui</u></a> si quieres mandar una propuesta!!!</p>

            </div>
        @endif
            @if(!Auth::check())
                <div>
                    <p>¡¡¡<a href="{{url('/login')}}"><u>Inicia sesion</u></a> si quieres mandar una propuesta!!!</p>
                </div>
            @endif
        <div class="min-h-screen  pt-20 height:auto ">
            @foreach($citas_all as $cita)
                <div
                    class=" bg-white inline-block h-1/5 m-10 mt-10 shadow-lg rounded-lg hover:shadow-xl transition duration-200 max-w-sm">
                    <img class="rounded-t-lg" src="Imagenes/barco_fondo.jpg" alt="" />
                    <div class="py-4 px-8">
                        <p class=" h-72 hover:cursor-pointer py-3 text-gray-600 leading-7">{{$cita->cita}}</p>
                        <h1 class="hover:cursor-pointer mt-2 text-gray-900 font-bold text-2xl tracking-tight">{{$cita->autor}}</h1>


                    </div>

                </div>
            @endforeach



                </div>


            </div>











@endsection
