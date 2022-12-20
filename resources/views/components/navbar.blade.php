<nav class="navbar pb-5 navbar-expand-lg sticky-top navbar-light bg-white shadow-sm p-2">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
            BOULANGERIE
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        @livewire('header-cart')
    </div>
</nav>