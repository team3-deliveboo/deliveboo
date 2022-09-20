@extends('app')

@section('content')
    <div class="container h-100">
        <div class="row h-100 ">
            <div class="col-2">
                <h2>Sezione Admin</h2>
                <ul class="list-unstyled">
                    @if (Auth::check())
                        <li><i class="bi bi-people"></i><a href="{{ route('admin.users.index', Auth::user()->id) }}">Home</a></li>
                        <li><i class="bi bi-people"></i><a href="{{ route('admin.users.edit', Auth::user()->id) }}">Edit</a></li>
                        <li><i class="bi bi-people"></i><a href="">Lista Piatti</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
@endsection