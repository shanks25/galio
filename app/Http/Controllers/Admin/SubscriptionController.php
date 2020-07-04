<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function index()
    {
        $subscription = Subscription::all();
        return view('admin.subscription.index', compact('subscription'));
    }
    public function create()
    {
        return view('admin.subscription.create');
    }
    public function store(Request $request)
    {
        $da['title'] = $request->title;
        $da['price'] = $request->price;
        $da['days'] = $request->days;
        $da['detail'] = $request->desc;
        Subscription::create($da);
        return redirect()->route('admin-subscription');
        // return view('admin.subscription.create');
    }
}
