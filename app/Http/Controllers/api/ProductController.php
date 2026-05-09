<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|integer'
        ]);

        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price
        ]);

        return response()->json($product);
    }

    public function index()
    {
        return Product::all();
    }

    // ADMIN ONLY
    public function destroy($id)
    {
        if (auth()->user()->role !== 'admin') {

            return response()->json([
                'message' => 'Forbidden'
            ], 403);
        }

        Product::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Deleted'
        ]);
    }
}