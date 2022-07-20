@extends('app')
@section('content')
    <div class="container mt-5">
        <form action="{{ route('houses-update', ['id' => $house->id]) }}" method="post">
            @csrf
            <div class="form-group mb-3">
                <label for="shortDescription">Título</label>
                <input type="text" class="form-control" id="shortDescription" name="shortDescription" aria-describedby="shortDescription"
                       placeholder="Introduzca una descripción corta (Título)" value="{{$house->shortDescription}}" maxlength="255">
            </div>
            <div class="form-group mb-3">
                <label for="longDescription">Descripción</label>
                <input type="text" class="form-control" id="longDescription" name="longDescription" aria-describedby="longDescription"
                       placeholder="Introduzca una descripción" value="{{$house->longDescription}}" maxlength="255">
            </div>
            <div class="form-group mb-3">
                <label for="phone">Teléfono</label>
                <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phone"
                       placeholder="Introduzca un teléfono" value="{{$house->phone}}">
            </div>
            <div class="form-group mb-3">
                <label for="photo">Url</label>
                <input type="text" class="form-control" id="photo" name="photo" aria-describedby="photo"
                       placeholder="Introduzca una url de imagen" value="{{$house->photo}}">
            </div>
            <div class="form-group mb-3">
                <label for="property">Propietario</label>
                <select name="property_id" id="type" class="form-control">
                    @foreach ($properties as $property)
                        <option value="{{$property->id}}">
                            {{$property->name}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div style="text-align: center">
                <button type="submit" class="btn btn-primary">Modificar vivienda</button>
                <form action="{{ route('houses-destroy', [$house->id]) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </form>

    </div>
@endsection
