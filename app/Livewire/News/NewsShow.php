<?php

namespace App\Livewire\News;

use App\Services\VortechAPI\Social\BlogService;
use Livewire\Component;

class NewsShow extends Component
{
    public $year;
    public $month;
    public $slug;
    public $title = '';

    public function mount()
    {
        $api = new BlogService();
        $this->title = $api->info($this->slug)->title;
    }

    #[Title("Actualités")]
    public function render()
    {

        $api = new BlogService();
        return view('livewire.news.news-show', [
            "article" => $api->info($this->slug),
        ])
            ->layout('template.app', [
                'title' => $this->title,
            ]);
    }
}
