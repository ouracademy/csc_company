<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>@yield('title') - CSC Company</title>

    @include('partials.head')
    @yield('head')
</head>
<body>
   @include('partials.header')
    <main>
        @yield('content')
    </main>
    @include('partials.footer')
    @include('partials.scripts')
    @yield('scripts')
</body>
</html>