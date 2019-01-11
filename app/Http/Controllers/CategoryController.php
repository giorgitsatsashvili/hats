<?php

namespace App\Http\Controllers;

use App\Category;

class CategoryController extends Controller
{
    public function getProductByCategory($id)
    {
        /** @var Category $categories */
        $categories = Category::orderBy('order', 'ASC')->get();

        /** @var Category $data */
        $category = Category::with(['product'])->find($id);
        return view('pages/cat')
            ->with ('categories',$categories)
            ->with('products', $category->product );
    }
}

