@extends ('layouts.app')

@section('content')
    @foreach ($dishes as $dish)
        <span>{{ $dish->name }}</span>
    @endforeach
@endsection
