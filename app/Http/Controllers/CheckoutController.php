<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Cart;
use App\Order;

class CheckoutController extends Controller
{
    // public function step1()
    // {
    // 	if(Auth::check()){
    // 		return redirect()->route('checkout.shipping');
    // 	}

    // 	return redirect('login');
    // }

    public function shipping()
    {
    	return view('front.shipping-info');
    }

    public function payment()
    {
        return view('front.payment');
    }

    public function storePayment(Request $request)
    {   
        $amt = Cart::getTotal()*100;

    // Set your secret key: remember to change this to your live secret key in production
    // See your keys here: https://dashboard.stripe.com/account/apikeys
        \Stripe\Stripe::setApiKey("sk_test_qSlbvZ7d0ChwzOWliwdfk4CR");

    // Token is created using Checkout or Elements!
    // Get the payment token ID submitted by the form:
        $token = $request->stripeToken;

        $charge = \Stripe\Charge::create([
            'amount' => $amt,
            'currency' => 'idr',
            'description' => 'Example charge',
            'source' => $token,
            'metadata' => ['order_id' => 6735],
        ]);

        //create the order
        Order::createOrder();

        return "Order Completed";
    }
}
