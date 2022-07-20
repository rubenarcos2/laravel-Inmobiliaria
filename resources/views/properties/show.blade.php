@extends('app')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Teléfono</th>
            <th>Operaciones</th>
        </thead>
        <tbody>
        <tr>
            <td>{{ $property->id }}</td>
            <td>{{ $property->name }}</td>
            <td>{{ $property->shortDescription }}</td>
            <td>{{ $property->phone }}</td>
            <td>
                <a href="{{ route('properties-edit', ['id' => $property->id]) }}">Editar</a>
                <form action="{{ route('properties-destroy', [$property->id]) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                </form>
            </td>
        </tr>
@endsection
