<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Session;
use App\Cart;

class HomeUser extends Controller
{
    //

    public function index()
    {
        return view(
            'user.home',
            [
                'product' => product::paginate(10)
            ]
        );
    }

    public function boutique()
    {

        return view(
            'user.boutique',
            [
                'product' => product::paginate(10)
            ]
        );
    }

    public function addCart($id)
    {
        $products = product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($products, $id);
        Session::put('cart', $cart);

        return redirect()->route('boutique.user');
    }

    public function checkout()
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        return view('user.checkout', ['products' => $cart->items]);
    }
}
