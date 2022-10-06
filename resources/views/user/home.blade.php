@extends('layouts.user')

@section('content')

<x-sectionSlider />

<H2>Boutique</H2>
<!--La première ligne de la grille-->
<div class="grille">

    @forelse ($product as $item)
    <div class="grid-Item">
        <H5>{{$item->name}}</H5>
        <img src="{{asset('/storage/product_images/'.$item->image)}}" alt="le pain" width="210" heidht="300">
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