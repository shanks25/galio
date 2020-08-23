<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\ProductImage;
use App\ProductMaster;
use App\SubCategory;
use App\UnitMaster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $subscription = ProductMaster::orderBy('id', 'DESC')->get();
        return view('admin.product.index', compact('subscription'));
    }
    public function create()
    {
        $category = Category::all();
        $subcategory = SubCategory::all();
        $units = UnitMaster::all();
        return view('admin.product.create', compact('category', 'subcategory', 'units'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'category' => 'required',
            'sub_category' => 'required',
            'unit' => 'required',
            'description' => 'required',
            'price' => 'required',
            'discount_type' => 'required',

        ]);
        try {
            DB::beginTransaction();
            // return Auth::user();
            $da['user_id'] = 1;//Auth::user()->id;
            $da['title'] = $request->title;
            $da['product_type'] = $request->registration_number;
            $da['category'] = $request->category;
            $da['sub_category'] = $request->sub_category;
            $da['unit'] = $request->unit;
            $da['description'] = $request->description;
            $da['price'] = $request->price; //$request->warehouse_name;
            $da['discount_type'] = $request->discount_type;
            $da['discount_rate'] = $request->discount_price;
            $da['selling_price'] = $request->price;
            $da['product_type'] = 1;
            
            $product = ProductMaster::create($da);
            // return $product;
            //////////////// store images multiple
            $storeImages = $request->file('image');

            if (!empty($request->hasfile('image'))) {
                $supplerStoreImage = [
                    'product_id' => $product->id,
                ];
                // return $gallery_id;
                foreach ($storeImages as $key => $image) {
                    if (!empty($image)) {
                        $hoimageNames = uniqid() . '.' . $image->getClientOriginalExtension();
                        $path = $image->storeAs('public/gallery', $hoimageNames);
                        $supplerStoreImage['path'] = Storage::url($path);
                        $image = ProductImage::create($supplerStoreImage);
                    }
                }
            }

            DB::commit();
            $message = array(
                'message' => 'Product Added Successfully',
                'alert-type' => 'success',
                'title' => 'Partner',
            );
            return redirect()->route('admin-product-index')->with($message);
        } catch (\Exception $e) {
            return $e->getMessage();
            DB::rollback();
            $notification = array(
                'message' => 'Oops! Something went wrong',
                'alert-type' => 'Unsuccess',
            );
            return redirect()->route('admin-product-index')->with($notification);
        }
    }
    public function subcats($id)
    {
        // return $id;
        // $id = $_GET['id'];
        $subcats = Subcategory::where('category_id', '=', $id)->where('status', 1)->get();

        return response()->json(['subcats' => $subcats],200);
    }
}
