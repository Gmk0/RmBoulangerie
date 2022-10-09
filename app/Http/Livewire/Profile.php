<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Profile extends Component
{

    public $user;
    public function render()
    {
        $this->user = User::find(Auth::user()->id)->toArray();
        return view('livewire.profile')->extends('layouts.user')
            ->section('content');;
    }
}
