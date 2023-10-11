<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
    // Validate the incoming data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric|min:0',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Optional: Validate image upload
    ]);

    // Create a new Product instance with the validated data
    $product = new Product([
        'name' => $validatedData['name'],
        'description' => $validatedData['description'],
        'price' => $validatedData['price'],
    ]);

    // Handle image upload (if provided)
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('products'); // Store the image in the 'products' directory
        $product->image = $imagePath;
    }

    // Save the product to the database
    $product->save();

    // Redirect to the product list page with a success message
    return redirect()->route('products.index')->with('success', 'Product created successfully');
    }


    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        // Validate the incoming data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Optional: Validate image upload
        ]);

        // Update the product attributes with the validated data
        $product->name = $validatedData['name'];
        $product->description = $validatedData['description'];
        $product->price = $validatedData['price'];

        // Handle image update (if provided)
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products'); // Store the updated image in the 'products' directory
            $product->image = $imagePath;
        }

        // Save the updated product to the database
        $product->save();

        // Redirect to the product list page with a success message
        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }

    public function destroy(Product $product)
    {
        // Delete the product from the database
        $product->delete();

        // Redirect to the product list page with a success message
        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }

}
