<?php

namespace App\Http\Controllers;
use App\Categories;
use App\SubCategories;
use Illuminate\Http\Request;

class SubCategoriesController extends Controller
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

    public function store(Request $request)
    {
        $sub_categories = $this->validate(request(), [
            'sub_cat_name' => 'required|string|max:255',
            'cat_id' => 'required|numeric'
        ]);
        SubCategories::create($sub_categories);


        $amount = $request->get('cat_sub') + 1;
        Categories::where('cat_id', $request->get('cat_id'))
            ->update(['cat_sub' => $amount]);

        return back()->with('success', 'หมวดสินค้าย่อยได้ถูกเพิ่มแล้ว');
    }

    public function edit($id)
    {
        $category = Categories::find($id);
        return view('admin.product.edit-category',compact('category','id'));
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
