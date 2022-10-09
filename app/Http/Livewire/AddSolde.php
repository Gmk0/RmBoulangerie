<?php

namespace App\Http\Livewire;

use App\Models\solde;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;
use App\Mail\sendMail;

class AddSolde extends Component
{
    use WithPagination;
    public $user;
    public $montant;
    public $search;



    public function searchId()
    {
        $this->validate([
            'search' => 'required|numeric'
        ]);
        if (User::find($this->search) != null) {
            $this->user = User::findOrFail($this->search)->toArray();
        } else {
            $this->dispatchBrowserEvent('success', ['message' => "l'identifiant n'existe pas"]);
        }
    }


    public function register()
    {
        $this->validate([
            'montant' => "required|numeric",

        ]);
        $data = array(
            "solde" => $this->montant,
            "libelle" => "Versement",
            "code" => Str::random(5),
            "status" => 0,
            "user_id" => $this->user['id'],
        );

        $solde = solde::create($data);
        if ($solde == true) {
            $this->dispatchBrowserEvent('success', ['message' => "l'identifiant n'existe pas"]);


            $email = $this->user['email'];


            $this->user = [];
            $this->montant = "";

            return redirect()->route('send');
        }
    }


    public function render()
    {
        return view('livewire.add-solde', [
            'solde' => solde::paginate(10),
        ]);
    }
}
