<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class AdminService
{
    /**
     * Get all products.
     */
    public function getAllProducts()
    {
        return Product::all();
    }

    /**
     * Create a new product.
     */
    public function createProduct(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'color' => 'required',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:png,jpg,jpeg|max:3000',
            'categorie_id' => 'required'
        ]);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $path = $request->file('image')->store('image', 'public');
            $filename = basename($path);
            $data['image'] = $filename;
        } else {
            // Handle the case where no image is uploaded
            $data['image'] = null;
        }

        try {
            Product::create($data);
            return ['success' => true, 'message' => 'Product created successfully.'];
        } catch (\Exception $e) {
            Log::error('Product creation failed: ' . $e->getMessage());
            return ['success' => false, 'message' => 'Something went wrong. Please try again later.'];
        }
    }

    /**
     * Get a specific product by ID.
     */
    public function getProductById($id)
    {
        return Product::findOrFail($id);
    }

    /**
     * Update the specified product.
     */
    public function updateProduct(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'color' => 'required',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:png,jpg,jpeg|max:3000',
            'categorie_id' => 'required'
        ]);

        $product = Product::findOrFail($id);

        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($product->image && Storage::exists('public/image/' . $product->image)) {
                Storage::delete('public/image/' . $product->image);
            }

            // Store new image and update the 'image' field
            $path = $request->file('image')->store('image', 'public');
            $data['image'] = basename($path);
        }

        try {
            $product->update($data);
            return ['success' => true, 'message' => 'Product updated successfully.'];
        } catch (\Exception $e) {
            Log::error('Product update failed: ' . $e->getMessage());
            return ['success' => false, 'message' => 'Something went wrong. Please try again later.'];
        }
    }

    /**
     * Delete a specific product.
     */
    public function deleteProduct($id)
    {
        $product = Product::findOrFail($id);

        try {
            // Delete the product's image if it exists
            if ($product->image && Storage::exists('public/image/' . $product->image)) {
                Storage::delete('public/image/' . $product->image);
            }

            $product->delete();
            return ['success' => true, 'message' => 'Product deleted successfully.'];
        } catch (\Exception $e) {
            Log::error('Product delete failed: ' . $e->getMessage());
            return ['success' => false, 'message' => 'Something went wrong. Please try again later.'];
        }
    }

    /**
     * Search for products by name or color.
     */
    public function searchProducts($query)
    {
        return Product::where('name', 'LIKE', '%' . $query . '%')
            ->orWhere('color', 'LIKE', '%' . $query . '%')
            ->get();
    }
}
