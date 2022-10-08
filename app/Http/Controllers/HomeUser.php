<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
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
                'product' => product::paginate(8)

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

    public function update_cart(Request $request)
    {
        dd($request->id);
        if ($request->id && $request->quantity) {
            $oldCart = Session::has('cart') ? Session::get('cart') : null;
            $cart = new Cart($oldCart);
            $cart->updateQty($request->id, $request->quantity);
            Session::put('cart', $cart);
        }
    }

    public function addProduct()
    {
        return view("product");
    }
    public function solde()
    {
        return view("soldeUser");
    }
}
