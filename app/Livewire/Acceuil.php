<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Acceuil extends Component
{
    #[Title("Accueil")]
    public function render()
    {
        return view('livewire.acceuil')
            ->layout('template.app');
    }
}
