@extends ('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $dishes->name }}</h1>
        <h2>{{ $dishes->description }}</h2>
        <h2>{{ $dishes->course }}</h2>
        <h3>{{ $dishes->price }} €</h3>
        <h3>{{ $dishes->visibility == 1 ? 'Disponibile' : 'Non disponibile' }}</h3>

    </div>
@endsection
