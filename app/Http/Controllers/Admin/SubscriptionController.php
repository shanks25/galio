<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
        $this->validate($request, [
            'title'   => 'required',
            'price' => 'required',
            'days' => 'required',
            'desc' => 'required',
        ]);
        $da['title'] = $request->title;
        $da['price'] = $request->price;
        $da['days'] = $request->days;
        $da['detail'] = $request->desc;
        Subscription::create($da);
        Session::flash('message', 'Plan Added Sucessfully');
        Session::flash('alert-type', 'success');
        return redirect()->route('admin-subscription');
    }
    public function edit($id)
    {
        $subscription = Subscription::findOrFail($id);
        return view('admin.subscription.edit', compact('subscription'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'   => 'required',
            'price' => 'required',
            'days' => 'required',
            'desc' => 'required',
        ]);
        $subscription = Subscription::findOrFail($id);
        $subscription->title = $request->title;
        $subscription->price = $request->price;
        $subscription->days = $request->days;
        $subscription->detail = $request->desc;
        $subscription->save();
        Session::flash('message', 'Plan update Sucessfully');
        Session::flash('alert-type', 'success');
        return redirect()->route('admin-subscription');
    }
    public function destroy($id)
    {

        //get the record of Contact by id
        $sub = Subscription::findOrFail($id);
        $sub->delete();
        Session::flash('message', 'Plan Delete Sucessfully');
        Session::flash('alert-type', 'success');
        return redirect()->route('admin-subscription');
    }
}
