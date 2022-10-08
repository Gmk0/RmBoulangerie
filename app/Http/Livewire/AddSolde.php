<?php

namespace App\Http\Livewire;

use App\Models\solde;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class AddSolde extends Component
{
    use WithPagination;
    public $user;
    public $montant;


    public function register()
    {
        $this->validate([
            'montant' => "required|numeric",

        ]);
    }


    public function render()
    {
        return view('livewire.add-solde', [
            'solde' => solde::paginate(10),
        ]);
    }
}
