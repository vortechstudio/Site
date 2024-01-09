<?php

namespace App\Livewire\Product;

use App\Services\VortechAPI\Service;
use Livewire\Component;

class ProductList extends Component
{
    public $serviceI;
    public $limit = 4;

    public function mount()
    {
        $api = new Service();
        $this->serviceI = collect($api->all());
    }
    #[Title("Nos Produits")]
    public function render()
    {
        return view('livewire.product.product-list', [
            "services" => $this->serviceI->take($this->limit)
        ])
            ->layout('template.app', [
                "title" => "Nos Produits"
            ]);
    }

    public function loadMore()
    {
        $this->limit += 4;
    }
}
