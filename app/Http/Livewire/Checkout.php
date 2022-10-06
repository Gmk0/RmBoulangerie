<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Session;
use App\Cart;

class Checkout extends Component
{
    public function updateQty($id, $quantity)
    {


        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->updateQty($id, $quantity);

        Session::put('cart', $cart);
           $this->emit('refreshComponent');
    }

    public function remove($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
            $this->emit('refreshComponent');
        } else {
            Session::forget('cart');
            $this->emit('refreshComponent');
        }
    }

    public function render()
    {




        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);


        return view('livewire.checkout', ['products' => $cart->items]);
    }
}
