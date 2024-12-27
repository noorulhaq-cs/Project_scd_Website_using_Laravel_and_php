<?php

namespace App\Http\Controllers\Api;

use App\Services\AdminService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminApiController extends Controller
{
    protected $adminService;

    public function __construct(AdminService $adminService)
    {
        $this->adminService = $adminService;
    }

    /**
     * Get all products.
     */
    public function index()
    {
        $products = $this->adminService->getAllProducts();
        return response()->json([
            'success' => true,
            'data' => $products
        ]);
    }

    /**
     * Create a new product.
     */
    public function store(Request $request)
    {
        $response = $this->adminService->createProduct($request);

        if ($response['success']) {
            return response()->json([
                'success' => true,
                'message' => $response['message']
            ], 201);
        }

        return response()->json([
            'success' => false,
            'message' => $response['message']
        ], 400);
    }

    /**
     * Get product details.
     */
    public function show($id)
    {
        $product = $this->adminService->getProductById($id);
        
        if ($product) {
            return response()->json([
                'success' => true,
                'data' => $product
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Product not found'
        ], 404);
    }

    /**
     * Update the product.
     */
    public function update(Request $request, $id)
    {
        $response = $this->adminService->updateProduct($request, $id);

        if ($response['success']) {
            return response()->json([
                'success' => true,
                'message' => $response['message']
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => $response['message']
        ], 400);
    }

    /**
     * Delete the product.
     */
    public function destroy($id)
    {
        $response = $this->adminService->deleteProduct($id);

        if ($response['success']) {
            return response()->json([
                'success' => true,
                'message' => $response['message']
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => $response['message']
        ], 400);
    }

    /**
     * Search for products.
     */
    public function search(Request $request)
    {
        $query = $request->get('query');
        $products = $this->adminService->searchProducts($query);

        return response()->json([
            'success' => true,
            'data' => $products
        ]);
    }

}