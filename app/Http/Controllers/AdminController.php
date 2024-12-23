<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $products = Product::all();
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
        $data = $request->validate([
            'name' => 'required',
            'color' => 'required',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:png,jpg,jpeg|max:3000',
            'categorie_id' => 'required'
        ]);

        
        $path = $request->file('image')->store('image','public');
        $filename = basename($path);
        $data['image'] = $filename;
        
        Product::create($data);
        return redirect()->route('admin.index')->with('success', 'Product created successfully.');
    }

    // Display the specified resource.
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.show', compact('product'));
    }

    // Show the form for editing the specified resource.
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.edit', compact('product'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
{
    // Validate the incoming request
    $data = $request->validate([
        'name' => 'required',
        'color' => 'required',
        'price' => 'required|numeric',
        'image' => 'nullable|image|mimes:png,jpg,jpeg|max:3000',
        'categorie_id' => 'required'
    ]);

    // Find the product or fail
    $product = Product::findOrFail($id);

    // Check and handle image upload
    if ($request->hasFile('image')) {
        // Delete old image if it exists
        if ($product->image && file_exists(storage_path('app/public/image/' . $product->image))) {
            unlink(storage_path('app/public/image/' . $product->image));
        }

        // Store new image and update the 'image' field
        $path = $request->file('image')->store('image', 'public');
        $data['image'] = basename($path);
    }

    // Update the product with validated data
    $product->update($data);

    // Redirect with success message
    return redirect()->route('admin.index')->with('success', 'Product updated successfully.');
}


    // Remove the specified resource from storage.
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('admin.index')->with('success', 'Product deleted successfully.');
    }

    public function search(Request $request)
    {
        $query = $request->get('query');
        $products = Product::where('name', 'LIKE', '%' . $query . '%')
            ->orWhere('color', 'LIKE', '%' . $query . '%')
            ->get();
    
        if ($request->ajax()) {
            return view('products.search_result', compact('products'))->render(); // Render the filtered products dynamically
        }
    
        // If not an AJAX request, return the full search page (for direct search)
        return view('frontend.products.search-results', compact('products'));
    }
    
    

}
