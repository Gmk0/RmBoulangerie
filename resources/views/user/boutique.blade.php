@extends('layouts.user')

@section('content')






<div class="container">
    <H2>Boutique</H2>

    <div class="row">
        @forelse ($product as $item)


        <div class="col-md-3 col-lg-3">
            <div class="img-thumbnail">
                <img src="{{asset('image/PainBle.jpeg')}}" class="img-fluid" alt="...">
                <div class="price">
                    {{$item->price}}
                </div>
                <div class="caption">
                    <h4>
                        {{$item->name}}
                    </h4>
                    <p>
                        {{$item->name}}
                    </p>
                    <a href="{{route('cart.user',[$item->id])}}" class="btn btn-order" role="button"><span
                            class="bi-cart-fill"></span> AJOUTER</a>
                </div>
            </div>
        </div>



        @empty
        p>Product not found</p>
        @endforelse

    </div>

    {{-- @forelse ($product as $product)
    <div class='container-fluid'>
        <div class="card mx-auto  col-10 mt-5">
            <img class='mx-auto img-thumbnail' src="{{('image/PainBle.jpeg')}}" width="auto" height="auto" />
            <div class="card-body text-center mx-auto">
                <div class='cvp'>
                    <h5 class="card-title font-weight-bold">{{$product->name}}</h5>
                    <p class="card-text">${{$product->price}}</p>

                    <div class="row p-1 m-1">
                        <a href="#" class="btn details m-1">view details</a><br />
                        <a href="{{route('cart.user',[$product->id])}}" role="button"
                            class="btn btn-outline-primary cart m-1">ADD TO
                            CART</a>
                    </div>


                </div>
            </div>
        </div>

    </div>


    @empty
    <p>Product not found</p>
    @endforelse--}}

    <div class="row mt-5">
        <div class="col text-center">
            <div class="block-27">
                <ul>




                </ul>


            </div>
        </div>
    </div>

</div>


@endsection