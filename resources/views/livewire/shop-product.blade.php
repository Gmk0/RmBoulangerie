<div>
    {{-- Stop trying to control. --}}

    @if(Session::has('status'))


    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <strong>Success</strong> {{Session::get('status')}}
    </div>

    <script>
        var alertList = document.querySelectorAll('.alert');
      alertList.forEach(function (alert) {
        new bootstrap.Alert(alert)
      })
    </script>


    @endif

    <div class="row">
        @forelse ($product as $item)


        <div class="col-md-3 col-lg-3">
            <div class="img-thumbnail">
                <img src="{{asset('/storage/product_images/'.$item->image)}}" style="height:200px;"
                    class="img-fluid rounded" alt="...">
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
                    <button wire:click="add_cart({{$item['id']}})" class="btn btn-order" role="button"><span
                            class="bi-cart-fill"></span> AJOUTER</button>
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
    toastr.options = ({
        "closeButton":true,
        "positionClass":"toast-bottom-right",

    });    
    toastr.success(event.detail.message);
    
    });
</script>

@endpush