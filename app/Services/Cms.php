<?php

namespace App\Services;

use App\Services\VortechAPI\Api;

class Cms extends Api
{

    public function all()
    {
        return $this->get('pages');
    }

    public function search($query)
    {
        $pages = $this->all();
        $pages = collect($pages);

        foreach ($query as $field => $value) {
            $pages = $pages->where($field, $value);
        }

        return $pages;
    }
}
