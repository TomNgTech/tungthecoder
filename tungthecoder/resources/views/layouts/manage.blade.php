<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/tungthecoder/public/favicon.ico" type="image/x-icon" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TCoder - Management</title>

    <!-- Styles -->
    <link href="/tungthecoder/public/css/app.css" rel="stylesheet">
    @yield('styles')
    
</head>
<body>
    
<div class="bodyWrapper">
    @include('_includes.nav.main')
    
    <div class="columns" id="app">
    
        @include('_includes.nav.manage')
    
    
        <div class="column is-9 is-offset-2">
    
            @include('_includes.partials._messages') @yield('content')
        </div>

    </div>
</div>

@include('_includes.footer.main')
    
    <!-- Scripts -->
    <script src="/tungthecoder/public/js/app.js"></script>
    @yield('scripts')
    
</body>
</html>
