<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class LeadController extends Controller
{
	public function index()
	{
		// return User::with('city')->get();
		  $users = User::has('sellOrders')->withCount('sellOrders')->where('is_subscribed',0)->get();
		return view('admin.leads.index',compact('users')) ;
	}
}
// sell_orders_count