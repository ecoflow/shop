<?php

namespace Ecoflow\Shop\Controllers\Currency;

use App\Http\Controllers\Controller;
use Ecoflow\Shop\Models\Currency;
use Ecoflow\Shop\Repositories\CurrencyRepository;

class CurrencyController extends Controller
{
    /**
     * Currency Repository
     *
     * @var undefined
     */
    protected $currency;

    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->currency = new CurrencyRepository();
    }

    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        return $this->currency->all();
    }

    /**
     * show
     *
     * @param mixed $match
     * @return Currency
     */
    public function show($match): Currency
    {
        return $this->currency->find($match);
    }

    /**
     * create
     *
     * @param array $attributes
     * @return Currency
     */
    public function create(array $attributes): Currency
    {
        return $this->currency->create($attributes);
    }

    /**
     * delete
     *
     * @param string $id
     * @return bool
     */
    public function delete(string $id): bool
    {
        return $this->currency->delete($id);
    }
}
