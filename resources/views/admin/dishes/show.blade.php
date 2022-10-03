@extends ('layouts.app')

@section('content')
    <div class="container h-100 d-flex align-items-center">

        {{-- DISH CARD --}}
        <div class="row justify-content-start m-0 w-100">
            <div class="col col-md-5">
                <div class="dish-card position-relative">
                    <div class="text-start pe-1">
                        <div>
                            <b>{{ ucfirst($dish->name) }}</b>
                        </div>
                        <div class="description d-none d-sm-block">{{ ucfirst($dish->description) }}</div>
                        <div>{{ $dish->price }} €</div>
                    </div>
                    <div class="dish-img">
                        <img src="{{ asset('storage/' . $dish->img) }}" alt="{{ 'Immagine del piatto' . $dish->name }}" />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
