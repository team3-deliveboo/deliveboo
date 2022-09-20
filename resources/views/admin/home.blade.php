@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ Auth::user()->name }}</h1>

        <ul>
            <li><i class="bi bi-people"></i><a href="{{ route('admin.users.edit', Auth::user()->id) }}">Edit</a>
            </li>
        </ul>


    </div>
@endsection
