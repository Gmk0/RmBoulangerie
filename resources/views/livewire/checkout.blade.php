<div>


    <section class="h-100" style="background-color: #eee;">
        <div class="container h-100 py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-10">

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="fw-normal mb-0 text-black">PRODUIT CART</h3>
                        <div>

                        </div>
                    </div>
                    @if (Session::has('cart'))


                    @php $total = 0 @endphp
                    @foreach ($products as $item)
                    @php
                    $total = $item['price'] * $item['quantity']
                    @endphp
                    <div class="card rounded-3 mb-4">
                        <div class="card-body p-4">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="col-md-2 col-lg-2 col-xl-2">
                                    <img src="{{asset('/storage/product_images/'.$item['image'])}}"
                                        class="img-fluid rounded-3" alt="Cotton T-shirt">
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-3">
                                    <p class="lead fw-normal mb-2">{{$item['name']}}</p>
                                    <p><span class="text-muted">price: {{$item['price']}} $</span>
                                    </p>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex parent">


                                    <input id="form1" min="0" name="quantity" class=" form-control quantity update-cart"
                                        value="{{$item['quantity']}}" type="number" class="form-control form-control-sm"
                                        onchange="update({{$item['id']}},$(this).val())" />






                                </div>
                                <div class=" col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                    <h5 class="mb-0">
                                        ${{$total }}


                                    </h5>
                                </div>

                                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                    <button class="btn btn-outline-danger" wire:click="remove({{$item['id']}})"><i
                                            class="fas fa-close fa-lg"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach





                    <div class="card mb-4">
                        <div class="card-body p-4 d-flex flex-row">
                            <div class="form-outline flex-fill">
                                <label for=""></label>
                                <H2>TOTAL : {{Session('cart')->totalPrice}} $</H2>
                            </div>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <button type="button" class="btn btn-warning btn-block btn-lg">Proceed to Pay</button>
                        </div>
                    </div>

                </div>
            </div>
            @endif
        </div>
</div>

@push('scripts')
<script>
    function update(id,quantity)
    {
        @this.updateQty(id, quantity)
        
        
        
    }
    
</script>



@endpush