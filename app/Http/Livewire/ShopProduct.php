<?php

namespace App\Http\Livewire;

use App\Models\product;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Session;
use App\Cart;
use Brian2694\Toastr\Facades\Toastr;

class ShopProduct extends Component
{

    use WithPagination;

    protected $listeners = ['success' => 'success'];

    public function success()
    {
        if (session::has('success')) {
            $this->dispatchBrowserEvent('success', ['message' => 'le paiement a ete bien effectuer']);
        }
    }





    public function add_cart($id)
    {
        $products = product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($products, $id);
        Session::put('cart', $cart);
        $this->emit('refreshComponent');
        $this->dispatchBrowserEvent('success', ['message' => 'le produit a ete ajouté']);
    }


    public function render()
    {
        return view(
            'livewire.shop-product',
            [
                'product' => product::paginate(8),
            ]
        );
    }
}
