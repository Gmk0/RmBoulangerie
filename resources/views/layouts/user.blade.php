<!DOCTYPE html>
<html>

<!--L'en-tête de la page index-->

<head>
    <meta= charset="utf-8">
        <title>Boulangerie RM Du pain Son Excellence</title>
        <link rel="stylesheet" href="{{asset('css/Style.css')}}">
        <link rel="stylesheet" href="{{asset('css/Style2.css')}}">
        <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/all.css')}}">
        <link rel="stylesheet" href="{{asset('css/fontawesome.css')}}">
        <link rel="stylesheet" href="{{mix('css/app.css')}}">
        <script src="{{asset('js/all.js')}}"></script>
</head>

<!--Le corps de la page index-->

<body>

    <div class="container-fluid">
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

            </Header>--}}

            <!--la prémière section du corps-->


            <!--Lasection boutique-->


            @yield('content')



            <!--Le pied de page-->

        </div>

    </div>
    <x-footer />


    <script src="{{mix('js/app.js')}}"></script>
    @yield('script')

</body>



</html>