<?php

namespace App\Http\Livewire;

use App\Models\orders as ModelsOrders;
use Livewire\Component;

class Orders extends Component
{
    public function render()
    {
        return view('livewire.orders', [
            'Panier' => ModelsOrders::all(),

        ])->extends('layouts.user')
            ->section('content');
    }
}
