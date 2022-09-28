@extends('layouts.app')

@section('content')

    @if (Auth::check())
    <div class="d-flex align-items-center border-start h-100 bg-white ms-4">

        <div class="left-side">
            <img src="{{ Auth::user()->img ? asset('storage/' . Auth::user()->img) : asset('storage/' . 'placeholder.webp') }}">
        </div>


        <div class="right-side">

            <div class="d-flex align-items-center gap-5">
                <h2>{{ Auth::user()->name }}</h2>

                {{-- EDIT RESTAURANT INFO --}}
                <a href="{{ route('admin.users.edit', Auth::user()->id) }}">
                    <i class="fa-solid fa-gear align-middle"></i>
                </a>
            </div>
            
            <div class="categories">
                {{ ucwords(Auth::user()->categories->implode('name', ' - ')) }}
            </div>

            <div class="pt-4">
                <b>Numero di telefono:</b> {{ Auth::user()->phone }}
            </div>

            <div>
                <b>Indirizzo:</b> {{ Auth::user()->address }}
            </div>

            <div>
                <b>Partita Iva:</b> {{ Auth::user()->vat }}
            </div>

            <div>
                <b>Indirizzo email:</b> {{ Auth::user()->email }}
            </div>
        </div>

    @endif

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    </div>
@endsection