@extends('layouts.plantilla')
@section('title', 'Añadir Curso')

@section('content')
    <h1>En esta página crearemos cursos</h1>
    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre: </label>
        <br>
        <input type="text" name="nombre" id="nombre">
        <br>
        <label for="descripcion">Descripcion: </label>
        <br>
        <textarea name="descripcion" id="descripcion" rows="5"></textarea>
        <br>
        <label for="categoria">Categoría: </label>
        <br>
        <input type="text" name="categoria" id="categoria">
        <br>

        <button type="submit">Enviar</button>

    </form>
@endsection
