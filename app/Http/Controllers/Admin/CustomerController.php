<?php

namespace App\Http\Controllers\Admin;

use App\City;
use App\Http\Controllers\Controller;
use App\State;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
	public function index()
	{
		$users = User::all();
		return view('admin.customer.index',compact('users'));
	}


	public function create()
	{
		$states = State::all();
		return view('admin.customer.create',compact('states'));
	}


	public function store(Request $request)
	{


		$this->validate($request,[
			'first_name' =>'required',	
			'last_name' =>'required',	
			'email' =>'required|email|unique:users',	
			'mobile_no' =>'required|digits:10|unique:users',	
			'address' =>'required',	
			'pincode' =>'required|digits:6',	
			'state_id' =>'required',	
			'city_id' =>'required',	
			'password' =>'required',	
			'gender' =>'required',	

		]);

		$user =  new User ;
		$user->role = $request->role;
		$user->first_name = $request->first_name;
		$user->last_name = $request->last_name;
		$user->email = $request->email;
		$user->mobile_no = $request->mobile_no;
		$user->city_id = $request->city_id;
		$user->state_id = $request->state_id;
		$user->city_id = $request->city_id;
		$user->address = $request->address;
		$user->pincode = $request->pincode;
		$user->gender = $request->gender;

		$user->password = Hash::make($request->password); 

		if ($request->hasFile('profile_pic')) 
		{
			
			$image = $request->file('profile_pic');
			$imagename=uniqid().'.'.$image->getClientOriginalExtension();
			$image->move(public_path('profiles'),$imagename); 

				$user->profile_pic = $imagename;

			}



			if ($request->filled('company_name')) {
				$user->company_name = $request->company_name;
			}

			if ($request->filled('is_verified')) {
				$user->is_verified = $request->is_verified;
			}

			if ($request->filled('subscription_offer')) {
				$user->subscription_offer = $request->subscription_offer;
			}

			if ($request->filled('seller_type')) {
				$user->seller_type = $request->seller_type;
			}

			if ($request->filled('is_paid')) {
				$user->is_paid = $request->is_paid;
			}

			if ($request->filled('validity')) {
				$user->validity = $request->validity;
			}

			$user->save();



			return back()->with('success','User Added Successfully');


		}




		public function update(Request $request,$id)
		{

			$user = User::find($id);

			$this->validate($request,[
				'first_name' =>'required',	
				'last_name' =>'required',	
				'email' =>'required|email|unique:users,email,'.$user->id,	
				'mobile_no' =>'required|digits:10|unique:users,mobile_no,'.$user->id,	
				'address' =>'required',	
				'pincode' =>'required|digits:6',	
				'state_id' =>'required',	
				'city_id' =>'required',	 
				'gender' =>'required',	

			]);

			$user->role = $request->role;
			$user->first_name = $request->first_name;
			$user->last_name = $request->last_name;
			$user->email = $request->email;
			$user->mobile_no = $request->mobile_no;
			$user->city_id = $request->city_id;
			$user->state_id = $request->state_id;
			$user->city_id = $request->city_id;
			$user->address = $request->address;
			$user->pincode = $request->pincode;
			$user->gender = $request->gender;

			$user->password = Hash::make($request->password); 

			if ($request->hasFile('profile_pic')) 
			{

				$image = $request->file('profile_pic');
				$imagename=uniqid().'.'.$image->getClientOriginalExtension();
				$image->move(public_path('profiles'),$imagename); 

					$user->profile_pic = $imagename;

				}
 

				if ($request->filled('company_name')) {
					$user->company_name = $request->company_name;
				}

				if ($request->filled('is_verified')) {
					$user->is_verified = $request->is_verified;
				}

				if ($request->filled('subscription_offer')) {
					$user->subscription_offer = $request->subscription_offer;
				}

				if ($request->filled('seller_type')) {
					$user->seller_type = $request->seller_type;
				}

				if ($request->filled('is_paid')) {
					$user->is_paid = $request->is_paid;
				}

				if ($request->filled('validity')) {
					$user->validity = $request->validity;
				}

				$user->save();


				return redirect()->route('admin.customer.index')->with('success','User updated Successfully');


			}








			public function edit(Request $request,$id)
			{
				$user =User::findOrFail($id);	
				$states = State::all();	
				$cities = City::where('state_id',$user->state_id)->get();	
				return view('admin.customer.edit',compact('user','states','cities'));
			}

			public function destroy($id)
			{
				User::find($id)->delete();
				return back()->with('success','User Deleted Successfully');
			}


		}
