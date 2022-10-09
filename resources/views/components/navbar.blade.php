<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-white shadow-sm p-2">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{asset('image/IsraelLogo.jpg')}}" class="brand" width="50" height="50" alt="">
            {{ config('app.name') }}

        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        @livewire('header-cart')
    </div>
</nav>