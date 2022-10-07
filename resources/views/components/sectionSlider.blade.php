{{--<section id="GrandMenu">
    <h1>BOULANGERIE RM<span class="Orange">.</span><br>Pain Son Excellence </BR>
    </h1>
    <marquee behavior="alternate" direction="left" bgcolor="BLEU">La croissance autravers le vrai blé
    </marquee>
    @guest
    <a href="{{route('login')}}" class="boutton1"
        title="Connectez-vous pour acceder à votre compte et si vous en avez pas, créez-en!">Connexion</a>
    @endguest

</section>
--}}


<!-- Carousel wrapper -->
<div id="carouselBasicExample" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <!-- Indicators -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselBasicExample" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselBasicExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselBasicExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <!-- Inner -->
    <div class="carousel-inner">
        <!-- Single item -->
        <div class="carousel-item active">
            <img src="{{asset('image/Painmain.jpg')}}" class="d-block w-100" alt="Sunset Over the City" />
            <div class="carousel-caption d-none d-md-block">
                <h5>Painmain</h5>
                <p>
                    Nulla vitae elit libero, a pharetra augue mollis interdum.
                </p>
            </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
            <img src="{{asset('image/Painmain.jpg')}}" class="d-block w-100" alt="Canyon at Nigh" />
            <div class="carousel-caption d-none d-md-block">
                <h5>les Pains</h5>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
            </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
            <img src="{{asset('image/Painmain.jpg')}}" class="d-block w-100" alt="Cliff Above a Stormy Sea" />
            <div class="carousel-caption d-none d-md-block">
                <h5>pain francais</h5>
                <p>
                    Praesent commodo cursus magna, vel scelerisque nisl consectetur.
                </p>
            </div>
        </div>
    </div>
    <!-- Inner -->

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselBasicExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselBasicExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- Carousel wrapper -->