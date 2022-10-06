<div class="dropdown">
    <a class="dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
        aria-expanded="false">


        <i class="fas fa-shopping-cart px-12"></i> <span
            class="top-0 start-100 translate-middle badge rounded-pill bg-danger">{{Session::has('cart')?
            count($products):0}}</span>
    </a>
    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
        @if(Session::has('cart'))
        <li>
            @foreach ($products as $item)
            <div class="d-flex p-2 justify-content-around m-2">
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
        </li>
        @else

        <li>
            The Shopping cart is empty
        </li>



        @endif

    </ul>
</div>