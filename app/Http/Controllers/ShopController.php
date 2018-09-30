<?php

namespace App\Http\Controllers;
use App\Categories;
use App\SubCategories;
use App\Product;
use DB;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $categories = Categories::all()->toArray();
        $sub_categories = SubCategories::all()->toArray();

        return view('pages.shop', compact('categories'), compact('sub_categories'));
//        return back()->with($categories,$sub_categories);
    }
}
