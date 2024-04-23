@extends('estudiante/template')
@section('title', 'MostrarTodos')
@section('content')
    
<table class="table">
    <thead>
        <tr>
            <th>Cedula</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Direccion</th>
            <th>Telefono</th>
        </tr>
    </thead>
    <tbody>
        @foreach($estudiantesArray AS $estudiante)
        <tr>
        <td>{{ $estudiante['id']}}</td>
        <td>{{ $estudiante['name'] }}</td>
        <td>{{ $estudiante['lastName'] }}</td>
        <td>{{ $estudiante['address'] }}</td>
        <td>{{ $estudiante['phoneNumber'] }}</td>
        <td>
            <a href="{{ url('estudiantes/'.$estudiante['id'].'/edit')}}" class = "btn btn-primary">Editar</a>
        </td>
            <td>
                <form action="{{ url('estudiantes/'.$estudiante['id'])}}" method="POST">
                @method("DELETE")
                @csrf
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ url('estudiantes/create')}}" class = "btn btn-success">Crear estudiante</a>
@endsection
