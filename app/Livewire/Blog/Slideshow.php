<?php

namespace App\Livewire\Blog;

use App\Services\VortechAPI\Social\BlogService;
use Livewire\Component;

class Slideshow extends Component
{
    public $blogs;

    public function mount()
    {
        $api = new BlogService();
        $this->blogs = collect($api->search(['promote' => true, "published" => true]))->take(5);
    }

    public function render()
    {
        return view('livewire.blog.slideshow');
    }
}
