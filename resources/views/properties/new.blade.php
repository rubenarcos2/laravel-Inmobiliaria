@extends('app')
@section('content')
    @if ($errors->any())
        <div class="alert alert-warning">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container mt-5">
        <form action="{{ route('properties-new') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" id="name" name="name"
                       aria-describedby="name"
                       placeholder="Introduzca el nombre" value="" maxlength="255">
            </div>
            <div class="form-group mb-3">
                <label for="shortDescription">Descripción</label>
                <input type="text" class="form-control" id="shortDescription" name="shortDescription"
                       aria-describedby="shortDescription"
                       placeholder="Introduzca una descripción" value=""
                       maxlength="255">
            </div>
            <div class="form-group mb-3">
                <label for="phone">Teléfono</label>
                <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phone"
                       placeholder="Introduzca un teléfono" value="">
            </div>
            <div style="text-align: center">
                <button type="submit" class="btn btn-primary">Crear propietario</button>
            </div>
        </form>
    </div>
@endsection
