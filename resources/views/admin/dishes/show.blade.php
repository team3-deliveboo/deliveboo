@extends ('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $dish->name }}</h1>
        <h2>{{ $dish->description }}</h2>
        <h2>{{ $dish->course }}</h2>
        <h3>{{ $dish->price }} €</h3>
        <h3>{{ $dish->visibility == 1 ? 'Disponibile' : 'Non disponibile' }}</h3>
        <img class="img-fluid" src="{{ $dish->img ? asset('storage/' . $dish->img) : asset('storage/' . 'placeholder.webp')  }}">

    </div>
@endsection
