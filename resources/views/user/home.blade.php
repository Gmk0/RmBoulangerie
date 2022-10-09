@extends('layouts.user')

@section('content')

<x-sectionSlider />
<div class="m-2">

    <H2>Boutique</H2>
</div>


<!--La première ligne de la grille-->
<div class="grille">

    @forelse ($product as $item)


    <div class="card">
        <img class="card-img-top img-thumbnail" src="{{asset('/storage/product_images/'.$item->image)}}" alt="">
        <div class="card-body">
            <h5 class="card-title">{{$item->name}}</h5>
            <p class="card-text">{{$item->price}} CDF</p>
        </div>
    </div>
    @empty
    <p>Product not found</p>
    @endforelse

    <div class="row mt-5">
        <div class="col text-center">
            <div class="block-27">
                <ul>

                    <p class="active"><span>{{$product->links('pagination::bootstrap-4')}}</span></p>
                </ul>


            </div>
        </div>
    </div>

</div>
@endsection