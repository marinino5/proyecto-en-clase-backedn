<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')
            ->whereIn('id', function ($query) {
                $query->selectRaw('MAX(id)')
                    ->from('products')
                    ->groupBy('name');
            })
            ->latest()
            ->paginate(10);

        return view('product.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('product.create', compact('categories'));
    }

    public function store(ProductRequest $request)
    {
        Product::create($request->validated());

        return redirect()
            ->route('products.index')
            ->with('success', 'Producto creado correctamente.');
    }

    public function show(string $idProduct)
    {
        $product = Product::with('category')->findOrFail($idProduct);

        return view('product.show', compact('product'));
    }

    public function edit(string $idProduct)
    {
        $product = Product::findOrFail($idProduct);
        $categories = Category::all();

        return view('product.edit', compact('product', 'categories'));
    }

    public function update(ProductRequest $request, string $idProduct)
    {
        $product = Product::findOrFail($idProduct);

        $product->update($request->validated());

        return redirect()
            ->route('products.index')
            ->with('success', 'Producto actualizado correctamente.');
    }

    public function destroy(string $idProduct)
    {
        $product = Product::findOrFail($idProduct);

        $product->delete();

        return redirect()
            ->route('products.index')
            ->with('success', 'Producto eliminado correctamente.');
    }
}