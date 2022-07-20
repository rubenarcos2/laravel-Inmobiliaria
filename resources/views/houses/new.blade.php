@extends('app')
@section('content')
    <div class="container mt-5">
        <form action="{{ route('houses-new') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="shortDescription">Título</label>
                <input type="text" class="form-control" id="shortDescription" name="shortDescription" aria-describedby="shortDescription"
                       placeholder="Introduzca una descripción corta (Título)" value="">
            </div>
            <div class="form-group mb-3">
                <label for="longDescription">Descripción</label>
                <input type="text" class="form-control" id="longDescription" name="longDescription" aria-describedby="longDescription"
                       placeholder="Introduzca una descripción" value="">
            </div>
            <div class="form-group mb-3">
                <label for="phone">Teléfono</label>
                <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phone"
                       placeholder="Introduzca un teléfono" value="">
            </div>
            <div class="form-group mb-3">
                <label for="photo">Url</label>
                <input type="text" class="form-control" id="photo" name="photo" aria-describedby="photo"
                       placeholder="Introduzca una url de imagen" value="https://www.neo-furniture.com/media/catalog/product/cache/07d5598074d0f8f1fc59b4dd2f318d55//a/c/academy_cb_1695-3d.jpg">
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
            <button type="submit" class="btn btn-primary">Crear vivienda</button>
        </form>
    </div>
@endsection
