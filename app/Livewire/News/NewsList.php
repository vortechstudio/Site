<?php

namespace App\Livewire\News;

use App\Services\VortechAPI\Social\BlogService;
use Livewire\Attributes\Title;
use Livewire\Component;

class NewsList extends Component
{
    public $blogsI;
    public $limit = 4;

    public function mount()
    {
        $api = new BlogService();
        $this->blogsI = collect($api->search([
            "published" => true,
        ]));

        //dd($this->blogs);
    }
    #[Title("Actualités")]
    public function render()
    {
        return view('livewire.news.news-list', [
            'blogs' => $this->blogsI->take($this->limit)
        ])
            ->layout('template.app');
    }

    public function loadMore()
    {
        $this->limit += 4;
    }
}
