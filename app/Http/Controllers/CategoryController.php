<?php

namespace App\Http\Controllers;

use App\Category;

class CategoryController extends Controller
{
    public function getProductByCategory($id)
    {
        /** @var Category $Category */
        $data = Category::with(['product'])->findorfail($id);
        return view('cat')->with('data', $data);
    }
}
