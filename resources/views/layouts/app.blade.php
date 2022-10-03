<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Deliveboo - Area Admin</title>

    {{-- CDN fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- Scripts -->
    <script src="{{ asset('js/backend.js') }}" defer></script>

    {{-- Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@400;700&family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">

    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" />

    {{-- <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Styles -->
    <link href="{{ asset('css/backend.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">

        {{-- NAVBAR --}}
        <nav class="navbar navbar-expand-md navbar-light bg-white border-bottom">
            <div class="container">

                {{-- LOGO --}}
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/img/deliveboo.png" alt="Deliveboo Logo">
                </a>

                <ul class="navbar-nav ml-auto flex-row">

                    {{-- LOGIN BUTTON --}}
                    @guest
                        <li class="nav-item">
                            <a class="white-btn" href="{{ route('login') }}">
                                <i class="fa-solid fa-house"></i>
                                <span class="d-none d-sm-block">{{ __('Log In') }}</span>
                            </a>
                        </li>

                    {{-- REGISTER BUTTON --}}
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="white-btn" href="{{ route('register') }}">
                                <i class="fa-solid fa-right-to-bracket"></i>
                                <span class="d-none d-sm-block">{{ __('Iscriviti') }}</span>
                            </a>
                        </li>
                    @endif

                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}</>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="left: 0;">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    {{ __('Log Out') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                                </form>
                            </div>
                        </li>
                    @endguest

                </ul>
            </div>
        </nav>

        <main style="background-color: white;">

            @if (Auth::check())
                <div>
            @else
                <div class="container py-5 h-100">
            @endif
            
                    <div class="d-flex">

                        @if (Auth::check())
                        <div class="flex-shrink-0">
                            <div class="side-bar border-end">
                                <h3 class="fw-bold pt-2 pb-4 d-none d-md-block">Il tuo ristorante</h3>

                                <ul class="list-unstyled side-link">

                                    {{-- HOME --}}
                                    <li>
                                        <a class="text-decoration-none" href="{{ route('admin.users.index') }}">
                                            <i class="fa-solid fa-house"></i>
<<<<<<< HEAD
                                            <span class="align-middle ms-1 d-none d-md-block">Dashboard</span>
=======
                                            <span class="align-middle ms-1 d-none d-md-inline">Dashboard</span>
>>>>>>> 39a4a274c724e0b5e1e779d5f35d1b7c6f02332b
>>>>>>> eca214ae0a4d1c21444c53a86efe33e736c9bfd6
                                        </a>
                                    </li>


                                    {{-- DISHES LIST --}}
                                    <li class='align-baseline'>
                                        <a class="text-decoration-none" href="{{ route('admin.dishes.index') }}">
                                            <i class="fa-solid fa-utensils"></i>
<<<<<<< HEAD
<<<<<<< HEAD
                                            <span class="align-middle ms-1 d-none d-md-inline">Menu</span>
=======
                                            <span class="align-middle ms-1 d-none d-md-block">Menu</span>
>>>>>>> 88e3041 (restaurant index responsive)
=======
                                            <span class="align-middle ms-1 d-none d-md-block">Menu</span>
=======
                                            <span class="align-middle ms-1 d-none d-md-inline">Menu</span>
>>>>>>> 39a4a274c724e0b5e1e779d5f35d1b7c6f02332b
>>>>>>> eca214ae0a4d1c21444c53a86efe33e736c9bfd6
                                        </a>
                                    </li>


                                    {{-- ORDERS --}}
                                    <li class="align-baseline">
                                        <a class="text-decoration-none" class="align-baseline" href="{{ route('admin.orders.index') }}">
                                            <i class="fa-solid fa-clipboard"></i>
<<<<<<< HEAD
                                            <span class="align-middle ms-1 d-none d-md-inline">Ordini</span>
=======
                                            <span class="align-middle ms-1 d-none d-md-block">Ordini</span>
>>>>>>> 88e3041 (restaurant index responsive)
                                        </a>
                                    </li>


                                    {{-- STATS --}}
                                    <li class="align-baseline">
                                        <a class="text-decoration-none" href="">
                                            <i class="fa-solid fa-chart-simple"></i>
<<<<<<< HEAD
                                            <span class="align-middle ms-1 d-none d-md-inline">Statistiche</span>
=======
                                            <span class="align-middle ms-1 d-none d-md-block">Statistiche</span>
>>>>>>> 88e3041 (restaurant index responsive)
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        @endif

                        {{-- CONTENT LEFT ONCE LOGGED IN --}}
                        <div class="flex-grow-1 ps-1 ps-md-4">
                            @yield('content')
                        </div>

                
                    </div>
                </div>
            </main>

        {{-- VUE COMPONENT - FOOTER --}}
        <the-footer></the-footer>

    </div>
</body>
</html>
