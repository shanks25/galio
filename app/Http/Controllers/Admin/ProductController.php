<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\ProductImage;
use App\ProductMaster;
use App\SubCategory;
use App\UnitMaster;
use App\User;
use App\ProductKeyValue;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
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
        $user = User::orderBy('first_name', 'ASC')->get();
        return view('admin.product.create', compact('category', 'subcategory', 'units', 'user'));
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
            $da['user_id'] = $request->user_id; //Auth::user()->id;
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
            // product key values
            $pro_keys = $request->key;
            $pro_values = $request->val;
            $da_key['product_id'] = $product->id;
            foreach ($pro_keys as $key => $p_key) {
                $da_key['key_name'] = $p_key;
                $da_key['value_name'] = $pro_values[$key];
                ProductKeyValue::create($da_key);
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

        return response()->json(['subcats' => $subcats], 200);
    }
    public function edit($id)
    {
        $product = ProductMaster::with('images','keyValues')->where('id',$id)->first();
        $category = Category::all();
        $subcategory = SubCategory::where('category_id',$product->category)->get();
        $units = UnitMaster::all();
        $user = User::orderBy('first_name', 'ASC')->get();
        // return $user[1]->full_name;
        return view('admin.product.edit', compact('category', 'subcategory', 'units', 'user','product'));
    }
    public function update(Request $request)
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
            $id = $request->product_tbl_id;
            // return Auth::user();
            $da['user_id'] = $request->user_id; //Auth::user()->id;
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

            ProductMaster::where('id',$id)->update($da);
            
            // return $product;
            //////////////// store images multiple
            $storeImages = $request->file('image');
            $img_tbl_ids = $request->image_tbl_id;

            if (!empty($request->hasfile('image'))) {
                $supplerStoreImage = [
                    'product_id' => $id,
                ];
                // return $gallery_id;
                foreach ($storeImages as $key => $image) {
                    if (!empty($image)) {
                        $hoimageNames = uniqid() . '.' . $image->getClientOriginalExtension();
                        $path = $image->storeAs('public/gallery', $hoimageNames);
                        $supplerStoreImage['path'] = Storage::url($path);
                        if ($img_tbl_ids[$key] == 0) {
                            $image = ProductImage::create($supplerStoreImage);
                        } else {
                            $image = ProductImage::where('id', $img_tbl_ids[$key])->update($supplerStoreImage);
                        }
                        
                    }
                }
            }
            
            ////////delete images 
            $delete_ids = explode(',', $request->delete_images_ids);
            
            foreach ($delete_ids as $delete_id) {
                if ($delete_id != '') {
                    ProductImage::where('id',$delete_id)->delete();
                }
            }
            
            // product key values
            $pro_keys = $request->key;
            $pro_values = $request->val;
            $key_value_tbl_id = $request->key_value_tbl_id;
            // return $pro_values;
            // return 123;
            $da_key['product_id'] = $id;
            foreach ($pro_keys as $key => $p_key) {
                $da_key['key_name'] = $p_key;
                $da_key['value_name'] = $pro_values[$key];
               
                if ($key_value_tbl_id[$key] == 0) {
                    // $image = ProductImage::create($supplerStoreImage);
                    ProductKeyValue::create($da_key);
                } else {
                    ProductKeyValue::where('id', $key_value_tbl_id[$key])->update($da_key);
                }
            }
             ////////delete key values
             $delete_ids = explode(',', $request->delete_key_values_ids);
             foreach ($delete_ids as $delete_id) {
                 if ($delete_id != '') {
                    ProductKeyValue::where('id',$delete_id)->delete();
                 }
             }
            DB::commit();
            $message = array(
                'message' => 'Product Update Successfully',
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
    public function destroy($id)
    {

        $sub = ProductMaster::findOrFail($id);
        $sub->delete();
        $notification = array(
            'message' => 'Product Delete Successfully',
            'alert-type' => 'Unsuccess',
        );
        return redirect()->route('admin-product-index')->with($notification);
    }

    
}
