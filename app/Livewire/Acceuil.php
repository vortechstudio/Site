<?php

namespace App\Livewire;

use App\Services\VortechAPI\Service;
use App\Services\VortechAPI\Social\BlogService;
use Livewire\Attributes\Title;
use Livewire\Component;

class Acceuil extends Component
{
    public $articles;
    public $services;

    public function mount()
    {
        $blog = new BlogService();
        $service = new Service();
        $this->articles = collect($blog->search(["subcategory" => "news", "published" => true]))->take(7);
        $this->services = collect($service->all());

    }
    #[Title("Accueil")]
    public function render()
    {
        return view('livewire.acceuil')
            ->layout('template.app');
    }
}
