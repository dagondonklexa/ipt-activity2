<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    <!-- Bootstrap CSS Link -->
    
     @vite('resources/css/app.css')
</head>
<body>

    <div class="container mx-auto">
        {{-- This is the most important part! It's where your content will show up --}}
        @yield('content')
    </div>

   
</body>
</html>
