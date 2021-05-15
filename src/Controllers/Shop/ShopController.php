<?php

namespace Ecoflow\Shop\Controllers\Shop;

use Ecoflow\Shop\Models\Shop;
use App\Http\Controllers\Controller;
use Ecoflow\Shop\Requests\ShopStoreRequest;
use Ecoflow\Shop\Requests\ShopUpdateRequest;
use Ecoflow\Shop\Repositories\ShopRepository;

class ShopController extends Controller
{
    /**
     * Shop repository
     *
     * @var ShopRepository
     */
    protected ShopRepository $repository;

    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->repository = new ShopRepository();
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
     * create
     *
     * @param array $attributes
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(ShopStoreRequest $request): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $this->repository->create($request->all()),
        ]);
    }

    /**
     * update
     *
     * @param ShopUpdateRequest $request
     * @param integer $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(ShopUpdateRequest $request, $id): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $this->repository->modify($id, $request->all()),
        ]);
    }

    /**
     * delete
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
