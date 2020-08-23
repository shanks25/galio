<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\ProductMaster;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //for quick view
    public function quick_view(Request $request)
	{
        $product_id  =$request->id; 
        $latestProduct=ProductMaster::with('productImages')->where('id',$product_id)->first();
        $view = view('customer.product.quick_view', compact('latestProduct'))->render();
				return response()->json(['html' => $view]);
        

		
	}
}
