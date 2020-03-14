<?php

namespace Ecoflow\Shop\Controllers\Shop;

use Ecoflow\Shop\Models\Shop;
use App\Http\Controllers\Controller;
use Ecoflow\Shop\Repositories\ShopRepository;
use Ecoflow\Shop\Requests\ShopStoreRequest;

class ShopController extends Controller
{
    /**
     * Shop repository
     *
     * @var ShopRepository
     */
    protected ShopRepository $shop;

    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->shop = new ShopRepository();
    }

    /**
     * Get all Shop records
     *
     * @return void
     */
    public function index()
    {
        return $this->shop->all();
    }

    /**
     * Get specific Shop records
     *
     * @param mixed $match
     * @return void
     */
    public function show($match): Shop
    {
        return $this->shop->find($match);
    }

    /**
     * Create a Shop record
     *
     * @param ShopStoreRequest $request
     * @return Shop
     */
    public function create(ShopStoreRequest $request): Shop
    {
        return $this->shop->create($request->validate());
    }

    /**
     * delete
     *
     * @param string $id
     * @return bool
     */
    public function delete(string $id): bool
    {
        return $this->shop->delete($id);
    }
}
