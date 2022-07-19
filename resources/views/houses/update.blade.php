@extends('app')
@section('content')
    <div class="container mt-5">
        <form action="{{ route('houses-update', ['id' => $house->id]) }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="id">ID</label>
                <input class="form-control" type="text" placeholder="{{ $house->id }}" readonly>
            </div>
            <div class="form-group mb-3">
                <label for="shortDescription">Descripción</label>
                <input type="text" class="form-control" id="shortDescription" aria-describedby="shortDescription"
                       placeholder="Introduzca una descripción corta (Título)" value="{{$house->shortDescription}}">
            </div>
            <div class="form-group mb-3">
                <label for="phone">Teléfono</label>
                <input type="text" class="form-control" id="phone" aria-describedby="phone"
                       placeholder="Introduzca un teléfono" value="{{$house->phone}}">
            </div>
            <button type="submit" class="btn btn-primary">Modificar</button>
        </form>
        <form action="{{ route('houses-destroy', [$house->id]) }}" method="POST">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger">Eliminar</button>
        </form>
    </div>
@endsection
