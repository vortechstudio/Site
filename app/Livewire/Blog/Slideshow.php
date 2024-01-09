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
        $this->blogs = $api->search(['promote' => true, "published" => true]);
    }

    public function render()
    {
        return view('livewire.blog.slideshow');
    }
}
