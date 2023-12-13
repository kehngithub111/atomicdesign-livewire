<?php

namespace App\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    public $name = "Update";

    public function render()
    {
        return view('livewire.dashboard');
    }
}
