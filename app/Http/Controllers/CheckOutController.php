<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckOutController extends Controller
{
    public function payment()
    {
        return view('FrontEnd.checkOut.checkout_payment');
    }

    public function order(Request $request){
        $paymentType = $request->payment_type;

        if($paymentType == cash)
        {
            return view('FrontEnd.inclue.home');
        }

        else
        return view('FrontEnd.inclue.home');

    }


}
