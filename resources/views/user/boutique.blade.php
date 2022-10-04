@extends('layouts.user')

@section('content')

<H2>Boutique</H2>




<div class="grille">

    @forelse ($product as $product)
          <div class='container-fluid'>
        <div class="card mx-auto  col-10 mt-5">
            <img class='mx-auto img-thumbnail'
                src="{{('image/PainBle.jpeg')}}"
                width="auto" height="auto"/>
            <div class="card-body text-center mx-auto">
                <div class='cvp'>
                    <h5 class="card-title font-weight-bold">{{$product->name}}</h5>
                    <p class="card-text">${{$product->price}}</p>
                    
                    <div class="row p-1 m-1">
                    <a href="#" class="btn details m-1">view details</a><br />
                    <a href="{{route('cart.user',[$product->id])}}" class="btn btn-outline-primary cart m-1">ADD TO CART</a>
                    </div>
                 
                    
                </div>
            </div>
        </div>

    </div>                                                                                                                                                                                                                                                         
                                                                                                                                                                                                                                                  
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
    @empty
    <p>Product not found</p>
    @endforelse

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