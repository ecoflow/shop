<?php

namespace Ecoflow\Shop\Controllers\Category;

use App\Http\Controllers\Controller;
use Ecoflow\Shop\Requests\CategoryStoreRequest;
use Ecoflow\Shop\Requests\CategoryUpdateRequest;
use Ecoflow\Shop\Repositories\CategoryRepository;

class CategoryController extends Controller
{
    /**
     * User repository
     *
     * @var CategoryRepository
     */
    protected CategoryRepository $repository;

    /**
     * __construct
     *
     * @return void
     */
    public function __construct(CategoryRepository $repository)
    {
        $this->repository = $repository;
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
     * @param array $attributes
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CategoryStoreRequest $request): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $this->repository->create($request->all()),
        ]);
    }

    /**
     * Update a record
     *
     * @param CategoryUpdateRequest $request
     * @param integer $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(CategoryUpdateRequest $request, $id): \Illuminate\Http\JsonResponse
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
