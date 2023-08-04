<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} | @yield('title')</title>
    <link rel="icon" href="{{ Vite::asset('resources/images/dc-logo.png') }}" type="images/png">
    {{-- importo gli assets --}}
    @vite('resources/js/app.js')
</head>

<body>
    {{-- Header --}}
    @include('includes.header')
    <main>
        {{-- spazio per il contenuto variabile di Main --}}
        @yield('main-content')
        {{-- parte inferiore del Main che rimane invariata --}}
        @include('includes.links')
    </main>
    {{-- Footer --}}
    @include('includes.footer')
</body>

</html>