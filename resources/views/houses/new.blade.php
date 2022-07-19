@extends('app')
@section('content')
    <div class="container mt-5">
        <form action="{{ route('houses-new') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="shortDescription">Descripción</label>
                <input type="text" class="form-control" id="shortDescription" name="shortDescription" aria-describedby="shortDescription"
                       placeholder="Introduzca una descripción corta (Título)" value="">
            </div>
            <div class="form-group mb-3">
                <label for="phone">Teléfono</label>
                <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phone"
                       placeholder="Introduzca un teléfono" value="">
            </div>
            <div class="form-group mb-3">
                <label for="property">Propietario</label>
                <select name="category_id" id="type" class="form-control">
                    @foreach ($properties as $property)
                        <option value="{{$property->id}}">
                            {{$property->name}}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Crear vivienda</button>
        </form>
    </div>
@endsection
