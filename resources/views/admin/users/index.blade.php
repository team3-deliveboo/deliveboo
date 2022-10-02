@extends('layouts.app')

@section('content')

    @if (Auth::check())
    <div class="row row-cols-lg-2 row m-0 align-items-center h-100 gy-3">

        {{-- IMG --}}
        <div class="col col-lg-5 col-xl-3 text-center">
            <div class="left-side">
                <img src="{{ Auth::user()->img ? asset('storage/' . Auth::user()->img) : asset('storage/' . 'placeholder.webp') }}">
            </div>
        </div>

        <div class="col col-lg-7 col-xl-9">
            <div class="right-side text-center text-md-start">

                {{-- NAME --}}
                <div class="d-flex align-items-center gap-5 justify-content-center justify-content-md-start">
                    <h2>{{ Auth::user()->name }}</></h2>

                {{-- EDIT RESTAURANT INFO --}}
                    <a href="{{ route('admin.users.edit', Auth::user()->id) }}">
                        <i class="fa-solid fa-gear align-middle"></i>
                    </a>
                </div>
                
                {{-- CATEGORIES --}}
                <div class="categories">
                    {{ ucwords(Auth::user()->categories->implode('name', ' - ')) }}
                </div>

                {{-- PHONE --}}
                <div class="pt-4">
                    <i class="fa-solid fa-phone me-2 opacity-25"></i>
                    <span><b class="d-none d-lg-inline">Numero di telefono:</b> {{ Auth::user()->phone }}</span>
                </div>

                {{-- ADDRESS --}}
                <div>
                    <i class="fa-solid fa-location-dot me-2 opacity-25"></i>
                    <span><b class="d-none d-lg-inline">Indirizzo:</b> {{ Auth::user()->address }}</span>
                </div>

                {{-- VAT --}}
                <div>
                    <i class="fa-solid fa-file-contract me-2 opacity-25"></i>
                    <span><b class="d-none d-lg-inline">Partita Iva:</b> {{ Auth::user()->vat }}</span>
                </div>

                {{-- MAIL --}}
                <div>
                    <i class="fa-solid fa-at me-2 opacity-25"></i>
                    <span><b class="d-none d-lg-inline">Indirizzo email:</b> {{ Auth::user()->email }}</span>
                </div>
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