@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $user->name }}</h1>
        <h2>{{ ucwords($user->categories->implode('name', ' - ')) }}</h2>
        {{-- <img src="{{ asset('storage/' . $user->img) }}">  --}}
        <img class="img-fluid mt-4" src="{{ $user->img ? asset('storage/' . $user->img) : asset('storage/' . 'placeholder.webp') }}">

        {{-- <img class="img-fluid" src="{{ Storage::url($post->cover_img) }}"> --}}

    </div>
@endsection
