<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My App')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @include('components.navbar')
    <main class="">
        {{-- Page content will be injected here --}}
        @yield('content')
    </main>
    {{-- @include('components.footer') --}}
</body>
</html>
