<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
	public function index()
	{
		$all_order = Order::with('product')->orderBy('id', 'desc')->get();
		return view('admin.order.index', compact('all_order'));
	}


	public function view($id)
	{
		$order = Order::with('product', 'address')->where('id', $id)->first();
		// return $order;
		// return $user[1]->full_name;
		return view('admin.order.view', compact('order'));
	}
}
