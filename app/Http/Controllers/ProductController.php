<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'DESC')->where('quantity', '!=', 0)->take(6)->get();
        $categories = Category::orderBy('order', 'ASC')->get();

        return view("pages/index")
            ->with("products", $products->take(2))
            ->with("products2", $products)
            ->with("categories", $categories);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        /** @var Product $product */
        $product = Product::find($id);
        $categories = Category::orderBy('order', 'ASC')->get();
        return view("pages/show")
            ->with("product", $product)
            ->with("categories", $categories);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
