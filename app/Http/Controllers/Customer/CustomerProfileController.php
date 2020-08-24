<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomerProfileController extends Controller
{
	public function index()
	{
		$user =	auth()->user();
		return view('customer.profile',compact('user'));
	}


	public function updateProfile(Request $request)
	{

		auth()->user()->update($request->all());
		return back()->with('success','Profile updated successfully');
	}

	public function changePassword(Request $request)
	{ 
		$user = Auth::user();
		if (Hash::check($request->oldpassword, $user->password)) {

			$user->password = Hash::make($request->newpassword);
			$user->save();
			return response()->json(['status' => 1]);
		} else {
			return response()->json(['status' => 0, 'msg' => 'Invalid Current password']);
		}
	}
}
