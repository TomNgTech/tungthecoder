<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/tungthecoder/public/favicon.ico" type="image/x-icon" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TCoder</title>

    <!-- Styles -->
    <link href="/tungthecoder/public/css/app.css" rel="stylesheet">
    @yield('styles')
    
</head>
<body>
<div class="bodyWrapper">
    @include('_includes.nav.main')
    
    <div id="app">
        @yield('content')
    </div>
    
</div>

<!-- Scripts -->
<script src="/tungthecoder/public/js/app.js"></script>
@yield('scripts')

@include('_includes.footer.main')
</body>
</html>
