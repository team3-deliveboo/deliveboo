@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $user->name }}</h1>
        <h1>{{ $user->categories->implode('name', ' - ') }}</h1>
        {{-- <img src="{{ asset('storage/' . $user->img) }}">  --}}
        <img class="img-fluid" src="{{ asset('storage/' . $user->img) }}">
        {{-- <img class="img-fluid" src="{{ Storage::url($post->cover_img) }}"> --}}


    </div>
@endsection
