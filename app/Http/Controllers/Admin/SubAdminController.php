<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SubAdminController extends Controller
{
	public function index()
	{
		$users = Admin::where('id','!=',1)->get();
		return view('admin.subadmin.index',compact('users'));
	}


	public function create()
	{
		return view('admin.subadmin.create');
	}


	public function store(Request $request)
	{


		$this->validate($request,[

			'email' =>'required|email|unique:admins',	
			'mobile_no' =>'required|digits:10|unique:admins',	 

		]);

		$user =  new Admin ;

		$user->email = $request->email;
		$user->mobile_no = $request->mobile_no;
		$user->name = $request->name;  
		$user->password = Hash::make($request->password); 


		$user->save();



		return back()->with('success','SubAdmin Added Successfully');


	}


	public function edit(Request $request,$id)
	{
		$user =Admin::findOrFail($id);	 
		return view('admin.subadmin.edit',compact('user'));
	}



	public function update(Request $request,$id)
	{

		$user = Admin::find($id);

		$this->validate($request,[
			'name' =>'required',	 
			'email' =>'required|email|unique:users,email,'.$user->id,	
			'mobile_no' =>'required|digits:10|unique:users,mobile_no,'.$user->id,	


		]);

		$user->email = $request->email;
		$user->mobile_no = $request->mobile_no;
		$user->name = $request->name;   
 

		$user->save();


		return redirect()->route('admin.subadmin.index')->with('success','SubAdmin updated Successfully');


	} 



	public function destroy($id)
	{
		Admin::find($id)->delete();
		return back()->with('success','SubAdmin Deleted Successfully');
	}

}
