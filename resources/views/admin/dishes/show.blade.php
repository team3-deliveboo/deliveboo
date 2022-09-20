@extends ('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $dishes->name }}</h1>
        <h2>{{ $dishes->description }}</h2>
        <h2>{{ $dishes->slug }}</h2>
        <h3>{{$dishes->price}}</h3>
    </div>
@endsection
