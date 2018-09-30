<?php

namespace App\Http\Controllers;
use App\Product;
use App\SubCategories;
use App\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Response;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    public function show()
    {
        return view('admin.product.create-product');
    }

    public function index()
    {
        $sub_categories = SubCategories::all()->toArray();
        return view('admin.product.create-product', compact('sub_categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /**
         * create new product
         */
        $product = $this->validate(request(), [
            'product_id' => 'required|string|max:255',
            'product_name' => 'required|string|max:255',
            'product_price' => 'required|numeric',
            'product_stock' => 'required|numeric',
            'product_desc' => 'required|string|max:255',
            'sub_id' => 'required|numeric'
        ]);
        Product::create($product);

        /**
         * update category
         */
        $sub_category = SubCategories::where('sub_id', $request->get('sub_id'))->first();
        $amount = $sub_category["sub_amount"] + 1;
        SubCategories::where('sub_id', $request->get('sub_id'))
            ->update(['sub_amount' => $amount]);

        return back()->with('success', 'product has been added');
    }
}