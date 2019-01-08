<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $products = Product::Search($request->search)->get();
        $categories = Category::orderBy('order', 'ASC')->get();
        return view('pages/search')
            ->with('products', $products)
            ->with("categories", $categories);


    }
}
