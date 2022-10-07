<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Session;
use App\Cart;
use App\Models\orders;
use Auth;

class Checkout extends Component
{
    public $orders = [];

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


    public function payer()
    {
        $this->validate([
            'orders.addresse' => "required",
            "orders.terms" => "accepted"
        ]);
        $cart = Session::has('cart') ? Session::get('cart') : null;
        $id = Auth::user()->id;
        $total = Session::get('cart')->totalPrice;

        $orders = new orders;
        $orders->adresse = $this->orders['addresse'];
        $orders->panier = json_encode($cart->items);
        $orders->payement_id = "120";

        $orders->totalPrice = $total;

        $orders->user_id = $id;
        $success = $orders->save();
        if ($success == true) {
            $this->dispatchBrowserEvent('success', ['message' => "le paiement a ete bien effectuer"]);
            Session::forget('cart');

            return redirect()->route('boutique.user')->with('status', 'LE paiement a ete bien effectuer');
        } else {
            $this->dispatchBrowserEvent('error', ['message' => 'le produit a ete ajouté']);
        }
    }
}
