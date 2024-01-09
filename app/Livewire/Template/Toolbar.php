<?php

namespace App\Livewire\Template;

use Livewire\Component;

class Toolbar extends Component
{
    public $title = 'Toolbar';
    public function render()
    {
        return view('livewire.template.toolbar');
    }
}
