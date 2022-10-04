<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
            data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar brand -->
            <a class="navbar-brand mt-2 mt-lg-0" href="#">
                <img src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp" height="15" alt=""
                    loading="lazy" />
                BOULANGERIE
            </a>
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('boutique.user')}}">Boutique</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Projects</a>
                </li>
            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->

        <!-- Right elements -->
        <div class="d-flex align-items-center">c
            <!-- Icon -->


            <!-- Notifications -->
            <div class="dropdown">
                <a class="text-reset me-3 dropdown-toggle " href="#" id="navbarDropdownMenuLink" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-shopping-cart"></i>[  <span class="">{{Session::has('cart')? Session::get('cart')->totalQty:0}}</span>]
                </a> 
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                @if(Session::has('cart'))
                  <li>
                       @foreach (Session::get('cart')->items as $item)
                           <div class="d-flex p-2 justify-content-around">
                                 <h6 class="p-1">
                                
                                <img src="{{('image/PainBle.jpeg')}}" width="30" class="img-fluid" alt="image desc">
                              
                    </h6>
                           <h6 class="p-1">{{$item['name']}}</h6>
                           <h6 class="p-1">{{$item['price']}}</h6>
                           <h6 class="p-1">{{$item['quantity']}}</h6>
                      
                           
                           </div>
                       @endforeach
                    </li>
        


                @endif
                  
                </ul>
            </div>
            @guest
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>

            </ul>

            @else
            <div class="dropdown">
                <a class="text-reset dropdown-toggle d-flex align-items-center hidden-arrow" href="#"
                    id="navbarDropdownMenuAvatar" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-user"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                    <li>
                        <a class="dropdown-item" href="#">{{Auth::user()->last_name}}</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Settings</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                                                         document.getElementById('logout-form').submit();">

                            <i class="ti-power-off text-primary"></i>{{ __('Logout') }}

                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
            @endguest

        </div>
        <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
</nav>