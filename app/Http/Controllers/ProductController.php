<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Review;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('index', ['products' => $products]);
    }

    public function show($id) {
        $product = Product::findOrFail($id);
        return view('product', ['product' => $product]);
    }

    public function saveReview(Request $request, $id) {
        $reviewData = $request->validate([
            'author' => 'required',
            'message' => 'required',
            'rating' => 'required|numeric|max:1'
        ]);
        
        $product = Product::findOrFail($id);
        
        $review = new Review();
        $review->fill($reviewData);

        $product->reviews()->save($review);

        return redirect()->route('product.show', ['id' => $id]);
    }
}
