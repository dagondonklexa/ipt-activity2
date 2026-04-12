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
        <main class="flex-1 ">
            @if(session('success'))
            <div class="bg-green-100 text-green-700 p-3 rounded mb-4" id="successMessage text-center">
                {{ session('success') }}
            </div>

            <script>
                setTimeout(() => {
                    document.getElementById('successMessage')?.remove();
                }, 2000);
            </script>
        @endif  
            @yield('content')
        </main>
         @include("partials.footer")
    </div>
</body>
</html>
