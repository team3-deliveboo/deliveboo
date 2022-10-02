<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Deliveboo - Consegna a domicilio</title>

    {{-- CDN fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    {{-- Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@400;700&family=Source+Sans+Pro:wght@400;700&display=swap"
        rel="stylesheet">

    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" />

    {{-- Styles --}}
    <link rel="stylesheet" href="{{ asset('css/frontend.css') }}">
    <script src="https://js.braintreegateway.com/web/dropin/1.33.4/js/dropin.min.js"></script>
</head>

<body>

    <div id="app"></div>
    <script src="{{ asset('js/frontend.js') }}" defer></script>
    
</body>
