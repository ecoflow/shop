<?php

namespace Ecoflow\Shop\Controllers\Category;

use Ecoflow\Shop\Models\Category;
use App\Http\Controllers\Controller;
use Ecoflow\Shop\Repositories\CategoryRepository;

class CategoryController extends Controller
{
    /**
     * Category repository
     *
     * @var ShopRepository
     */
    protected CategoryRepository $category;

    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->category = new CategoryRepository();
    }

    /**
     * Return all records
     *
     * @return void
     */
    public function index()
    {
        return $this->category->all();
    }

    /**
     * Show a record
     *
     * @param mixed $match
     * @return Category
     */
    public function show($match): Category
    {
        return $this->category->find($match);
    }

    /**
     * create
     *
     * @param array $attributes
     * @return Category
     */
    public function create(array $attributes): Category
    {
        return $this->category->create($attributes);
    }

    /**
     * delete
     *
     * @param string $id
     * @return bool
     */
    public function delete(string $id): bool
    {
        return $this->category->delete($id);
    }
}
