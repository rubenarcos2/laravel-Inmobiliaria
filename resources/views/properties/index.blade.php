@extends('app')

@section('content')

    <div class="container">

        <div class="starter-template">
            <h3 style="text-align: center">Listado de propietarios</h3>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Teléfono</th>
            </thead>
            <tbody>
            @foreach ($properties as $property)
                <tr>
                    <td><a href="{{ route('properties-edit', ['id' => $property->id]) }}">{{ $property->name }}</a></td>
                    <td>{{ $property->phone }}</td>

                </tr>
            @endforeach
            </tbody>
        </table>

    </div><!-- /.container -->

@endsection
