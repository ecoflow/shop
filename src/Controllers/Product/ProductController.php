<?php

namespace Ecoflow\Shop\Controllers\Product;

use Ecoflow\Shop\Models\Product;
use App\Http\Controllers\Controller;
use Ecoflow\Shop\Repositories\ProductRepository;

class ProductController extends Controller
{
    /**
     * Product Repository
     *
     * @var ProductRepository
     */
    protected ProductRepository $product;

    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->product = new ProductRepository();
    }

    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        return $this->product->all();
    }

    /**
     * show
     *
     * @param mixed $match
     * @return Product
     */
    public function show($match): Product
    {
        return $this->product->find($match);
    }

    /**
     * create
     *
     * @param array $attributes
     * @return Product
     */
    public function create(array $attributes): Product
    {
        return $this->product->create($attributes);
    }

    /**
     * delete
     *
     * @param string $id
     * @return bool
     */
    public function delete(string $id): bool
    {
        return $this->product->delete($id);
    }
}
