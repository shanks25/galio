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
        return view('admin.subscription.index',compact('subscription'));
    }
    public function create()
    {
        return view('admin.subscription.create');
    }
}
