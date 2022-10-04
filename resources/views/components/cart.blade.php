<div class="dropdown">
    <a class="text-reset me-3 dropdown-toggle " href="#" id="navbarDropdownMenuLink" role="button"
        data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fas fa-shopping-cart"></i>[ <span class="">{{Session::has('cart')?
            Session::get('cart')->totalQty:0}}</span>]
    </a>
    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
        @if(Session::has('cart'))
        <li>
            @foreach (Session::get('cart')->items as $item)
            <div class="d-flex p-2 justify-content-around m-2">
                <table class="table table-bordered table-light">
                    <tbody>
                        <tr>
                            <td><img src="{{asset('image/PainBle.jpeg')}}" width="30" class="img-fluid"
                                    alt="image desc">
                            </td>
                            <td class="text-align-center">
                                {{$item['name']}}
                            </td>
                            <td class="text-align-center">
                                {{$item['price']}}
                            </td>
                            <td class="text-align-center">
                                {{$item['quantity']}}
                            </td>
                            <td class="d-flex text-align-center">
                                <a href="" class="btn"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                <a href="" class="btn"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    </tbody>
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