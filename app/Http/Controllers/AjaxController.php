<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;

class AjaxController extends Controller
{

	public function getCity(Request $request)
	{

		$id = $request->id;
		$cities = City::all();
		if ($request->id) {
			$cities =  $cities->where('state_id', $id);
		}

		return response()->json(['city' => $cities]); 

	}

}
