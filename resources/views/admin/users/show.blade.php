@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $user->name }}</h1>

        <h1>{{ $user->categories->implode('name', ' - ') }}</h1>
   


    </div>
@endsection
