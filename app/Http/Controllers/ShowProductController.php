<?php

namespace App\Http\Controllers;
use App\Categories;
use App\SubCategories;
use App\Product;
use DB;
use Illuminate\Http\Request;

class ShowProductController extends Controller
{
    public function index()
    {

    }

    public function show($sub_id)
    {
        $all_products = Product::where('sub_id', $sub_id)->get();
        $sub_categories = SubCategories::where('sub_id', $sub_id)->first();
        return view('pages.product-category', compact('all_products'), compact('sub_categories'));
    }

    public function showProduct($id)
    {
        $product = Product::where('product_id', $id)->first();
        $sub_category = SubCategories::where('sub_id', $product["sub_id"])->first();
        return view('pages.single-product', compact('product'), compact('sub_category'));
    }
}
