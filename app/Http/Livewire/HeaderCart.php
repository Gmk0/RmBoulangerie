<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Session;
use App\Cart;
use App\Models\solde;
use Illuminate\Support\Facades\Auth;

class HeaderCart extends Component
{
    protected $listeners = ['refreshComponent' => '$refresh'];
    public  $products;
    public $code;



    public function render()
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $this->products
            = $cart->items;

        if (Auth::user()) {
            $this->code = solde::where('user_id', Auth::user()->id)
                ->where('status', 0)
                ->get();
        }



        return view('livewire.header-cart');
    }

    public function remove($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
            return redirect()->route('home.user');
        }
    }
}
