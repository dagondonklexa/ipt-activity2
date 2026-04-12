<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
     @vite('resources/css/app.css')
</head>
<body>
    <div class="mx-auto w-full h-screen flex flex-col">
        @include('partials.header')
        <main class="flex-1">
            @yield('content')
        </main>
         @include("partials.footer")
    </div>
</body>
</html>
