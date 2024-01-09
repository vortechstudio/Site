<?php

namespace App\Services\VortechAPI;

use App\Services\VortechAPI\Api;

class Service extends Api
{

    public function all()
    {
        return $this->get('services');
    }
}
