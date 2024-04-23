@extends('estudiante.template')

@section('title', 'Editar Estudiante')

@section('content')

<h1>Editar Estudiante</h1>
<form action="{{ url('estudiantes/'.$estudiante['id'])}}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="id">Cédula</label>
        <input type="text" name="id" id="id" value="{{ $estudiante['id'] }}" required>
    </div>

    <div>
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" value="{{ $estudiante['name'] }}" required>
    </div>

    <div>
        <label for="lastName">Apellido</label>
        <input type="text" name="lastName" id="lastName" value="{{ $estudiante['lastName'] }}" required>
    </div>

    <div>
        <label for="address">Dirección</label>
        <input type="text" name="address" id="address" value="{{ $estudiante['address'] }}" required>
    </div>

    <div>
        <label for="phoneNumber">Teléfono</label>
        <input type="text" name="phoneNumber" id="phoneNumber" value="{{ $estudiante['phoneNumber'] }}" required>
    </div>

    <button type="submit">Actualizar</button>
</form>

@endsection
