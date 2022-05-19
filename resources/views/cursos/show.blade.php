@extends('layouts.plantilla')
@section('title', 'Curso ' . $curso->nombre)

@section('content')
    <h1>Bienvenido al curso {{ $curso->nombre }}</h1>
    <a href="{{ route('cursos.index') }}">Volver a cursos</a>
    <p><strong>Categoría: </strong>{{ $curso->categoria }}</p>
    <br>
    <p>{{ $curso->descripcion }}</p>
@endsection