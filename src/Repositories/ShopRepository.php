<?php

namespace Ecoflow\Shop\Repositories;

use Ecoflow\Shop\Models\Shop;
use Ecoflow\Core\Repositories\BaseRepository;

class ShopRepository extends BaseRepository
{
    public function __construct()
    {
        parent::__construct(new Shop());
    }
}
