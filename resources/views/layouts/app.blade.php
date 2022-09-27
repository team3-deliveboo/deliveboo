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

                <ul class="navbar-nav ml-auto">

                    {{-- LOGIN BUTTON --}}
                    @guest
                        <li class="nav-item">
                            <a class="white-btn" href="{{ route('login') }}">
                                <i class="fa-solid fa-house"></i>
                                {{ __('Log In') }}
                            </a>
                        </li>

                    {{-- REGISTER BUTTON --}}
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="white-btn" href="{{ route('register') }}">
                                <i class="fa-solid fa-right-to-bracket"></i>
                                {{ __('Iscriviti') }}
                            </a>
                        </li>
                    @endif

                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <b>{{ Auth::user()->name }}</b>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    <b>{{ __('Logout') }}</b>
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

        {{-- MAIN SECTION --}}
        <main>
            <div class="container">
                <div class="row">

                    @if (Auth::check())
                    <div class="col-3">
                        <div>
                            <h2><b>Sezione Admin</b></h2>
                            <ul class="list-unstyled">

                                {{-- HOME --}}
                                <li>
                                    <a class="text-decoration-none" href="{{ route('admin.users.index') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill align-middle" viewBox="0 0 16 16"> <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z" /></svg>
                                        <b class='align-text-top'>Home</b>
                                    </a>
                                </li>


                                {{-- DISHES LIST --}}
                                <li class='align-baseline'>
                                    <a class="text-decoration-none" href="{{ route('admin.dishes.index') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-egg-fried align-middle" viewBox="0 0 16 16"> <path d="M8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" /> <path  d="M13.997 5.17a5 5 0 0 0-8.101-4.09A5 5 0 0 0 1.28 9.342a5 5 0 0 0 8.336 5.109 3.5 3.5 0 0 0 5.201-4.065 3.001 3.001 0 0 0-.822-5.216zm-1-.034a1 1 0 0 0 .668.977 2.001 2.001 0 0 1 .547 3.478 1 1 0 0 0-.341 1.113 2.5 2.5 0 0 1-3.715 2.905 1 1 0 0 0-1.262.152 4 4 0 0 1-6.67-4.087 1 1 0 0 0-.2-1 4 4 0 0 1 3.693-6.61 1 1 0 0 0 .8-.2 4 4 0 0 1 6.48 3.273z" /></svg>
                                        <b class='align-text-top'>Lista Piatti</b>
                                    </a>
                                </li>


                                {{-- ORDERS --}}
                                <li class="align-baseline">
                                    <a class="text-decoration-none" class="align-baseline" href="{{ route('admin.orders.index') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journals align-middle" viewBox="0 0 16 16"> <path d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2 2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v9a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2z" /> <path d="M1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 2.5v.5H.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1H2v-.5a.5.5 0 0 0-1 0z" /></svg>
                                        <b class='align-text-top'>Ordini</b>
                                    </a>
                                </li>


                                {{-- STATS --}}
                                <li class="align-baseline">
                                    <a class="text-decoration-none" href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bar-chart-line-fill align-middle" viewBox="0 0 16 16"> <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2z" /></svg>
                                        <b class='align-text-top'>Statistiche</b>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    @endif

                    {{-- CONTENT LEFT ONCE LOGGED IN --}}
                    <div class="col">
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
