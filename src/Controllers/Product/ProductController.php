<?php

namespace Ecoflow\Shop\Controllers\Product;

use Illuminate\Http\Request;
use Ecoflow\Shop\Models\Product;
use App\Http\Controllers\Controller;
use Ecoflow\Shop\Requests\ProductRequest;
use Ecoflow\Shop\Requests\ProductStoreRequest;
use Ecoflow\Shop\Requests\ProductUpdateRequest;
use Ecoflow\Shop\Repositories\ProductRepository;

class ProductController extends Controller
{
    /**
     * Product Repository
     *
     * @var ProductRepository
     */
    protected ProductRepository $repository;

    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->repository = new ProductRepository();
    }

    /**
     * Return all records
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $this->repository->all(),
        ]);
    }

    /**
     * Show a record
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $this->repository->find($id),
        ]);
    }

    /**
     * Store a record in db
     *
     * @param ProductStoreRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(ProductStoreRequest $request): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $this->repository->create($request->all()),
        ]);
    }

    /**
     * Update a record
     *
     * @param ProductUpdateRequest $request
     * @param integer $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(ProductUpdateRequest $request, $id): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $this->repository->modify($id, $request->all()),
        ]);
    }

    /**
     * Delete a record
     *
     * @param string $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(string $id): \Illuminate\Http\JsonResponse
    {
        $deleted = $this->repository->delete($id);
        return response()->json([
            'success' => $deleted ? true : false,
            'data' => $deleted ? true : false,
        ]);
    }
}
