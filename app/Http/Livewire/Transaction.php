<?php

namespace App\Http\Livewire;

use App\Models\solde;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Transaction extends Component
{
    public $code;

    public function register()
    {
        $this->validate([
            'code' => "required"
        ]);


        $code = solde::where('code', $this->code)->first();


        if ($code != null && $code->status == 0) {
            $data = User::find(Auth::user()->id);

            $data->solde += $code->solde;
            $data->update();

            $code->status = 1;
            $code->update();
            $this->emit('refreshComponent');
            $this->code = "";
            $this->dispatchBrowserEvent('success', ['message' => "le code n'existe pas"]);
        } else {
            $this->dispatchBrowserEvent('error', ['message' => "le code n'existe pas ou a deja ete utiliser"]);
        }
    }
    public function render()
    {
        return view('livewire.transaction', [
            "solde" => solde::where('user_id', Auth::user()->id)
                ->paginate(10),
        ])->extends('layouts.user')
            ->section('content');
    }

    public function clear()
    {
        $this->code = "";
    }
}