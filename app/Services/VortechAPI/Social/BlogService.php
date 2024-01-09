<?php

namespace App\Services\VortechAPI\Social;

use App\Services\VortechAPI\Api;

class BlogService extends Api
{

    public function all()
    {
        return $this->get('blog');
    }

    public function search(array $query)
    {
        $blogs = $this->all();
        $blogs = collect($blogs)->filter(function ($blog) use ($query) {
            foreach ($query as $field => $value) {
                return $blog->$field == $value;
            }
            return false;
        });
        return $blogs->values()->all();
    }

}
