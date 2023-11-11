<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- When title is not specified, use default title "Pet Registration System" --}}
    <title>@yield('title', 'Pet Registration System')</title>

    {{-- FRAMEWORK SPECIFIC STYLES --}}
    <link rel="stylesheet" href="{{ asset('css/lib/mdb5/mdb.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lib/fontawesome/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lib/fontawesome/css/solid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lib/simplebar/simplebar.6.2.5.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    
    {{-- CHILD VIEW STYLES --}}
    @stack('styles')

</head>
<body>
 
    @yield('content')

    {{-- FRAMEWORK SPECIFIC SCRIPTS --}}
    <script src="{{ asset('js/lib/jquery/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('js/lib/momentjs/moment-with-locales.js') }}"></script>
    <script src="{{ asset('js/lib/simplebar/simplebar6.2.5.min.js') }}"></script>
    <script src="{{ asset('js/lib/mdb/mdb.min.js') }}"></script>

    {{-- CHILD VIEW SCRIPTS --}}
    @stack('scripts')

</body>
</html>