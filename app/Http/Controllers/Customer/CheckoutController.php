<?php

namespace App\Http\Controllers\Customer;

use App\City;
use App\Http\Controllers\Controller;
use App\ProductMaster;
use App\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index($id, $qty)
    {
        // return $request->product_id;
        $product =  ProductMaster::where('id', $id)->first();
        $states = State::all();
        $city = City::all();
        // return $product;
        return view('customer.product.checkout', compact('product', 'qty', 'states', 'city'));
        // $product_id = $request->id;
        // $latestProduct = ProductMaster::with('productImages')->where('id', $p    roduct_id)->first();
        // $view = view('customer.product.quick_view', compact('latestProduct'))->render();
        // return response()->json(['html' => $view]);
    }
    public function cities($id)
    {
        // return $id;
        // $id = $_GET['id'];
        $city = City::where('state_id', '=', $id)->get();

        return response()->json(['city' => $city], 200);
    }
    public function checkLogin()
    {
        if (Auth::id()) {
            return 1;
        } else {
            return 0;
        }
    }
}
