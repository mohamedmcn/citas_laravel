@section('CSS')
    <script src="tailwind/tailwind.config.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/estilos_principal.css') }}">
    <link href="bootstrap-5.0.2-dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="iconos/css/all.css">
@endsection
@extends('layouts.principal')
@section('contenido')
    <div class="contenido">

        @if(count($citas_all)==0)
            <div>
                <p>¡¡¡No hay citas actualmente!!!</p>
                <p>¡¡¡<a href="{{url('/propuestas')}}"><u>Pulsa aqui</u></a> si quieres mandar una propuesta!!!</p>

            </div>
        @endif
        @foreach($citas_all as $cita)


            @if(($cita->usuario_id)==(auth()->id()))

                <form method="POST" id="{{$cita->id}}_actualizar" action="{{ route('actualizar') }}">
                    @csrf

            <div

                class=" bg-white inline-block h-1/5 m-10 mt-10  shadow-lg rounded-lg hover:shadow-xl transition duration-200 max-w-sm">



                <img class="rounded-t-lg" src="Imagenes/barco_fondo.jpg" alt="" />
                <div class="py-4 px-8 overflow-hidden">
                    <p class=" h-72 hover:cursor-pointer py-3 text-gray-600 leading-7"><textarea name="cita"  rows="8" cols="15">{{$cita->cita}}</textarea></p>
                    <h1 class="hover:cursor-pointer mt-2 text-gray-900 font-bold text-2xl tracking-tight"><textarea name="autor" style="text-align: center" rows="1" cols="15">{{$cita->autor}}</textarea></h1>
                    <input id="id" name="id" type="hidden" value="{{$cita->id}}">

                </div>

            </div>

                </form>
                <form id="{{$cita->id}}_eliminar" method="POST" action="{{ route('eliminar')}}">
                    @csrf
                    @method('DELETE')
                    <input id="id" name="id" type="hidden" value="{{$cita->id}}">
                </form>
            <div class="botones mb-8 ">
                <button  type="submit" form="{{$cita->id}}_actualizar" ><i class="fa-solid fa-arrows-rotate"></i></button>
                <button  type="submit" form="{{$cita->id}}_eliminar" ><i class=" fa-solid fa-xmark"></i></button>
            </div>

            @endif
        @endforeach
    </div>
@endsection
