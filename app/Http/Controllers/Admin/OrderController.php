<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
	public function index()
	{
		$users = User::all();
		return view('admin.customer.index',compact('users'));
	}


	public function orderDetails($order_id)
	{
		
	}


}
