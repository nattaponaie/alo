<?php

namespace App\Http\Controllers;
use App\Categories;
use App\SubCategories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function show()
    {
        return view('admin.product.create-category');
    }

    public function index()
    {
        $categories = Categories::all()->toArray();
        $sub_categories = SubCategories::all()->toArray();
        return view('admin.product.create-category', compact('categories'), compact('sub_categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categories = $this->validate(request(), [
            'cat_name' => 'required|string|max:255',
        ]);
        Categories::create($categories);
        return back()->with('success', 'หมวดสินค้าถูกเพิ่มแล้ว');
    }

    public function edit($id)
    {
        $category = Categories::find($id);
        return view('admin.product.edit-category',compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Categories::find($id);
        $this->validate(request(), [
            'cat_name' => 'required'
        ]);
        $category->cat_name = $request->get('cat_name');
        $category->save();
        return back()->with('success','แก้ไขหมวดสำเร็จ');
    }
}
