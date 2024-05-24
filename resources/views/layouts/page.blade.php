<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Resmi Desa GenukWatu Kecamatan Ngoro Kabupaten Jombang Jawa Timur</title>
    <link rel="icon" type="image/jpg" href="{{ asset('img/Logo_Jombang.jpg') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link href="{{ asset('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="{{ asset('template/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <link href="{{ asset('template/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="icon" href="{{ asset('template/img/atom-solid.svg') }}">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <style>
        .nav-item.dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        @include('layouts.header')
        @include('layouts.navbar')
        {{-- Section Content --}}
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @include('layouts.footer')
    @include('layouts.js')

</body>

</html>
