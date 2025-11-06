<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Accessible Auction Website')</title>
    @vite(['resources/css/app.css', 'resources/css/project.css'])
</head>
<body class="antialiased bg-gray-100 text-gray-900">
    @include('partials.navbar')
    <main>
        @yield('content')
    </main>
    @include('partials.footer')
</body>
</html>
