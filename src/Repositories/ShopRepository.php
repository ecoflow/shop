<?php

namespace Ecoflow\Shop\Repositories;

use Ecoflow\Shop\Models\Shop;
use Ecoflow\Ecoflow\Repositories\BaseRepository;

class ShopRepository extends BaseRepository
{
    public function __construct()
    {
        parent::__construct(new Shop());
    }
}
