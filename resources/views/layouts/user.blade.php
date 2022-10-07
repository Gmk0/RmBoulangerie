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

<body>




    {{--<div class="container-fluid">
        <div id="Accueil">


            <x-navbar />




            <!-- Navbar -->

            <!-- Navbar -->
            {{-- <Header>
                <img src="{{asset('image/IsraelLogo.jpg')}}" alt="logoRm" width="150" heidht="200">
                <nav>
                    <ul>
                        <li><a href="#Accueil" title="Retourner à l'accueil">Accueil</a></li>
                        <li><a href="#Boutique" title="Visiter la boutique du boulanger">Boutique</a></li>
                        <li><a href="#BasDePage" title="Découvrir l'idéal du site">Qui sommes-nous</a></li>
                        <li><a href="mailto:balumeisrael1@gmail.com"
                                title="Demander de l'aide à l'adresse : balumeisrael1@gmail.com">Aide</a></li>


                    </ul>
                </nav>
                <h2><strong>Ets Rachel Mashi</strong></h2>

            </Header>-

            <!--la prémière section du corps-->


            <!--Lasection boutique-->


            @yield('content')



            <!--Le pied de page-->

        </div>

    </div>--}}

    <div id="app">
        <x-navbar />

        <main class="py-1">
            @yield('content')
        </main>
    </div>
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