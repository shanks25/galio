<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\ProductMaster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index($id)
    {
        $product = ProductMaster::with('productImages')->where('category', $id)->paginate(8);
        $category_count = ProductMaster::select(DB::raw('count("id") as category_count'), 'category')->groupBy('category')->get()->toArray(); //select('name', 'category')->get();
        $total_product = array_column($category_count, 'category_count', 'category');
        return view('customer.category.listing', compact('product', 'total_product'));
    }
    public function subCategory($id, $subid)
    {
        $product = ProductMaster::with('productImages')->where('sub_category', $subid)->paginate(8);
        $category_count = ProductMaster::select(DB::raw('count("id") as category_count'), 'category')->groupBy('category')->get()->toArray();
        $total_product = array_column($category_count, 'category_count', 'category');
        return view('customer.category.listing', compact('product', 'total_product'));
    }
}
