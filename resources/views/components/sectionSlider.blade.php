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

<section style="">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="First slide"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="{{('image/Painmain.jpg')}}" class="w-100 d-block" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Title 1</h3>
                    <p>Description</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{('image/Painmain.jpg')}}" class="w-100 d-block" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Title</h3>
                    <p>Description</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{('image/Painmain.jpg')}}" class="w-100 d-block" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Title</h3>
                    <p>Description</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

</section>