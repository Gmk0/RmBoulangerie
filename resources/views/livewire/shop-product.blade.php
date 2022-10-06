<div>
    {{-- Stop trying to control. --}}

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
                    <a wire:click="add_cart({{$item['id']}})" href="#" class="btn btn-order" role="button"><span
                            class="bi-cart-fill"></span> AJOUTER</a>
                </div>
            </div>
        </div>



        @empty
        p>Product not found</p>
        @endforelse

    </div>

    {{$product->links('livewire::bootstrap')}}
</div>

@push('scripts')

<script>
    window.addEventListener('success', event=> {
    toastr.success(event.detail.message)
    
    });
</script>

@endpush