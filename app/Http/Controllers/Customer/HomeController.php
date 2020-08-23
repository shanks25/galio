<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\ProductMaster;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
         $latestProduct=ProductMaster::with('productImages','productImagesFirst')->orderBy('id','desc')->limit(10)->get();
        return view('customer.home.index', compact('latestProduct'));
    }
}
