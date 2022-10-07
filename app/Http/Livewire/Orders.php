<?php

namespace App\Http\Livewire;

use App\Models\orders as ModelsOrders;
use Livewire\Component;

class Orders extends Component
{
    public function render()
    {
        $orders = ModelsOrders::get();
        $orders->transform(function ($order, $key) {
            $order->panier = unserialize($order->panier);
            return $order;
        });

        return view('livewire.orders', [
            'Panier' => $orders,

        ])->extends('layouts.user')
            ->section('content');
    }
}
