<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SubCategoryController extends Controller
{
    public function index()
    {
        $categories = SubCategory::all();
        return view('admin.subcategory.index', compact('categories'));
    }
    public function create()
    {
        $category = Category::orderBy('name', 'ASC')->get();
        return view('admin.subcategory.create', compact('category'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'category' => 'required',
            'name'   => 'required|unique:sub_categories,name,NULL,id,deleted_at,NULL',

        ]);
        $da['category_id'] = $request->category;
        $da['name'] = $request->name;
        SubCategory::create($da);
        Session::flash('message', 'Sub Category Added Sucessfully');
        Session::flash('alert-type', 'success');
        return redirect()->route('admin-subcategory-index');
    }
    public function edit($id)
    {
        $category = Category::orderBy('name', 'ASC')->get();
        $subcategory = SubCategory::findOrFail($id);
        return view('admin.subcategory.edit', compact('category','subcategory'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'category' => 'required',
            'name'   => 'required|unique:sub_categories,name,' . $id . ',id,deleted_at,NULL',
        ]);
        $cat = SubCategory::findOrFail($id);
        $cat->name = $request->name;
        $cat->category_id = $request->category;
        
        $cat->save();
        Session::flash('message', 'Sub Category update Sucessfully');
        Session::flash('alert-type', 'success');
        return redirect()->route('admin-subcategory-index');
    }
    public function destroy($id)
    {
        $sub = SubCategory::findOrFail($id);
        $sub->delete();
        Session::flash('message', 'Sub Category Delete Sucessfully');
        Session::flash('alert-type', 'success');
        return redirect()->route('admin-subcategory-index');
    }
}
