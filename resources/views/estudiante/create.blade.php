@extends('estudiante/template')
@section('title', 'Crear Estudiante')
@section('content')

    <h1>Crear Estudiante</h1>
    <form action="{{ url('/estudiantes') }}" method="POST">
        @csrf
        <div>
            <label for="id">Cedula</label>
            <input type="text" name="id" id="id">
        </div>
        <div>
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="lastName">Apellido</label>
            <input type="text" name="lastName" id="lastName">
        </div>
        <div>
            <label for="address">Direccion</label>
            <input type="text" name="address" id="address">
        </div>
        <div>
            <label for="phoneNumber">Telefono</label>
            <input type="text" name="phoneNumber" id="phoneNumber">
        </div>
        <button type="submit">Guardar</button>
    </form>