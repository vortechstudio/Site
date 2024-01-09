<?php

namespace App\Livewire\Product;

use App\Services\VortechAPI\Service;
use App\Services\VortechAPI\Social\BlogService;
use Livewire\Component;

class ProductShow extends Component
{
    public int $id;
    public string $title = '';
    public $current = 'product.service-general';
    public $components = [
        'product.service-general',
        'product.service-news',
        'product.service-updates'
    ];

    public function call(string $components)
    {
        $this->current = $components;
    }

    public function render()
    {
        $api = new Service();
        $blogS = new BlogService();
        $this->title = $api->info($this->id)->name;
        return view('livewire.product.product-show', [
            "article" => $api->info($this->id),
            "articles" => collect($blogS->search(["published" => true]))
                ->where('category', 'LIKE', "%".\Str::slug($api->info($this->id)->cercle_reference)."%")
        ])
            ->layout('template.app', [
                'title' => $this->title,
            ]);
    }
}
