<?php

namespace Ecoflow\Shop\Repositories;

use Ecoflow\Shop\Models\Category;
use Ecoflow\Ecoflow\Repositories\BaseRepository;

class CategoryRepository extends BaseRepository
{
    public function __construct()
    {
        parent::__construct(new Category());
    }
}
