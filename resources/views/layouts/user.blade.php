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
            <section id="GrandMenu">
                <h1>BOULANGERIE RM<span class="Orange">.</span><br>Pain Son Excellence </BR>
                </h1>
                <marquee behavior="alternate" direction="left" bgcolor="BLEU">La croissance autravers le vrai blé
                </marquee>
                @guest
                <a href="{{route('login')}}" class="boutton1"
                    title="Connectez-vous pour acceder à votre compte et si vous en avez pas, créez-en!">Connexion</a>
                @endguest

            </section>

            <!--Lasection boutique-->
            <SECtion id="Boutique">

                @yield('content')

            </SECtion>


            <!--Le pied de page-->
            <footer id="BasDePage">

                <h2>Qui sommes-nous</h2>

                <p>Nous sommes une entreprise semi-industriel de transformation agro-alimentaire <br>
                    situer en République Démocratique du Congo <br>
                    et ce site conserne spécifiquement la clientèle de notre Structure de la boulangerie
                </p>

                <!--Adresse -->
                <h3>Situation géographique</h3>
                <p><strong>Siège administratif :</strong> <br>
                    121/73 Av de la paix, Q/Maman Mobutu, C/Mont-Ngafula, Ville de Kinshasa ;</p>

                <p><strong>Siège d’exploitation 1 (Rayon de vente) :</strong> <br>
                    1 av Kyamwangana, Q/Maman Mobutu, C/Mont-Ngafula, Ville de Kinshasa ;</p>

                <p><strong>Siège d’exploitation 2 (Siège de production) :</strong> <br>
                    35, Av Selembao, Q/Nkulu, C/Selembao, Ville de Kinshasa et</p>

                <p><strong>Siège d’exploitation 3 (Siège de production) :</strong> <br>
                    29/32, Av Palais de marbre, Q/Congo, C/Ngaliema</p>

                <!--Signature-->
                <p><strong>Copyright @2022 / +243 811 303 041</strong></p>
            </footer>
        </div>

    </div>

    <script src="{{mix('js/app.js')}}"></script>
    @yield('script')

</body>



</html>