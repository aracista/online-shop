<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
    	return view('front.home');
    }

    public function phones()
    {
    	return view('front.phones');
    }

   public function phone()
    {
    	return view('front.phone');
    }
}
