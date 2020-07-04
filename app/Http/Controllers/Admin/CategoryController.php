<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }
    public function create()
    {
        return view('admin.category.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'   => 'required|unique:categories,name,NULL,id,deleted_at,NULL',

        ]);
        $da['name'] = $request->name;
        Category::create($da);
        Session::flash('message', 'Category Added Sucessfully');
        Session::flash('alert-type', 'success');
        return redirect()->route('admin-category-index');
    }
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('category'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'   => 'required|unique:categories,name,' . $id . ',id,deleted_at,NULL',
        ]);
        $cat = Category::findOrFail($id);
        $cat->name = $request->name;
        $cat->save();
        Session::flash('message', 'Category update Sucessfully');
        Session::flash('alert-type', 'success');
        return redirect()->route('admin-category-index');
    }
    public function destroy($id)
    {
        $sub = Category::findOrFail($id);
        $sub->delete();
        Session::flash('message', 'Category Delete Sucessfully');
        Session::flash('alert-type', 'success');
        return redirect()->route('admin-category-index');
    }
}
