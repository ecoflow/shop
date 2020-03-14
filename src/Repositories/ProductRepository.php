<?php

namespace Ecoflow\Shop\Repositories;

use Ecoflow\Shop\Models\Product;
use Ecoflow\Core\Repositories\BaseRepository;

class ProductRepository extends BaseRepository
{
    public function __construct()
    {
        parent::__construct(new Product());
    }
}
