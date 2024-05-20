<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Resmi Desa GenukWatu Kecamatan Ngoro Kabupaten Jombang Jawa Timur</title>
    </title>
    <link rel="icon" type="image" href="{{ asset('img/Logo_Jombang.jpg') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        .nav-item.dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>
</head>

<body>
    <div class="container">

        @include('layouts.header')
        @include('layouts.navbar')
        {{-- Section Content --}}
        <main class="py-4">
            @yield('content')
        </main>

    </div>
    @include('layouts.footer')
</body>

</html>
