@extends('app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            @foreach ($houses as $house)
                <div class="col-sm-3 mb-5">
                    <div class="card bg-light" style="width: 18rem;">
                        <img class="card-img-top"
                             src="https://www.neo-furniture.com/media/catalog/product/cache/07d5598074d0f8f1fc59b4dd2f318d55//a/c/academy_cb_1695-3d.jpg"
                             alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $house->shortDescription }}</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="{{ route('houses-show', ['id' => $house->id]) }}" class="btn btn-primary">Ver
                                vivienda</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
