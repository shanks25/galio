<?php

namespace App\Http\Controllers\Customer;

use App\AddressMaster;
use App\Http\Controllers\Controller;
use App\Order;
use App\ProductMaster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function addOrder(Request $request)
    {
        try {
            DB::beginTransaction();
            $product_id = $request->hidden_product_id;
            $product = ProductMaster::find($product_id);
            // return $product;
            $qty = $request->hidden_qty;
            $da['customer_id'] = Auth::id();
            $da['seller_id'] = $product->user_id;
            $da['product_id'] = $product_id;
            $da['qty'] = $qty;
            $da['product_type'] = $product->product_type;
            $da['note'] = $product->ordernote;
            $da['status_id'] = 0;
            // calculation part 
            $da['price'] = $product->price;
            $amount = round($product->price * $qty, 2);
            $da['discount_type'] = $product->discount_type;
            $da['discount_rate'] = $product->discount_rate;
            if ($product->discount_type == 1) { // for %
                $discount_amount = $da['discount_rate'] / 100 * $amount;
            } else {
                $discount_amount = $da['discount_rate'];
            }
            $da['discount_amount'] = $discount_amount;
            $da['final_amount'] = round($amount - $discount_amount, 2);
            $order = Order::create($da);
            // address store start 
            $da_address['country_id'] = $request->country;
            $da_address['state_id'] = $request->state;
            $da_address['city_id'] = $request->city;
            $da_address['address'] = $request->street_address;
            $da_address['postcode'] = $request->postcode;
            $da_address['phone'] = $request->phone;
            $da_address['user_id'] = Auth::id();
            $da_address['order_id'] = $order->id;
            $address = AddressMaster::create($da_address);
            DB::commit();
            $message = array(
                'message'       => 'New order Added Successfully',
                'alert-type'    => 'success',
                'title'         => 'Partner',
            );
            return redirect()->route('user-home')->with($message);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
