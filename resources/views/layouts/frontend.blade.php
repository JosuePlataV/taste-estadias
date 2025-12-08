<!DOCTYPE html>
<html lang="es">
    <head>
        <link rel="shortcut icon" href="faviconn.png" type="image/x-icon">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <link href='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.css' rel='stylesheet' />
        <title>@yield('title')</title>
        
    </head>
    <body>
        <main>
            @include('components.header')
            @yield('content')
            @include('components.footer')
        </main>
        @vite('resources/js/app.js')
    </body>
</html>