<?php

namespace App\Http\Controllers;

use App\Services\AdminService;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    protected $adminService;

    public function __construct(AdminService $adminService)
    {
        $this->adminService = $adminService;
    }

    // Display a listing of the resource.
    public function index()
    {
        $products = $this->adminService->getAllProducts();
        return view('admin.index', compact('products'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('admin.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $response = $this->adminService->createProduct($request);

        if ($response['success']) {
            return redirect()->route('admin.index')->with('success', $response['message']);
        }

        return redirect()->back()->with('error', $response['message']);
    }

    // Display the specified resource.
    public function show($id)
    {
        $product = $this->adminService->getProductById($id);
        return view('admin.show', compact('product'));
    }

    // Show the form for editing the specified resource.
    public function edit($id)
    {
        $product = $this->adminService->getProductById($id);
        return view('admin.edit', compact('product'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $response = $this->adminService->updateProduct($request, $id);

        if ($response['success']) {
            return redirect()->route('admin.index')->with('success', $response['message']);
        }

        return redirect()->back()->with('error', $response['message']);
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        $response = $this->adminService->deleteProduct($id);

        if ($response['success']) {
            return redirect()->route('admin.index')->with('success', $response['message']);
        }

        return redirect()->back()->with('error', $response['message']);
    }

    // Search for products.
    public function search(Request $request)
    {
        $query = $request->get('query');
        $products = $this->adminService->searchProducts($query);
        return view('admin.search_result', compact('products'));
    }
}
