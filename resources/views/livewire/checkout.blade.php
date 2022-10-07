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
                            <button type="button" data-bs-toggle="modal" data-bs-target="#modalId"
                                class="btn btn-warning btn-block btn-lg">Proceed to Pay</button>
                        </div>
                    </div>

                </div>
            </div>
            @endif
        </div>

        <!-- Button trigger modal -->


        <!-- Modal -->
        <div wire:ignore.self class="modal fade" id="modalId" tabindex="-1" role="dialog" aria-labelledby="modalTitleId"
            aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">PAIEMENT</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    </div>
                    <div class="modal-body">
                        <form class="row" wire:submit.prevent="payer">
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">First name</label>
                                <input type="text" class="form-control" id="validationCustom01"
                                    value="{{Auth::user()->last_name}}" required>
                                <div class="valid-feedback">s
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom01" class="form-label">Adresses</label>
                                <input type="text" class="form-control" value="" wire:model.defer="orders.addresse">
                                <span class="text-danger">@error('orders.addresse')
                                    {{$message}}@enderror</span>
                                <div class="valid-feedback">

                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom01" class="form-label">Total Price</label>
                                <input type="text" class="form-control" id="validationCustom01"
                                    value="{{Session('cart')->totalPrice}} CDF" required>
                                <div class="valid-feedback">

                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                                        wire:model.defer="orders.terms">
                                    <label class="form-check-label" for="invalidCheck">
                                        Agree to terms and conditions
                                    </label>
                                    <span class="text-danger">@error('orders.terms')
                                        {{$message}}@enderror</span>
                                    <div class="invalid-feedback">
                                        You must agree before submitting.
                                    </div>
                                </div>
                            </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="SUBMIT" class="btn btn-primary" wire:loading.attr='disabled'>Payer</button>
                    </div>
                    </form>
                </div>
            </div>
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