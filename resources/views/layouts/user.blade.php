<!DOCTYPE html>
<html>

<!--L'en-tête de la page index-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Boulangerie RM Du pain Son Excellence</title>

    <link rel="stylesheet" href="{{asset('css/Style.css')}}">

    <link rel="stylesheet" href="{{asset('css/style2.css')}}">

    <link rel="stylesheet" href="{{mix('css/app.css')}}">

    <link rel="stylesheet" href="{{asset('css/toastr.css')}}">

    <style>

    </style>

    @livewireStyles
</head>

<!--Le corps de la page index-->

<body class="d-flex flex-column min-vh-100">


    <x-navbar />

    <main class="">
        @yield('content')
    </main>

    <x-footer />

    @livewireScripts()
    @stack('scripts')

    <script src="{{mix('js/app.js')}}"></script>


    <script>
        $.ajaxSetup({
        headers: {
            'X-CSFR-TOKEN': $('meta[name="csfr-token"]').attr('content')
        }
    });
    </script>
    @yield('scripts')


</body>



</html>