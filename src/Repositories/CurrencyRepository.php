<?php

namespace Ecoflow\Shop\Repositories;

use Ecoflow\Shop\Models\Currency;
use Ecoflow\Ecoflow\Repositories\BaseRepository;

class CurrencyRepository extends BaseRepository
{
    public function __construct()
    {
        parent::__construct(new Currency());
    }
}
