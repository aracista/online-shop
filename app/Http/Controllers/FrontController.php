<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class FrontController extends Controller
{
    public function index()
    {
    $phones = Product::all();
    	return view('front.home',compact('phones'));
    }
 
    public function phones()
    {
        $phones = Product::all();
    	return view('front.phones',compact('phones'));
    }

   public function phone($id)
    {
        $phone = Product::find($id);
        return view('front.phone',compact('phone'));
    }
}
