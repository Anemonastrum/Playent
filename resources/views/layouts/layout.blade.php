<!DOCTYPE html>
<html>

<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
    <link rel="icon" type="image/x-icon" href="assets/icons/logo.png" />
    <link rel="stylesheet" href="assets/style/style.css" />
    <script src="assets/script/dashboard.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="bg-transparent">
    @yield('header')
    
    @yield('sidebar')

    @yield('content')
    
    @yield('footer')
</body>
</html>