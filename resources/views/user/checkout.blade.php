@extends('layouts.user')

@section('content')




  {{--  <section class="h-100 h-custom">
        <div class="container h-100 py-5">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
      
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col" class="h5">Shopping Bag</th>
                      <th scope="col">Format</th>
                      <th scope="col">Quantity</th>
                      <th scope="col">Price</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">
                        <div class="d-flex align-items-center">
                          <img src="https://i.imgur.com/2DsA49b.webp" class="img-fluid rounded-3"
                            style="width: 120px;" alt="Book">
                          <div class="flex-column ms-4">
                            <p class="mb-2">Thinking, Fast and Slow</p>
                            <p class="mb-0">Daniel Kahneman</p>
                          </div>
                        </div>
                      </th>
                      <td class="align-middle">
                        <p class="mb-0" style="font-weight: 500;">Digital</p>
                      </td>
                      <td class="align-middle">
                        <div class="d-flex flex-row">
                          <button class="btn btn-link px-2"
                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                            <i class="fas fa-minus"></i>
                          </button>
      
                          <input id="form1" min="0" name="quantity" value="2" type="number"
                            class="form-control form-control-sm" style="width: 50px;" />
      
                          <button class="btn btn-link px-2"
                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                            <i class="fas fa-plus"></i>
                          </button>
                        </div>
                      </td>
                      <td class="align-middle">
                        <p class="mb-0" style="font-weight: 500;">$9.99</p>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row" class="border-bottom-0">
                        <div class="d-flex align-items-center">
                          <img src="https://i.imgur.com/Oj1iQUX.webp" class="img-fluid rounded-3"
                            style="width: 120px;" alt="Book">
                          <div class="flex-column ms-4">
                            <p class="mb-2">Homo Deus: A Brief History of Tomorrow</p>
                            <p class="mb-0">Yuval Noah Harari</p>
                          </div>
                        </div>
                      </th>
                      <td class="align-middle border-bottom-0">
                        <p class="mb-0" style="font-weight: 500;">Paperback</p>
                      </td>
                      <td class="align-middle border-bottom-0">
                        <div class="d-flex flex-row">
                          <button class="btn btn-link px-2"
                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                            <i class="fas fa-minus"></i>
                          </button>
      
                          <input id="form1" min="0" name="quantity" value="1" type="number"
                            class="form-control form-control-sm" style="width: 50px;" />
      
                          <button class="btn btn-link px-2"
                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                            <i class="fas fa-plus"></i>
                          </button>
                        </div>
                      </td>
                      <td class="align-middle border-bottom-0">
                        <p class="mb-0" style="font-weight: 500;">$13.50</p>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
      
              <div class="card shadow-2-strong mb-5 mb-lg-0" style="border-radius: 16px;">
                <div class="card-body p-4">
      
                  <div class="row">
                    <div class="col-md-6 col-lg-4 col-xl-3 mb-4 mb-md-0">
                      <form>
                        <div class="d-flex flex-row pb-3">
                          <div class="d-flex align-items-center pe-2">
                            <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1v"
                              value="" aria-label="..." checked />
                          </div>
                          <div class="rounded border w-100 p-3">
                            <p class="d-flex align-items-center mb-0">
                              <i class="fab fa-cc-mastercard fa-2x text-dark pe-2"></i>Credit
                              Card
                            </p>
                          </div>
                        </div>
                        <div class="d-flex flex-row pb-3">
                          <div class="d-flex align-items-center pe-2">
                            <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel2v"
                              value="" aria-label="..." />
                          </div>
                          <div class="rounded border w-100 p-3">
                            <p class="d-flex align-items-center mb-0">
                              <i class="fab fa-cc-visa fa-2x fa-lg text-dark pe-2"></i>Debit Card
                            </p>
                          </div>
                        </div>
                        <div class="d-flex flex-row">
                          <div class="d-flex align-items-center pe-2">
                            <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel3v"
                              value="" aria-label="..." />
                          </div>
                          <div class="rounded border w-100 p-3">
                            <p class="d-flex align-items-center mb-0">
                              <i class="fab fa-cc-paypal fa-2x fa-lg text-dark pe-2"></i>PayPal
                            </p>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-6">
                      <div class="row">
                        <div class="col-12 col-xl-6">
                          <div class="form-outline mb-4 mb-xl-5">
                            <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
                              placeholder="John Smith" />
                            <label class="form-label" for="typeName">Name on card</label>
                          </div>
      
                          <div class="form-outline mb-4 mb-xl-5">
                            <input type="text" id="typeExp" class="form-control form-control-lg" placeholder="MM/YY"
                              size="7" id="exp" minlength="7" maxlength="7" />
                            <label class="form-label" for="typeExp">Expiration</label>
                          </div>
                        </div>
                        <div class="col-12 col-xl-6">
                          <div class="form-outline mb-4 mb-xl-5">
                            <input type="text" id="typeText" class="form-control form-control-lg" siez="17"
                              placeholder="1111 2222 3333 4444" minlength="19" maxlength="19" />
                            <label class="form-label" for="typeText">Card Number</label>
                          </div>
      
                          <div class="form-outline mb-4 mb-xl-5">
                            <input type="password" id="typeText" class="form-control form-control-lg"
                              placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                            <label class="form-label" for="typeText">Cvv</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-xl-3">
                      <div class="d-flex justify-content-between" style="font-weight: 500;">
                        <p class="mb-2">Subtotal</p>
                        <p class="mb-2">$23.49</p>
                      </div>
      
                      <div class="d-flex justify-content-between" style="font-weight: 500;">
                        <p class="mb-0">Shipping</p>
                        <p class="mb-0">$2.99</p>
                      </div>
      
                      <hr class="my-4">
      
                      <div class="d-flex justify-content-between mb-4" style="font-weight: 500;">
                        <p class="mb-2">Total (tax included)</p>
                        <p class="mb-2">$26.48</p>
                      </div>
      
                      <button type="button" class="btn btn-primary btn-block btn-lg">
                        <div class="d-flex justify-content-between">
                          <span>Checkout</span>
                          <span>$26.48</span>
                        </div>
                      </button>
      
                    </div>
                  </div>
      
                </div>
              </div>
      
            </div>
          </div>
        </div>
      </section>--}}

     <section class="h-100" style="background-color: #eee;">
        <div class="container h-100 py-5">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-10">
      
              <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>
                <div>
                  <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!" class="text-body">price <i
                        class="fas fa-angle-down mt-1"></i></a></p>
                </div>
              </div>
              @php $total = 0 @endphp
              @foreach ($products as $item)
              @php
              $total = $item['price'] * $item['quantity'] 
            @endphp
              <div class="card rounded-3 mb-4">
                <div class="card-body p-4">
                  <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-md-2 col-lg-2 col-xl-2">
                      <img
                        src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img1.webp"
                        class="img-fluid rounded-3" alt="Cotton T-shirt">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-3">
                      <p class="lead fw-normal mb-2">{{$item['name']}}</p>
                      <p><span class="text-muted">Size: </span>M <span class="text-muted">Color: </span>Grey</p>
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex parent">
                        
                      
                            <input id="form1" min="0" name="quantity" class=" form-control quantity update-cart" value="{{$item['quantity']}}" type="number"
                            class="form-control form-control-sm" onchange="remove({{$item['id']}},{{$item['quantity']}})" />
                           
                            <input name="id" id="id" class="id" type="hidden" value="{{$item['id']}}" />
                        
                      
                    
                    
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                      <h5 class="mb-0">
                        ${{$total }}
                        
                    
                    </h5>
                    </div>
                    
                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                      <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                    </div>
                  </div>
                </div>
              </div>  
              @endforeach
      
              
      
             
      
              <div class="card mb-4">
                <div class="card-body p-4 d-flex flex-row">
                  <div class="form-outline flex-fill">T
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
        </div>
      </section>





@endsection


@section('scripts')
<script type="text/javascript">
  

    function remove(id,quantity){
      

        
        $.ajax({
            url: '{{route('update.cart')}}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}',
              
                id: id, 
                quantity: quantity
            },
            success: function (response) {
               window.location.reload();
            }
        });
    }

   
    $(".update").change(function (e) {
        e.preventDefault();
      
        
        var ele = $(this);
   
    });
   
    $(".remove-from-cart").click(function (e) {
        e.preventDefault();
   
        var ele = $(this);
   
        if(confirm("Are you sure want to remove?")) {
            $.ajax({
                url: '',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });

 
   
</script>
@endsection
    
