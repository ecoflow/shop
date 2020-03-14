<?php

namespace Ecoflow\Shop\Repositories;

use Ecoflow\Shop\Models\Category;
use Ecoflow\Core\Repositories\BaseRepository;

class CategoryRepository extends BaseRepository
{
    public function __construct()
    {
        parent::__construct(new Category());
    }
}
