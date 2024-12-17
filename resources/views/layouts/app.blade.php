<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/style.css')}}">
        <link rel="shortcut icon" href="{{config('images.xmasTree')}}" type="image/x-icon">
        <title>@yield('title', 'Mi Aplicacion')</title>
    </head>
    <body>
        <div id="app">
            <x-header />

            <main>
                @yield('content')
            </main>
            
            <x-footer />
        </div>

        <script src="{{ asset('js/script.js')}}"></script>
        <script 
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous">
        </script>
    </body>
</html>