@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">

                        <!-- @if (Auth::check())
    <h1>{{ Auth::user()->name }}</h1>
                                        <div>{{ Auth::user()->id }}</div>
                                        <div>{{ Auth::user()->phone }}</div>
                                        <div>{{ Auth::user()->address }}</div>
                                        <div>{{ Auth::user()->vat }}</div>
                                        <div>{{ Auth::user()->email }}</div>
    @endif -->


                        @foreach ($users as $user)
                            <span>{{ $user->name }}</span>

                            <a class="btn btn-warning btn-sm" href="{{ route('admin.edit', $user->id) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-activity">
                                    <polygon points="14 2 18 6 7 17 3 17 3 13 14 2"></polygon>
                                    <line x1="3" y1="22" x2="21" y2="22"></line>
                                </svg>
                            </a>
                        @endforeach


                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h6>{{ __('You are logged in!') }}</h6>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
