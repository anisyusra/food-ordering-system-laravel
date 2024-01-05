<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserOrder;

class UserOrderController extends Controller
{
    public function store(Request $request)
    {
        $orderDetails = new UserOrder();
        $orderDetails->name = $request->category_name;
        $orderDetails->phone_number = $request->phone_number;
        $orderDetails->email = $request->email;
        $orderDetails->save();
        dd($orderDetails);

        return back()->with('sms', 'Category Saved');
    }
}
