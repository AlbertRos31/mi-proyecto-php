<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Descubre viajes y experiencias con Horizonte Viajes.">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>@yield('title') | Horizonte Viajes</title>
</head>
<body>
    <header>
        @include('_partials.nav')
    </header>

    <main class="container">
        @yield('header')
        @yield('content')
    </main>

    @include('_partials.footer')
</body>
</html>