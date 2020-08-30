<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(Request $request)
    {
        return view('customer.product.checkout');
        // $product_id = $request->id;
        // $latestProduct = ProductMaster::with('productImages')->where('id', $p    roduct_id)->first();
        // $view = view('customer.product.quick_view', compact('latestProduct'))->render();
        // return response()->json(['html' => $view]);
    }
}
