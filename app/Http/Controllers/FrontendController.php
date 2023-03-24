<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        $products = Product::all();
        $categoriesList = Category::getTreeHP();
        $categories = Category::all();
        $data = ['brands' => $brands, 'products' => $products, 'categoriesList' => $categoriesList, 'categories' => $categories];

        return view('frontend.index')->with($data);
    }

    public function productview($id)
    {
        $products = Product::FindorFail($id);
        $categoriesList = Category::getTreeHP();
        $data = ['products' => $products, 'categoriesList' => $categoriesList];

        return view('frontend.productview')->with($data);
    }
    public function categoryview($category_id)
    {

        $products = Product::FindorFail($category_id);
        $categoriesList = Category::getTreeHP();
        $data = ['products' => $products, 'categoriesList' => $categoriesList];

        return view('frontend.categoryview')->with($data);
    }
}
