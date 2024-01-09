<?php

namespace App\Livewire\Template;

use App\Services\Cms;
use Livewire\Component;

class Footer extends Component
{
    public $pages;

    public function mount()
    {
        $cms = new Cms();
        $this->pages = collect($cms->all())->where('published', true);
    }
    public function render()
    {
        return view('livewire.template.footer');
    }
}
