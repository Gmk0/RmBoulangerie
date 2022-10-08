<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <!-- Left Side Of Navbar -->
    <ul class="navbar-nav me-auto p-2">
        <li class="nav-item ">
            <a class="nav-link" href="{{ route('boutique.user') }}">{{ __('BOUTIQUE') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Point de vente') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('contact') }}</a>
        </li>
    </ul>

    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ms-auto">
        <!-- Authentication Links -->
        @guest
        @if (Route::has('login'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @endif

        @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
        @endif
        @endguest

        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" v-pre>
                <i class="fas fa-shopping-cart px-12"></i> <span
                    class="top-0 start-100 translate-middle badge rounded-pill bg-danger">{{Session::has('cart')?
                    count($products):0}}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                @if(Session::has('cart'))

                @foreach ($products as $item)
                <div class="d-flex p-2 justify-content-around m-1">
                    <table class="table">

                        <tr>
                            <th><img src="{{asset('image/PainBle.jpeg')}}" class="rounded" width="30" class="img-fluid"
                                    alt="image desc">
                            </th>
                            <th class="text-align-center">
                                {{$item['name']}} <br>
                                price: {{$item['price']}} $
                            </th>

                            <th class="text-align-center">
                                {{$item['quantity']}}
                            </th>
                            <th class="text-align-center">
                                <button wire:click="remove({{$item['id']}})" class="btn btn-outline-danger"><i
                                        class="fa fa-close" aria-hidden="true"></i></button>

                            </th>
                        </tr>

                    </table>



                </div>
                @endforeach
                <div class="row m-1 p-1">
                    <a href="{{route('checkout')}}" class="btn btn-outline-primary"> checkout</a>
                </div>

                @else

                <div class="p-2">
                    <p>La carte est vide</p>
                </div>



                @endif

            </div>


        </li>
        @auth
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="">
                    {{ __('Profile') }}
                </a>
                <a class="dropdown-item" href="{{ route('orders')}}">
                    {{ __('orders') }}
                </a>
                <a class="dropdown-item" href="">
                    {{ __('Settings') }}
                </a>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>


        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" v-pre>
                <i class="fa fa-money" aria-hidden="true"></i>
                {{auth::user()->solde}}
            </a>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">


                <div class="row m-1 p-1">
                    <a href="{{route('checkout')}}" class="btn btn-outline-primary"> versement</a>
                </div>






            </div>


        </li>
        @endauth

    </ul>
</div>