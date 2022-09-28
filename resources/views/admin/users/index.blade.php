@extends('layouts.app')

@section('content')

    @if (Auth::check())
    <div class="d-flex align-items-center border-start h-100 bg-white ms-4">

        <div class="left-side">
            <img src="{{ Auth::user()->img ? asset('storage/' . Auth::user()->img) : asset('storage/' . 'placeholder.webp') }}">
        </div>


        <div class="right-side">
            <h2>{{ Auth::user()->name }}</h2>
            <small>
                {{ ucwords(Auth::user()->categories->implode('name', ' - ')) }}
            </small>
                    
            <div><b>Telefono:</b> {{ Auth::user()->phone }}</div>
            <div><b>Indirizzo:</b> {{ Auth::user()->address }}</div>
            <div><b>P. Iva:</b> {{ Auth::user()->vat }}</div>
            <div><b>Email:</b> {{ Auth::user()->email }}</div>
                <!-- <a href="route('admin.users.show',Auth::user()->id) ">show</a> -->
        </div>


        {{-- EDIT RESTAURANT INFO --}}
        <div>
            <a href="{{ route('admin.users.edit', Auth::user()->id) }}">
                <i class="fa-solid fa-gear"></i>
            </a>

            {{-- RESTAURANT SHOW PAGE --}}
            {{-- <a class="btn btn-primary btn-sm" href="{{ route('admin.users.show', Auth::user()->slug) }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                </a> --}}
            @endif

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        </div>

    </div>
@endsection