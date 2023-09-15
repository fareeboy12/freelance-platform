<?php

namespace App\Livewire\Client;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Navbar extends Component
{
    public $user;

    public function mount()
    {
        // Fetch the currently authenticated user
        $this->user = Auth::user();
    }
    
    public function render()
    {
        return view('livewire.client.navbar');
    }
}
