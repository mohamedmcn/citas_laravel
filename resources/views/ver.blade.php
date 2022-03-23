@extends('layouts.principal')
@section('contenido')
    <div class="contenido">
@foreach($citas as $cita)
    <p>{{$cita->cita}}</p>
        @endforeach
    </div>
@endsection
