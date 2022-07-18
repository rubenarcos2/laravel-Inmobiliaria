@extends('app')

@section('content')
    <div class="container mt-5">
        <div class="card border-dark mb-3">
            <div class="card-header">{{ $house->id }} - {{ $house->shortDescription }}</div>
            <img class="card-img-top" src="{{ $house->photo }}">
            <div class="card-body">
                <h5 class="card-title">{{ $house->longDescription }}</h5>
                <p class="card-text">{{ $house->phone }}</p>
                <p class="card-text"><small class="text-muted">Última actualización </small></p>
            </div>
            @if (Auth::check())
            <div class="text-center mb-3">
                <a class="btn btn-primary btn-space" role="button" href="{{ route('houses-edit', ['id' => $house->id]) }}">Editar</a>
            </div>
            @endif
        </div>

    </div>
@endsection
